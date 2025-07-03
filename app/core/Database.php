

<?php 
use PDO;
use PDOException;
use app\core\Config;

class Database{
    private $host=Config::getServer();
    private $db=Config::getDatabase();
    private $user=Config::getUser();
    private $pass="";
    private $dbh;

    public function __construct()
    {
        $dsn="mysql:host=$this->host;dbname=$this->db";
        $this->dbh=new PDO($dsn,$this->user,$this->pass);
             $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
          try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
?>