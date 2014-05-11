<!-- File: /app/View/Posts/view.ctp -->
<h1><?php echo h($post['Post']['title']); ?></h1>
<p>
  <small>Fecha de Creaci&oacute;n: 
    <?php
      $date = date("d/m/Y H:i", strtotime($post['Post']['created']));
      echo $date;  
    ?>
  </small></p>
<p><?php echo h($post['Post']['body']); ?></p>
<p>
  <?php
    $id = 1;
    echo $this->Html->link("Volver", array('controller' => 'Posts','action'=> 'back', $id), array( 'class' => 'button')) 
  ?>
</p>