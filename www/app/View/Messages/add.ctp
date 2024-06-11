<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/contato.css">
</head>

<body>
    <div class="content_contato">
        <h1 class='title'>Envie sua mensagem</h1>
        <h2 class="subtitle">Sou todo ouvidos!</h2>
        <div class="form_container">
            <?php
            echo $this->Form->create('Message');
            echo $this->Form->input(
                'nome',
                array(
                    'label' => 'Nome',
                    'class' => 'input',
                    'div' => array(
                        'class' => 'field_container',
                    ),
                )
            );
            echo $this->Form->input(
                'email',
                array(
                    'label' => 'Email',
                    'class' => 'input',
                    'div' => array(
                        'class' => 'field_container',
                    ),
                )
            );
            echo $this->Form->input(
                'mensagem',
                array(
                    'label' => 'Mensagem',
                    'class' => 'input',
                    'div' => array(
                        'class' => 'field_container',
                    ),
                )
            );
            echo $this->Form->end(array(
                'label' => 'Enviar mensagem',
                'class' => 'btn'
            ));
            ?>
        </div>
    </div>

</body>

</html>