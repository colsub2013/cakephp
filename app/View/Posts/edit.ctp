<!-- File: /app/View/Posts/edit.ctp -->
<h1>Edici&oacute;n de Material</h1>
<fieldset>
    <?php
      echo $this->Form->create('Post');
      echo $this->Form->input('title', array('label' => 'Nombre'));
      echo $this->Form->input('body', array('rows' => '3', 'label' => 'Descripci&oacute;n'));
      echo $this->Form->input('id', array('type' => 'hidden'));
      $id = 1;
      echo $this->HTML->link('Volver', array('controller' => 'Posts','action'=> 'back', $id), array( 'class' => 'button'));
      echo $this->Form->end(array('label' => 'Guardar', 'div' => false, 'class' => 'envio'));
    ?>
</fieldset>
