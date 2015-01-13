<?php

App::uses('AppModel', 'Model');

class Offer extends AppModel {

    public $recursive = -1;

    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id'
        )
    );

    public function getPaginationSettings($company_id) {
        return array(
            'limit' => 20,
            'fields' => array('Offer.id', 'Offer.user_id', 'Offer.status', 'User.first_name', 'User.last_name'),
            'order' => array('Offer.id' => 'DESC'),
            'conditions' => array('Offer.company_id' => $company_id),
            'recursive' => 1
        );
    }
}