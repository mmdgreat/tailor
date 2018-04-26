<?php
App::uses('AppController', 'Controller');

/**
 * Dresses Controller
 *
 * @property Dress $Dress
 * @property PaginatorComponent $Paginator
 */
class DressesController extends AppController
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
        $this->Dress->recursive = 0;
        $this->set('dresses', $this->Paginator->paginate());
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
        if (!$this->Dress->exists($id)) {
            throw new NotFoundException(__('Invalid dress'));
        }
        $options = array('conditions' => array('Dress.' . $this->Dress->primaryKey => $id));
        $this->set('dress', $this->Dress->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            debug($this->request);
            $this->Dress->create();
            if ($this->Dress->save($this->request->data)) {
                $this->Flash->success(__('The dress has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The dress could not be saved. Please, try again.'));
            }
        }
        //$mesurements = $this->Dress->Mesurement->find('list');
        //$this->set(compact('mesurements'));
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
        if (!$this->Dress->exists($id)) {
            throw new NotFoundException(__('Invalid dress'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Dress->save($this->request->data)) {
                $this->Flash->success(__('The dress has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The dress could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Dress.' . $this->Dress->primaryKey => $id));
            $this->request->data = $this->Dress->find('first', $options);
        }
        $mesurements = $this->Dress->Mesurement->find('list');
        $this->set(compact('mesurements'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function get_dress($id = null)
    {
        if ($this->request->is('post')) {
            $id = $this->request->data['id'];
            $dress = $this->Dress->find('first', ['conditions' => ['Dress.id' => $id]]);
            echo json_encode($dress);
        }
        die;
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
        $this->Dress->id = $id;
        if (!$this->Dress->exists()) {
            throw new NotFoundException(__('Invalid dress'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Dress->delete()) {
            $this->Flash->success(__('The dress has been deleted.'));
        } else {
            $this->Flash->error(__('The dress could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
