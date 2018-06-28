<?php
App::uses('AppController', 'Controller');

/**
 * Orders Controller
 *
 * @property Order $Order
 * @property PaginatorComponent $Paginator
 */
class OrdersController extends AppController
{

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');

    /**
     * index method
     *
     * @return void
     */
    public function index($custid = 0)
    {
        $this->Order->recursive = 0;
        
        if($custid > 0) {
                $this->paginate = [
                        'conditions' => [
                                'Order.customer_id' => $custid,
                            ],
                        'order' => 'Order.delivery_date ASC',
			'fields' => ['Order.id','Order.dress_id','Order.receipt_no','Order.order_date','Order.tailor_date','Order.delivery_date','Order.advance_amount','Order.total_cost',
					'Customer.id','Customer.name','Dress.id','Dress.type','User.id','User.first_name','Order.status'
				],
			'limit'=>50
		];
        } else {
                $this->paginate = [
                        'order' => 'Order.delivery_date ASC',
			'fields' => ['Order.id','Order.dress_id','Order.receipt_no','Order.order_date','Order.tailor_date','Order.delivery_date','Order.advance_amount','Order.total_cost',
					'Customer.id','Customer.name','Dress.id','Dress.type','User.id','User.first_name','Order.status'
				],
			'limit'=>50
		];
        }

        Configure::load('tailor');
        $status = Configure::read('tailor.status');
        $status_color = Configure::read('tailor.status_color');
        $orders = $this->Paginator->paginate();
        $this->set(compact('orders','status','status_color'));
    }
    
    
    public function tailor_order($id = 0)
    {
        $this->Order->recursive = 0;
        
        $this->paginate = [
                'conditions' => [
                        array('Order.user_id' => $id, 'Order.status >= ' => 2),
                    ],
                'order' => 'Order.tailor_date ASC',
                'fields' => ['Order.id','Order.dress_id','Order.receipt_no','Order.order_date','Order.tailor_date','Order.delivery_date','Order.advance_amount','Order.total_cost',
                                'Customer.id','Customer.name','Dress.id','Dress.type','User.id','User.first_name','Order.status'
                        ],
                'limit'=>50
        ];

        Configure::load('tailor');
        $status = Configure::read('tailor.status');
        $status_color = Configure::read('tailor.status_color');
        $orders = $this->Paginator->paginate();
        $this->set(compact('orders','status','status_color'));
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null)
    {
        if (!$this->Order->exists($id)) {
            throw new NotFoundException(__('Invalid order'));
        }
        $options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
        $order = $this->Order->find('first', $options);
        $mesurements = json_decode($order['Order']['mesurements'],true);
        $this->set(compact('order', 'mesurements'));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->request->data['Order']['mesurements'] = json_encode($this->request->data['Order']['measurements']);
            $this->request->data['Order']['order_date'] = date('Y-m-d H:i:s', strtotime($this->request->data['Order']['order_date']));
			$this->request->data['Order']['delivery_date'] = date('Y-m-d H:i:s', strtotime($this->request->data['Order']['delivery_date']));
			$this->request->data['Order']['tailor_date'] = date('Y-m-d H:i:s', strtotime($this->request->data['Order']['tailor_date']));
			//$this->request->data['Order']['tailor_assigned'] = date('Y-m-d H:i:s', strtotime($this->request->data['Order']['tailor_assigned']));
			$this->request->data['Order']['outstanding_amt'] = $this->request->data['Order']['total_cost'] - $this->request->data['Order']['advance_amount'];

            //debug($this->request->data);
			$this->Order->create();
            if ($this->Order->save($this->request->data)) {
            	//debug('in');
                $this->Flash->success(__('The order has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
            	debug($this->validationErrors);die('here');
                $this->Flash->error(__('The order could not be saved. Please, try again.'));
            }
        }
        $customers = $this->Order->Customer->find('list');
        $dresses = $this->Order->Dress->find('list',['fields'=>['id','type']]);
        $users = $this->Order->User->find('list');
        $this->set(compact('customers', 'dresses', 'users'));
    }



    public function get_customers()
    {
        $result = [];
        if ($this->request->is('post')) {
            $q = $this->request->data['q'];
            $customers = $this->Order->Customer->find('all',['conditions' => ['Customer.mobile LIKE' => "%$q%"],['recursive'=>-1]]);
            foreach($customers as $key=>$customer){
                $result[$key]['id'] = $customer['Customer']['id'];
                $result[$key]['name'] = $customer['Customer']['mobile'];
            }
        }
        echo json_encode($result);
        die;
    }

    public function get_customer()
    {
        $result = [];
        if ($this->request->is('post')) {
            $id = $this->request->data['id'];
            $customer = $this->Order->Customer->find('first', ['conditions' => ['Customer.id' => $id], ['recursive' => -1]]);
            $data = $customer['Customer'];
            echo json_encode($data);
            die;
        }
    }

    public function get_dress_measurements()
    {
        $this->loadModel('DressesMesurement');
        $dress_id = 1;
        $measurements = $this->DressesMesurement->find('all',['conditions'=> ['DressesMesurement.dress_id' => $dress_id]]);
        foreach($measurements as $key => $value){

        }
        debug($measurements);
die;
        $result = [];
        if ($this->request->is('post')) {
            $id = $this->request->data['id'];
            $customer = $this->Dress->find('all', ['recursive' => -1]);
            $data = $customer['Customer'];
            echo json_encode($data);
            die;
        }
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null)
    {
        if (!$this->Order->exists($id)) {
            throw new NotFoundException(__('Invalid order'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Order->save($this->request->data)) {
                $this->Flash->success(__('The order has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The order could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
            $this->request->data = $this->Order->find('first', $options);
        }
        $customers = $this->Order->Customer->find('list');
        $dresses = $this->Order->Dress->find('list');
        $users = $this->Order->User->find('list');
        $this->set(compact('customers', 'dresses', 'users'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null)
    {
        $this->Order->id = $id;
        if (!$this->Order->exists()) {
            throw new NotFoundException(__('Invalid order'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Order->delete()) {
            $this->Flash->success(__('The order has been deleted.'));
        } else {
            $this->Flash->error(__('The order could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

	public function assign_tailor()
	{
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Order']['status'] = 2;
            if ($this->Order->save($this->request->data)) {
                $this->Flash->success(__('Tailor has been assigned.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('Tailor could not be assigned. Please, try again.'));
            }
		}
		$this->Order->recursive = 0;
		$this->paginate = [
			'order' => 'Order.id ASC',
			'fields' => ['Order.id','Order.dress_id','Order.order_date','Order.delivery_date','Order.advance_amount','Order.total_cost','Order.tailor_price',
				'Customer.id','Customer.name','Dress.id','Dress.type','User.id','User.first_name','Order.status'
			],
			'conditions'=>['Order.status'=>array(1,2)],
			'limit'=>50
		];

		Configure::load('tailor');
		$status = Configure::read('tailor.status');
		$orders = $this->Paginator->paginate();
		$users = $this->Order->User->find('list',['fields'=>['id','full_name'],'conditions'=>['role'=>2]]);
		$this->set(compact('orders','status','users'));
	}
        
        public function tailor_receipt($id = null) {
                if (!$this->Order->exists($id)) {
			throw new NotFoundException(__('Invalid order'));
		}
		$options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
		$order = $this->Order->find('first', $options);
                $mesurements = json_decode($order['Order']['mesurements'],true);
//                debug($mesurements); die;
                Configure::load('tailor');
                $status_color = Configure::read('tailor.status_color');
		$this->set(compact('order','status_color','mesurements'));
        }

	public function invoice($id = null)
	{
		if (!$this->Order->exists($id)) {
			throw new NotFoundException(__('Invalid order'));
		}
		$options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
		$order = $this->Order->find('first', $options);
		$this->set(compact('order'));
	}

	public function mark_paid($id=null) {
		if (!$this->Order->exists($id)) {
			throw new NotFoundException(__('Invalid order'));
		}

		$order = [];
		$order['Order']['id'] = $id;
		$order['Order']['outstanding_amt'] = 0;
		$order['Order']['status'] = 4;

		if ($this->Order->save($order)) {
			$this->Flash->success(__('Tailor has been assigned.'));
			return $this->redirect($this->referer());
		} else {
			$this->Flash->error(__('Tailor could not be assigned. Please, try again.'));
			return $this->redirect($this->referer());
		}
	}
        
        public function stich_done($id=null) {
		if (!$this->Order->exists($id)) {
			throw new NotFoundException(__('Invalid order'));
		}

		$order = [];
		$order['Order']['id'] = $id;
		$order['Order']['status'] = 3;

		if ($this->Order->save($order)) {
			$this->Flash->success(__('Tailor has been assigned.'));
			return $this->redirect($this->referer());
		} else {
			$this->Flash->error(__('Tailor could not be assigned. Please, try again.'));
			return $this->redirect($this->referer());
		}
	}
}
