 <?php
 /* 

 $cs = "mysql:host=localhost;dbname=seforimstore";
    $user = "test";
    $password = 'password';

    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
         }catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }
?>*/


 class DataBase {
        
        private $db;
        private $cs;
        private $user;
        private $password;
        private $options;

        public function __construct(){
            $this->cs = "mysql:host=localhost;dbname=seforimstore";
            $this->user = "test";
            $this->password = 'password';
         
        try {
            $this->options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            $this->db = new PDO($this->cs, $this->user, $this->password, $this->options);
            }
        catch(PDOException $e) {
            die("Something went wrong " . $e->getMessage());
            }
        }
        public function getDB(){
                return $this->db;
        }
 }

?>