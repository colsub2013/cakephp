<!-- File: /app/View/Posts/index.ctp -->
<h1 class="centrado">Materiales</h1>
<table>
  <tr>
    <th>Acciones</th>
    <!-- <th>Id</th> -->
    <th>Nombre</th>
    <th>Fecha de Creaci&oacute;n</th>
  </tr>
  <!-- Here is where we loop through our $posts array, printing out post info -->
  <?php foreach ($posts as $post): ?> <!-- Esta es la variable que se 'post' fijada por set() en el controlador -->
  <tr>
    <td>
      <?php echo $this->Html->link(
        'Editar',
        array('action' => 'edit', $post['Post']['id'])
      ); ?>
      <?php echo $this->Form->postLink(
        'Borrar',
        array('action' => 'delete', $post['Post']['id']),
        array('confirm' => 'Are you sure?')
        );
      ?>
    </td>
    <!--
    <td>
      <?php echo $post['Post']['id']; ?>
    </td>
    -->
    <td>
      <?php echo $this->Html->link($post['Post']['title'],
        array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
    </td>
    <td>
      <?php echo $post['Post']['created']; ?>
    </td>
  </tr>
  <?php endforeach; ?>
  <?php unset($post); ?>
  <?php echo $this->Html->link(
    'Agregar Material',
    array('controller' => 'posts', 'action' => 'add')
  ); ?>

</table>