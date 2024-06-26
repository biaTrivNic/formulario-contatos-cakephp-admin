<?php 

class User extends AppModel {
    public $validate = array(
        'nome' => array(
            'minLength' => array(
                'rule' => array('minLength', '3'),
                'message' => 'Seu nome deve conter pelo menos 3 caractéres',
            )
        ),
        'email' => array(
            'rule' => 'email',
            'message' => 'Email inválido',
        ),
        'senha' => array(
            'minLength' => array(
                'rule' => array('minLength', '8'),
                'message' => 'Sua senha deve conter pelo menos 8 caractéres',
            ),
            'pattern' => array(
                'rule' => array('custom', '^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$'),
                'message' => 'Sua senha deve conter pelo menos uma letra maiúscula, uma letra minúscula e um número',
            ),
        ),
        // 'confirmar_senha' => array(
        //     'matchPasswords' => array(
        //         'rule' => 'matchPasswords',
        //         'message' => 'Suas senhas devem conresponder',
        //     )
        // ),
    );

}