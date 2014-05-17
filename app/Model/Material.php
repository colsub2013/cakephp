<?php
/**
 * Created by PhpStorm.
 * User: maximiliano.contini
 * Date: 02/05/14
 * Time: 09:53
 */

App::uses('AppModel', 'Model');
class Material extends AppModel {

  public $validate = array(
    'nombre' => array(
      'rule' => 'notEmpty'
    ),
    'descripcion' => array(
      'rule' => 'notEmpty'
    )
  );
  
}