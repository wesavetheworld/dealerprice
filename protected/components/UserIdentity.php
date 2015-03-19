<?php

class UserIdentity extends CUserIdentity
{
    private $_id;
    public function authenticate()
    {
        $user=Users::model()->findByAttributes(array('email'=>$this->username));
        if($user===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if($this->password != $user->password)
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->_id=$user->user_id;
            $this->setState('email', $user->email);
            $this->setState('name', $user->name);
            $this->setState('password', $user->password);
            $this->setState('role', $user->role);  
			$this->setState('past', $user->present);
			$user->past = $user->present;
			$user->present = time();
			$user->save(false);
			
            $this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode;
    }
 
    public function getId()
    {
        return $this->_id;
    }
}