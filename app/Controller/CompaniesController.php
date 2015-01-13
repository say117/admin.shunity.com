<?php

App::uses('AppController', 'Controller');

class CompaniesController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('login', 'add');
    }

    public function login() {
        if (!$this->request->is('post')) {
            return;
        }

        if (!$this->Auth->login()) {
            return $this->Session->setFlash('ユーザー名かパスワードが違います', 'default', array('class' => 'alert danger'));
        }
        $this->setFlashAndRedirect('ログインしました。', '/companies/', array('class' => 'alert success'));
    }

    public function logout() {
        $this->setFlashAndRedirect('ログアウトしました。', $this->Auth->logout(), array('class' => 'alert success'));
    }

    public function index() {
        
    }

    public function add() {
        if (!$this->request->is('post')) {
           return null;
        }

        if (!$this->Company->save($this->request->data)) {
            if (!empty($this->Company->validationErrors)) {
                $this->set('errors', $this->Company->validationErrors);
                return;
            }
            return $this->Session->setFlash('企業登録に失敗しました', 'default', array('class' => 'alert danger'));
        }
        $this->setFlashAndRedirect('企業登録が完了しました', '/', array('class' => 'alert success'));
    }
}
