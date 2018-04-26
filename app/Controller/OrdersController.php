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
    public function index()
    {
        $this->Order->recursive = 0;
        $this->paginate = [
        	'order' => 'Order.id DESC',
			'fields' => ['Order.id','Order.dress_id','Order.order_date','Order.delivery_date','Order.advance_amount','Order.total_cost',
					'Customer.id','Customer.name','Dress.id','Dress.type','User.id','User.first_name','Order.status'
				],
			'limit'=>50
		];

		Configure::load('tailor');
		$status = Configure::read('tailor.status');
        $orders = $this->Paginator->paginate();
        $this->set(compact('orders','status'));
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
        $this->set('order', $this->Order->find('first', $options));
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
			$this->request->data['Order']['tailor_assigned'] = date('Y-m-d H:i:s', strtotime($this->request->data['Order']['tailor_assigned']));

            debug($this->request->data);
			$this->Order->create();
            if ($this->Order->save($this->request->data)) {
            	debug('in');
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
			debug($this->Order->data);die;
		}
		$this->Order->recursive = 0;
		$this->paginate = [
			'order' => 'Order.id ASC',
			'fields' => ['Order.id','Order.dress_id','Order.order_date','Order.delivery_date','Order.advance_amount','Order.total_cost',
				'Customer.id','Customer.name','Dress.id','Dress.type','User.id','User.first_name','Order.status'
			],
			'conditions'=>['Order.status'=>1],
			'limit'=>50
		];

		Configure::load('tailor');
		$status = Configure::read('tailor.status');
		$orders = $this->Paginator->paginate();
		$users = $this->Order->User->find('list',['fields'=>['id','full_name'],'conditions'=>['role'=>2]]);
		$this->set(compact('orders','status','users'));
	}
}
