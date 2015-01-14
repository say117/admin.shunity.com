<?php

App::uses('AppController', 'Controller');

class OffersController extends AppController {
    public $components = array('Paginator');
    public $uses = array('Offer', 'User');


    public function beforeFilter() {
        parent::beforeFilter();
    }

    public function index() {
        $this->Paginator->settings = $this->Offer->getPaginationSettings($this->Auth->user('id'));
        $this->set('offers', $this->paginate());
    }

    public function add($user_id) {
        if (!$this->request->is('post')) {
            $this->set('user', $this->User->findById($user_id));
           return null;
        }

        $this->request->data['Offer']['company_id'] = $this->Auth->user('id');
        $this->request->data['Offer']['status'] = 0;
        if (!$this->Offer->save($this->request->data)) {
            if (!empty($this->Offer->validationErrors)) {
                $this->set('errors', $this->Offer->validationErrors);
                return;
            }
            return $this->Session->setFlash('オファーに失敗しました', 'default', array('class' => 'alert alert-danger'));
        }
        $this->setFlashAndRedirect('オファーを完了しました', '/offers', array('class' => 'alert alert-success'));
    }
}
