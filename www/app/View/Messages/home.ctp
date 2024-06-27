<!-- File: /app/View/Posts/index.ctp -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/home.css">
</head>

<body>
    <div class="content_container">
        <h1 class="title">ACHO QUE VOCÊ PRECISA DE UMA AJUDINHA</h1>
        <h2 class="subtitle">Que tal enviar uma mensagem com a sua dúvida?</h2>
        <?php echo $this->Html->link(
            'Entre em Contato',
            array('controller' => 'messages', 'action' => 'add'),
            array('class'=>'btn')
        ); ?>
    </div>
    <!-- <table>
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
    </table> -->

</body>

</html>