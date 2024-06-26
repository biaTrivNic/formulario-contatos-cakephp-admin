<!DOCTYPE html>
<html>

<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        Contato.con
    </title>
    <?php
    echo $this->Html->css('contato');
    ?>
</head>

<body>
    <div class="form_container">
        <?php echo $this->Form->create('User'); ?>
            <?php
            echo $this->Form->input('email', array('class' => 'input', 'label' => 'Email', 'div' => array(
                        'class' => 'field_container',
                    ),));
            echo $this->Form->input('nome', array('class' => 'input', 'label' => 'Nome', 'div' => array(
                        'class' => 'field_container',
                    ),));
            echo $this->Form->input('senha', array('class' => 'input', 'type' => 'password', 'label' => 'Senha', 'div' => array(
                        'class' => 'field_container',
                    ),));
            echo $this->Form->input('confirmar_senha', array('class' => 'input', 'type' => 'password', 'label' => 'Confirme sua senha', 'div' => array(
                        'class' => 'field_container',
                    ),));
            ?>
        <?php echo $this->Form->button('Signup', array('class' => 'btn')) ?>
        <?php echo $this->Form->end(); ?>
    </div>
</body>