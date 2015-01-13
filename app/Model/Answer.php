<?php

App::uses('AppModel', 'Model');

class Answer extends AppModel {

    public $recursive = -1;

    public $belongsTo = array(
        'Question' => array(
            'className' => 'Question',
            'foreignKey' => 'question_id'
        ),
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id'
        )
    );

    public function getPaginationSettings() {
        return array(
            'limit' => 20,
            'fields' => array('Answer.id', 'Answer.description', 'Answer.question_id',
                              'Answer.company_id', 'Answer.user_id',
                              'User.first_name', 'User.last_name'),
            'order' => array('Answer.id' => 'DESC'),
            'recursive' => 0
        );
    }
}