<!-- File: /app/View/Posts/add.ctp -->
<h1>Agregado de Material</h1>
<?php
    echo $this->Form->create('Post');
    echo $this->Form->input('title', array('label' => 'Nombre'));
    echo $this->Form->input('body', array('rows' => '3', 'label' => 'Descripci&oacute;n'));
    $id = 1;
    echo $this->HTML->link('Volver', array('controller' => 'Posts','action'=> 'back', $id), array( 'class' => 'button'));
    echo $this->Form->end(array('label' => 'Guardar', 'div' => false, 'class' => 'envio'));
?>