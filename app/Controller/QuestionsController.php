<?php

App::uses('AppController', 'Controller');

class QuestionsController extends AppController {

    public $uses = array('Question');
    public $components = array('Paginator');

    public function beforeFilter() {
        parent::beforeFilter();
    }

    public function index() {
        $this->Paginator->settings = $this->Question->getPaginationSettings($this->Auth->user('id'));
        $this->set('questions', $this->paginate());
    }

    public function add() {
        if (!$this->request->is('post')) {
           return null;
        }

        $this->request->data['Question']['company_id'] = $this->Auth->user('id');
        if (!$this->Question->save($this->request->data)) {
            if (!empty($this->Question->validationErrors)) {
                $this->set('errors', $this->Question->validationErrors);
                return;
            }
            return $this->Session->setFlash('問題登録に失敗しました', 'default', array('class' => 'alert alert-danger'));
        }
        $this->setFlashAndRedirect('問題登録が完了しました', '/questions', array('class' => 'alert alert-success'));
    }
}
