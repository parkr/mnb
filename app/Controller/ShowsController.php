<?php
App::uses('AppController', 'Controller');
/**
 * Shows Controller
 *
 * @property Show $Show
 */
class ShowsController extends AppController {

    public function beforeFilter(){
        parent::beforeFilter();
        $this->Auth->allow('index');
    }

    public function index(){
        $this->Show->recursive = 0;
        $this->set("shows", $this->Show->find('all', array('order' => 'date DESC')));
    }

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
        $this->layout = "cake";
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
        $this->layout = "cake";
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
        $this->layout = "cake";
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
        $this->layout = "cake";
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
        $this->layout = "cake";
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
