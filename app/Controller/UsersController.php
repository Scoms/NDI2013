<?php

class UsersController extends AppController{

    var $uses = array('User');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add','logout','login');
    }

    public function login() {
        if ($this->request->is('post')) {
            if (!$this->Auth->login()) {
                $this->Session->setFlash(__('Mauvais login / mot de passe '));
            }
        }
        return $this->redirect(array('controller'=>'Home'));
    }

    public function logout() {
        $this->redirect($this->Auth->logout());
    }

    public function listAll(){/*
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());*/
    }

    public function view($id = null) {
        /*
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('User invalide'));
        }
        $this->set('user', $this->User->read(null, $id));*/
    }

    public function add() 
    {
        if($this->request->is('post'))
        {
            $this->User->create();
            $username = $this->request->data['User']['username'];
            //Check that the user name is free
            $userInBase = $this->User->find('first',array('conditions'=>array('username'=> $username)));
            
            if($userInBase)
            {           
                $this->Session->setFlash(__("Le nom d'utilisateur existe déjà.")); 
            }
            else
            {
                $this->User->save($this->request->data);
                $this->Session->setFlash(__('Compte crée !')); 
                return $this->redirect(array('controller'=> 'Home'));  
            }    
       }
    }

    public function edit($id = null) {
        /*$this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('User Invalide'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('L\'user a été sauvegardé'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('L\'user n\'a pas été sauvegardé. Merci de réessayer.'));
            }
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }*/
    }

    public function delete($id = null) {
        /*$this->User->id = $id;
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if (!$this->User->exists()) {
            throw new NotFoundException(__('User invalide'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User supprimé'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('L\'user n\'a pas été supprimé'));
        return $this->redirect(array('action' => 'index'));*/
    }   
}
?>