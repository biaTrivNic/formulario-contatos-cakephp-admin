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
        <fieldset>
            <?php
            echo $this->Form->input('username', array('class' => 'input', 'label' => 'Username', 'div' => array(
                'class' => 'field_container',
            ),));
            echo $this->Form->input('password', array('class' => 'input', 'label' => 'Password', 'div' => array(
                'class' => 'field_container',
            ),));
            ?>
        </fieldset>
        <?php echo $this->Form->button('Login', array('class' => 'btn')) ?>
        <?php echo $this->Form->end(); ?>
    </div>
</body>