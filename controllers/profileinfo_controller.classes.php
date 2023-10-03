<?php

class ProfileInfoController extends ProfileInfo
{
    private $userId;
    private $userUid;

    public function __construct($userId, $userUid)
    {
        $this->userId = $userId;
        $this->userUid = $userUid;

    }

    public function DefaultProfileInfo()
    {
        $profileAbout = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consequatur et soluta maiores aliquid facilis voluptatibus optio ducimus error vitae.";
        $profileTitle = "Hi! I am " . $this->userUid;
        $profileText = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque tempora impedit architecto eaque quibusdam necessitatibus?";

        $this->SetProfileInfo($profileAbout, $profileTitle, $profileText, $this->userId);
    }


    public function UpdateProfileInfo($about, $introTitle, $introText)
    {
// ERROR HANDLERS 
    /*    if($this->EmptyInputCheck($about, $introTitle, $introText) == true) {
            header("Location: ../profilesettigns.php?error=emptyinput");
            exit();
        } */

// UPDATE PROFILE INFO
        $this->SetNewProfileInfo($about, $introTitle, $introText, $this->userId);
    }

    private function EmptyInputCheck($about, $introTitle, $introText)
    {

        if(empty($about) || empty($introTitle) || empty($introText)){
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

}