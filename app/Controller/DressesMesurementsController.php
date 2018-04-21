<?php
App::uses('AppController', 'Controller');
/**
 * DressesMesurements Controller
 *
 * @property DressesMesurement $DressesMesurement
 * @property PaginatorComponent $Paginator
 */
class DressesMesurementsController extends AppController {

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
		$this->DressesMesurement->recursive = 0;
		$this->set('dressesMesurements', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DressesMesurement->exists($id)) {
			throw new NotFoundException(__('Invalid dresses mesurement'));
		}
		$options = array('conditions' => array('DressesMesurement.' . $this->DressesMesurement->primaryKey => $id));
		$this->set('dressesMesurement', $this->DressesMesurement->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DressesMesurement->create();
			if ($this->DressesMesurement->save($this->request->data)) {
				$this->Flash->success(__('The dresses mesurement has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The dresses mesurement could not be saved. Please, try again.'));
			}
		}
		$dresses = $this->DressesMesurement->Dress->find('list');
		$mesurements = $this->DressesMesurement->Mesurement->find('list');
		$this->set(compact('dresses', 'mesurements'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DressesMesurement->exists($id)) {
			throw new NotFoundException(__('Invalid dresses mesurement'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DressesMesurement->save($this->request->data)) {
				$this->Flash->success(__('The dresses mesurement has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The dresses mesurement could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DressesMesurement.' . $this->DressesMesurement->primaryKey => $id));
			$this->request->data = $this->DressesMesurement->find('first', $options);
		}
		$dresses = $this->DressesMesurement->Dress->find('list');
		$mesurements = $this->DressesMesurement->Mesurement->find('list');
		$this->set(compact('dresses', 'mesurements'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DressesMesurement->id = $id;
		if (!$this->DressesMesurement->exists()) {
			throw new NotFoundException(__('Invalid dresses mesurement'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DressesMesurement->delete()) {
			$this->Flash->success(__('The dresses mesurement has been deleted.'));
		} else {
			$this->Flash->error(__('The dresses mesurement could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
