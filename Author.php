<?php

class Author
{
    private $name;
    private $email;
    private $gender;

    function __construct($name,$email,$gender)
    {
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
    }

    public function setMail($email)
    {
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function  getGender()
    {
        return $this->gender;
    }

    public function __toString()
    {
        return "Name : " . $this->name . " Email : " . $this->email . "Gender : " . $this->gender;
    }

}

echo '-----------------------------';

$author1 = new Author("Hoang Trung Kien","kcgl2012@gmail.com.vn","Male");
echo '<br/>';
echo  "Name : " . $author1->getName();
echo '<br/>';
echo $author1->getEmail();
echo '<br/>';
$author1->setMail('hoangtrungkien201293@gmail.com');
echo '<br/>';
echo $author1->getEmail();
echo '<br/>';
echo $author1->getGender();
echo '<br/>';
echo '-------------------------';
echo $author1;
?>