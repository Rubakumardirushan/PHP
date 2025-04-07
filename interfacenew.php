<?php
 interface logger{
    public function log($msg);
}
 class filelogger implements logger{
    public function log($msg){
        echo  $msg ."log to file" ."\n" ;
    }

    public function __destruct(){
        echo "file logger is destroyed\n";
    }
 }
 class dblogger implements logger{
    public function log($msg){
        echo  $msg ."log to db" ."\n" ;
    }
    public function __destruct(){
        echo "db logger is destroyed\n";
    }
 }

 function logger(logger $logger){
    $logger->log("hello world");
}
 
    $filelogger=new filelogger();
    $dblogger=new dblogger();
    logger($filelogger);
    logger($dblogger);

?>