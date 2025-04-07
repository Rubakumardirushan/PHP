<?php
 class user{
    private $name;
    private $password;

    public function getname(){
        return $this->name;
    }
    public function setname($name){
        $this->name=$name;
    }
    public function getpassword(){
        return $this->password;
    }
    public function setpassword($password){
        $this->password=$password;
    }

    public function __destruct(){
        echo "object is destroyed\n";
    }
 public static  function saymyname(){
    print "dirushan\n";
 }
}
$user=new user();
$user->setname("dirushan");
$user->setpassword("12345678");
echo $user->getname() ."\n";
user::saymyname();

?>