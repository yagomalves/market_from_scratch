<?php

class LoginController extends Login
{
    private $uid;
    private $password;

    public function __construct($uid, $password)
    {
        $this->uid = $uid;
        $this->password = $password;
    }

   public function LoginUser()
    {

        $this->getUser($this->uid, $this->password);

    } 

  

} 