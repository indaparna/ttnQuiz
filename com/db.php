<?php 

class connectDb {
    private static $instance=null;
    private $conn;
    private $servername='localhost';
    private $username='root';
    private $password='Jitender@123';
    private $database='ttnQuiz';

    private function __construct() {
        $this->conn=new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance() {
        if( !self::$instance) {
            self::$instance=new self;
        }

        return self::$instance;
    }

    public function getConnection() {
        return $this->conn;
    }
}

// $instance=ConnectDb::getInstance();
// $conn=$instance->getConnection();
// var_dump($conn);

?>