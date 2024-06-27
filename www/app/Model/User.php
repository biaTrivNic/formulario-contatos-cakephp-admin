<?php

App::uses("SimplePasswordHasher", "Controller/Component/Auth");

class User extends AppModel
{
    public $validate = array(
        'nome' => array(
            'minLength' => array(
                'rule' => array('minLength', '3'),
                'message' => 'Your name must be at least 3 characters long.',
            )
        ),
        'email' => array(
            'email' => array(
                'rule' => 'email',
                'message' => 'Invalid email.'
            ),
            'unique' => array(
                'rule' => 'isUnique',
                'message' => 'Email already registered.'
            )
        ),
        'senha' => array(
            'minLength' => array(
                'rule' => array('minLength', '8'),
                'message' => 'Your password must be at least 8 characters long.',
            ),
            'pattern' => array(
                'rule' => array('custom', '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'),
                'message' => 'Your password must contain at least one uppercase letter, one lowercase letter, and one number.',
            ),
        ),
        'confirmar_senha' => array(
            'matchPasswords' => array(
                'rule' => array('matchPasswords'),
                'message' => 'Suas senhas devem conresponder',
            )
        ),
    );
    public function beforeSave($options = array())
    {
        if (isset($this->data[$this->alias]['senha'])) {
            $passwordHasher = new SimplePasswordHasher();
            $this->data[$this->alias]['senha'] = $passwordHasher->hash($this->data[$this->alias]['senha']);
        }
        return true;
    }

    public function matchPasswords($check) {
        $confirmarSenha = array_values($check)[0];
        $senha = $this->data[$this->alias]['senha'];
    
        return $confirmarSenha === $senha;
    }
}
