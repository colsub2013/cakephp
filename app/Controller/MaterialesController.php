<?php
/**
 * Created by PhpStorm.
 * User: maximiliano.contini
 * Date: 02/05/14
 * Time: 10:03
 */

class MaterialesController extends AppController {
  
  public $helpers = array('Html', 'Form');
  public $components = array('Session');

  public function index() {
    $this->set('materiales', $this->Material->find('all'));
  }
  
  public function view($id = null) {
    if (!$id) {
      throw new NotFoundException(__('Edición inválida'));
    }
    $material = $this->Material->findById($id);
    if (!$material) {
      throw new NotFoundException(__('Edición inválida'));
    }
    $this->set('material', $material);
  }
  
  public function add() {
    if ($this->request->is('material')) {
      $this->Material->create();
      if ($this->Material->save($this->request->data)) {
        $this->Session->setFlash(__('Cambios guardados exitosamente.'));
        return $this->redirect(array('action' => 'index'));
      }
      $this->Session->setFlash(__('No se pudieron realizar los cambios.'));
    }
  }
  
  public function edit($id = null) {
    if (!$id) {
      throw new NotFoundException(__('Edición inválida'));
    }
    $material = $this->Material->findById($id);
    if (!$material) {
      throw new NotFoundException(__('Edición inválida'));
    }
    if ($this->request->is(array('material', 'put'))) {
      $this->Material->id = $id;
      if ($this->Material->save($this->request->data)) {
        $this->Session->setFlash(__('Cambios guardados exitosamente.'));
        return $this->redirect(array('action' => 'index'));
      }
      $this->Session->setFlash(__('No se pudieron realizar los cambios.'));
    }
    if (!$this->request->data) {
      $this->request->data = $material;
    }
  }
  
  public function delete($id) {
    if ($this->request->is('get')) {
      throw new MethodNotAllowedException();
    }
    if ($this->Material->delete($id)) {
      $this->Session->setFlash(__('El material con id: %s ha sido borrado.', h($id)));
      return $this->redirect(array('action' => 'index'));
    }
  }
  
  public function back($id) {
    return $this->redirect(array('action' => 'index'));
  }
  
}