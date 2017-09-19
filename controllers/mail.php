<?php

class MailController
{
    private $fullname;
    private $email;
    private $subject;
    private $message;
    
    private $to;
    private $from;
    
    function __construct()
    {
        $this->to = "hector_dk@outlook.com";
        $this->from = null;
    }
    
    public function setFieldsValues()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $this->fullname = $_POST['fullname'];
            $this->email = $_POST['email'];
            $this->subject = $_POST['subject'];
            $this->message = $_POST['message'];
        }
    }
    
    public function actionValidateContactForm()
    {
        if(filter_var($this->email, FILTER_VALIDATE_EMAIL))
            return false;??????
    }
    
    public function actionSanitizeContactForm()
    {
        
    }
    
    public function actionSendMail()
    { 
        $myArr = array();
        
        if($this->fullname =="")
            $myArr['fullname']=false;
        else
            $myArr['fullname']=true;        
        if($this->email=="")
            $myArr['email']=false;
        else
            $myArr['email']=true;
        if($this->subject=="")
            $myArr['subject']=false;
        else
            $myArr['subject']=true;
        if($this->message=="")
            $myArr['message']=false;
        else
            $myArr['message']=true;
            
        echo json_encode($myArr);
        return;
//        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL) === false)
//            $emailPassed = true;
//        else
//            $fullnamePassed = false;
        
        
        
//        $this->from = "Fra: ".$this->fullname." ".$this->email;        
//        mail($this->to, $this->subject, $this->message, $this->from);
    }
}

$mail = new MailController();
$mail->setFieldsValues();
$mail->actionSendMail();