<?php
App::uses('AppController', 'Controller');
/**
 * Mesurements Controller
 *
 * @property Mesurement $Mesurement
 * @property PaginatorComponent $Paginator
 */
class MesurementsController extends AppController {

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
	public function index() {
		$this->Mesurement->recursive = 0;
		$this->set('mesurements', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mesurement->exists($id)) {
			throw new NotFoundException(__('Invalid mesurement'));
		}
		$options = array('conditions' => array('Mesurement.' . $this->Mesurement->primaryKey => $id));
		$this->set('mesurement', $this->Mesurement->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mesurement->create();
			if ($this->Mesurement->save($this->request->data)) {
				$this->Flash->success(__('The mesurement has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The mesurement could not be saved. Please, try again.'));
			}
		}
		$dresses = $this->Mesurement->Dress->find('list');
		$this->set(compact('dresses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Mesurement->exists($id)) {
			throw new NotFoundException(__('Invalid mesurement'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Mesurement->save($this->request->data)) {
				$this->Flash->success(__('The mesurement has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The mesurement could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mesurement.' . $this->Mesurement->primaryKey => $id));
			$this->request->data = $this->Mesurement->find('first', $options);
		}
		$dresses = $this->Mesurement->Dress->find('list');
		$this->set(compact('dresses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Mesurement->id = $id;
		if (!$this->Mesurement->exists()) {
			throw new NotFoundException(__('Invalid mesurement'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Mesurement->delete()) {
			$this->Flash->success(__('The mesurement has been deleted.'));
		} else {
			$this->Flash->error(__('The mesurement could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
