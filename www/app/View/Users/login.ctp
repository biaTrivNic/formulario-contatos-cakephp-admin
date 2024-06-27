<!DOCTYPE html>
<html>

<head>
    <?php

use function PHPSTORM_META\type;

 echo $this->Html->charset(); ?>
    <title>
        Contato.con
    </title>
    <?php
    echo $this->Html->css('login');
    ?>
</head>

<body>
    <div class="content_container">
        <div class="text_container">
            <div>
                <h1>Welcome</h1>
                <h1>Back!</h1>
            </div>
        </div>

        <div class="form_container">
            <h1>Login</h1>
            <?php echo $this->Form->create('User'); ?>
            <?php
            echo $this->Form->input('email', array('class' => 'input', 'label' => 'Email', 'div' => array(
                'class' => 'field_container',
            ),));
            echo $this->Form->input('senha', array('class' => 'input', 'type' => 'password', 'label' => 'Senha', 'div' => array(
                'class' => 'field_container',
            ),));
            ?>
            <?php echo $this->Form->button('Login', array('class' => 'btn')) ?>
            <?php echo $this->Form->end(); ?>
            <p>Don't have an account yet? <a href="/users/add">Create an account.</a></p>
        </div>
    </div>
</body>