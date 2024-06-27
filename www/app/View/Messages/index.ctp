<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <?php foreach ($messages as $message) : ?>
    <tr>
        <td><?php echo $message['Message']['nome']; ?></td>
        <td><?php echo $message['Message']['email']; ?></td>
        <td><?php echo $message['Message']['mensagem']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($message); ?>
    </table>