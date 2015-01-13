<?php

App::uses('AppController', 'Controller');

class AnswersController extends AppController {
    public $components = array('Paginator');

    public function beforeFilter() {
        parent::beforeFilter();
    }

    public function index() {
        $this->Paginator->settings = $this->Answer->getPaginationSettings();
        $this->set('answers', $this->paginate());
    }


}
