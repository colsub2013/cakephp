<?php
/**
 * Created by PhpStorm.
 * User: maximiliano.contini
 * Date: 02/05/14
 * Time: 09:53
 */

class Post extends AppModel {

  public $validate = array(
    'title' => array(
      'rule' => 'notEmpty'
    ),
    'body' => array(
      'rule' => 'notEmpty'
    )
  );
  
}