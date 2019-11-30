<?php 
class User {
   protected $user ="";
   protected $pass ="";
   protected $conn; 
   
   //constructor 
   function __construct() 
   {
       $this->user = $_POST["user"];  
       $this->pass =  $_POST["password"]; 
       $this->conn = self::dbconnect(); 
   }
   
   
   public static function dbconnect()
   { 
        try {
            $connection = new PDO('mysql:host=127.0.0.1;port=3306;dbname=login_form','root','hadjr'); // PDO conneciotn 
        }catch(PDOException $e){
            var_dump($e);
        }          
        return $connection; 
   }
   public static function fetch_user(PDO $conn,$username)  
   { 
    $query = $conn->prepare("select * from users where username LIKE :name");
    $query->bindValue(':name', $username ); 
    $status = $query->execute(); 
    return [  
        'status' => $status,
        'query' => $query  
    ];
   }
    public function login()  
   {  
       
       $user_fetched = self::fetch_user($this->conn,$this->user); 
       if($user_fetched['status']){   
        $user_info = $user_fetched['query']->fetch(PDO::FETCH_ASSOC);
        if($this->pass == $user_info['password']){ 
            session_start(); 
            $_SESSION['name'] = $user_info['username'];
            header("Location: profile.php"); 
        }else {
            $error = "your credentials is worng!"; 
            header("Location: login.php?error=$error");  
        }
    }
   }
   
}
if(!empty($_POST["login_form"])){
    $user = new User(); 
    $user->login();  
}

/*
$username = $_POST["user"]; 
$password = $_POST["password"]; 
try {
    $connection = new PDO('mysql:host=127.0.0.1;port=3306;dbname=login_form','root','hadjr'); // PDO conneciotn 
}catch(PDOException $e){
    var_dump($e);
}

$query = $connection->prepare("select * from users where username LIKE :name");
$query->bindValue(':name', $username ); 
$status = $query->execute(); 
  
if($status){ 
    $user_info = $query->fetch(PDO::FETCH_ASSOC);
    if($password == $user_info['password']){ 
        session_start(); 
        $_SESSION['name'] = $user_info['username'];
        header("Location: profile.php"); 
    }else {
        $error = "your credentials is worng!"; 
        header("Location: login.php?error=$error"); // wech mazel ndiro?
    }
}
*/
?>