<?php
App::uses('AppController', 'Controller');
/**
 * AlbumCovers Controller
 *
 * @property AlbumCover $AlbumCover
 */
class AlbumCoversController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
        $this->layout = "cake";
		$this->AlbumCover->recursive = 0;
		$this->set('albumCovers', $this->paginate());
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
		$this->AlbumCover->id = $id;
		if (!$this->AlbumCover->exists()) {
			throw new NotFoundException(__('Invalid album cover'));
		}
		$this->set('albumCover', $this->AlbumCover->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
        $this->layout = "cake";
		if ($this->request->is('post')) {
			$this->AlbumCover->create();
			if ($this->AlbumCover->save($this->request->data)) {
				$this->Session->setFlash(__('The album cover has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The album cover could not be saved. Please, try again.'));
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
		$this->AlbumCover->id = $id;
		if (!$this->AlbumCover->exists()) {
			throw new NotFoundException(__('Invalid album cover'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AlbumCover->save($this->request->data)) {
				$this->Session->setFlash(__('The album cover has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The album cover could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->AlbumCover->read(null, $id);
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
		$this->AlbumCover->id = $id;
		if (!$this->AlbumCover->exists()) {
			throw new NotFoundException(__('Invalid album cover'));
		}
		if ($this->AlbumCover->delete()) {
			$this->Session->setFlash(__('Album cover deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Album cover was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
