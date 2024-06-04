<h1>Blog posts</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($usuarios as $usuario): ?>
    <tr>
        <td><?php echo $usuario['Usuario']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($usuario['Usuario']['nome'],
array('controller' => 'usuarios', 'action' => 'view', $usuario['Usuario']['id'])); ?>
        </td>
        <td><?php echo $usuario['Usuario']['email']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($usuario); ?>
</table>