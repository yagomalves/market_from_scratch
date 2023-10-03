<?php

class SignupController extends Signup
{
    private $uid;
    private $password;
    private $passwordRepeat;
    private $email;

    public function __construct($uid, $password, $passwordRepeat, $email)
    {
        $this->uid = $uid;
        $this->password = $password; 
        $this->passwordRepeat = $passwordRepeat;
        $this->email = $email;
    }

    public function SignupUser()
    {
        if($this->emptyInput() == false) {
            header("Location: ../index.php?error=emptyinput");
            exit();
        } 
        if($this->invalidUid() == false) {
            header("Location: ../index.php?error=username");
            exit();
        }
        if($this->invalidEmail() == false) {
            header("Location: ../index.php?error=email");
            exit();
        }
        if($this->PwdMatch() == false) {
            header("Location: ../index.php?error=passwordmatch");
            exit();
        }
        if($this->UidTakenCheck() == false) {
            header("Location: ../index.php?error=useroremailtaken");
            exit();
        }

        $this->setUser($this->uid, $this->password, $this->email);

    }

    private function emptyInput()
    {
        if(empty($this->uid) || empty($this->password) || empty($this->passwordRepeat) || empty($this->email)) 
        {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    } 

    private function invalidUid()
    {

        $result = true;
        
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uid))
        {
            $result = false;
        }
        return $result;
    }

    private function invalidEmail()
    {
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))
        {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function PwdMatch()
    {
        if($this->password !== $this->passwordRepeat)
        {
            $result = false;
        } else {
            $result = true;
        }
    return $result;
    }

    private function UidTakenCheck()
    {
        if(!$this->checkUser($this->uid, $this->email))
        {
            $result = false;
        } else {
            $result = true;
        }
    return $result;
    }

    public function FetchUserId($uid) 
    {
        $userId = $this->GetUserId($uid);
        return $userId[0]["id"];
    }

}