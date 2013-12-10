<?php

class RegisterForm extends Users {

    public function rules() {
        $rules = array(
            array('login', 'unique', 'message' => "The login exists already."),
            array('login', 'match', 'pattern' => '/^[A-Za-z0-9_]+$/u', 'message' => "Valid symbols are letters and digits."),
        );
        return array_merge(parent::rules(), $rules);
    }

}