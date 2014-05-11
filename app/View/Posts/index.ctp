<!-- File: /app/View/Posts/index.ctp -->
<h1 class="centrado">Materiales</h1>
<table>
  <tr>
    <th>Acciones</th>
    <th>Nombre</th>
    <th>Fecha de Creaci&oacute;n</th>
  </tr>
  <!-- Here is where we loop through our $posts array, printing out post info -->
  <?php foreach ($posts as $post): ?> <!-- Esta es la variable que se 'post' fijada por set() en el controlador -->
  <tr>
    <td>
      <input type="hidden" id="id_<?php echo $post['Post']['id']; ?>" value="<?php echo $post['Post']['id']; ?>" />
      <?php echo $this->Html->link(
        'Modificar',
        array('action' => 'edit', $post['Post']['id'])
      ); ?>
      <?php echo $this->Form->postLink(
        'Borrar',
        array('action' => 'delete', $post['Post']['id']),
        array('confirm' => 'Are you sure?')
        );
      ?>
    </td>
    <td>
      <?php echo $this->Html->link($post['Post']['title'],
        array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
    </td>
    <td>
      <?php 
        $date = date("d/m/Y H:i", strtotime($post['Post']['created']));
        echo $date; 
      ?>
    </td>
  </tr>
  <?php endforeach; ?>
  <?php unset($post); ?>
  <?php echo $this->Html->link(
    'Agregar Material',
    array('controller' => 'posts', 'action' => 'add')
  ); ?>

</table>