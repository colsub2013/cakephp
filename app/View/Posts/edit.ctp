<!-- File: /app/View/Posts/edit.ctp -->
<h1>Edit Post</h1> 
<fieldset>
    <?php
      echo $this->Form->create('Post');
      echo $this->Form->input('title');
      echo $this->Form->input('body', array('rows' => '3'));
      echo $this->Form->input('id', array('type' => 'hidden'));
      $id = 1;
      echo $this->HTML->link('Volver', array('controller' => 'Posts','action'=> 'back', $id), array( 'class' => 'button'));
      echo $this->Form->end(array('label' => 'Guardar', 'div' => false, 'class' => 'envio'));
    ?>
</fieldset>
