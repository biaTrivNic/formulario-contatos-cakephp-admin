<?php 

class UsersController extends AppController { 
    
    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('Cadastro feito'));
                return $this->redirect(array('action' => 'login'));
            }
            $this->Flash->error(__('Houve um erro. Tente novamente.'));
        }
    }
    
    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Senha ou usuario incorreto.'));
        }
    }

    public function logout() {
        $this->redirect($this->Auth->logout());
    }

}