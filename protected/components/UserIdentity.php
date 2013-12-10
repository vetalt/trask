<?php

class UserIdentity extends CUserIdentity {

    /**
     * @return boolean whether authentication succeeds.
     */
    public function authenticate() {
        $user = Users::model()->findByAttributes(array('login' => $this->username));
        if ($user === null)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        else if (!CPasswordHelper::verifyPassword($this->password, $user->pass))
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        else {
//            $this->_id = $user->id;
            $this->username = $user->login;
            $this->errorCode = self::ERROR_NONE;
        }
        return $this->errorCode == self::ERROR_NONE;
    }

}