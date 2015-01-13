<?php

App::uses('AppModel', 'Model');

class Question extends AppModel {

    public $recursive = -1;

    public function getPaginationSettings($company_id) {
        return array(
            'limit' => 20,
            'fields' => array('Question.id', 'Question.description'),
            'order' => array('Question.id' => 'DESC'),
            'conditions' => array('Question.company_id' => $company_id)
        );
    }
}