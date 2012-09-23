<?php
App::uses('AppController', 'Controller');
/**
 * Shows Controller
 *
 * @property Show $Show
 */
class ShowsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Show->recursive = 0;
		$this->set('shows', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Show->id = $id;
		if (!$this->Show->exists()) {
			throw new NotFoundException(__('Invalid show'));
		}
		$this->set('show', $this->Show->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Show->create();
			if ($this->Show->save($this->request->data)) {
				$this->Session->setFlash(__('The show has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The show could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Show->id = $id;
		if (!$this->Show->exists()) {
			throw new NotFoundException(__('Invalid show'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Show->save($this->request->data)) {
				$this->Session->setFlash(__('The show has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The show could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Show->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Show->id = $id;
		if (!$this->Show->exists()) {
			throw new NotFoundException(__('Invalid show'));
		}
		if ($this->Show->delete()) {
			$this->Session->setFlash(__('Show deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Show was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Show->recursive = 0;
		$this->set('shows', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Show->id = $id;
		if (!$this->Show->exists()) {
			throw new NotFoundException(__('Invalid show'));
		}
		$this->set('show', $this->Show->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Show->create();
			if ($this->Show->save($this->request->data)) {
				$this->Session->setFlash(__('The show has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The show could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Show->id = $id;
		if (!$this->Show->exists()) {
			throw new NotFoundException(__('Invalid show'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Show->save($this->request->data)) {
				$this->Session->setFlash(__('The show has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The show could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Show->read(null, $id);
		}
	}

/**
 * admin_delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Show->id = $id;
		if (!$this->Show->exists()) {
			throw new NotFoundException(__('Invalid show'));
		}
		if ($this->Show->delete()) {
			$this->Session->setFlash(__('Show deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Show was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
