<?php
App::uses('AppController', 'Controller');
/**
 * TrackListings Controller
 *
 * @property TrackListing $TrackListing
 */
class TrackListingsController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Time');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TrackListing->recursive = 0;
		$this->set('trackListings', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TrackListing->id = $id;
		if (!$this->TrackListing->exists()) {
			throw new NotFoundException(__('Invalid track listing'));
		}
		$this->set('trackListing', $this->TrackListing->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TrackListing->create();
			if ($this->TrackListing->save($this->request->data)) {
				$this->Session->setFlash(__('The track listing has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The track listing could not be saved. Please, try again.'));
			}
		}
		$shows = $this->TrackListing->Show->find('list');
		$this->set(compact('shows'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->TrackListing->id = $id;
		if (!$this->TrackListing->exists()) {
			throw new NotFoundException(__('Invalid track listing'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TrackListing->save($this->request->data)) {
				$this->Session->setFlash(__('The track listing has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The track listing could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->TrackListing->read(null, $id);
		}
		$shows = $this->TrackListing->Show->find('list');
		$this->set(compact('shows'));
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
		$this->TrackListing->id = $id;
		if (!$this->TrackListing->exists()) {
			throw new NotFoundException(__('Invalid track listing'));
		}
		if ($this->TrackListing->delete()) {
			$this->Session->setFlash(__('Track listing deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Track listing was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->TrackListing->recursive = 0;
		$this->set('trackListings', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->TrackListing->id = $id;
		if (!$this->TrackListing->exists()) {
			throw new NotFoundException(__('Invalid track listing'));
		}
		$this->set('trackListing', $this->TrackListing->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->TrackListing->create();
			if ($this->TrackListing->save($this->request->data)) {
				$this->Session->setFlash(__('The track listing has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The track listing could not be saved. Please, try again.'));
			}
		}
		$shows = $this->TrackListing->Show->find('list');
		$this->set(compact('shows'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->TrackListing->id = $id;
		if (!$this->TrackListing->exists()) {
			throw new NotFoundException(__('Invalid track listing'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TrackListing->save($this->request->data)) {
				$this->Session->setFlash(__('The track listing has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The track listing could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->TrackListing->read(null, $id);
		}
		$shows = $this->TrackListing->Show->find('list');
		$this->set(compact('shows'));
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
		$this->TrackListing->id = $id;
		if (!$this->TrackListing->exists()) {
			throw new NotFoundException(__('Invalid track listing'));
		}
		if ($this->TrackListing->delete()) {
			$this->Session->setFlash(__('Track listing deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Track listing was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
