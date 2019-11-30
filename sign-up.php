<?php 
include_once "user.php";
class SignUp {

    protected $user;
    protected $password;
    protected $conn;
    
    function __construct()
    {
        $this->user = $_POST['user-up'];
        $this->password = $_POST['password-up'];
        $this->conn = User::dbconnect();
    }
    public function addUser()
    {
        $user_fetched = User::fetch_user($this->conn,$this->user);
       
        if($user_fetched['status']){  
            $error = "username already existe!";
            var_dump($user_fetched["query"]); 
            die("stop");
            header("Location: login.php?error=$error");  

         }else {
            $data = [
                "user" => $this->user,
                "pass" => $this->password
            ];
            $query = $this->conn->prepare("INSERT INTO users (username , password) values(:user :pass)");
            $query->execute($data);
            $message = "you are registred"; 
            header("Location: transition.php?message=$message");  
         }
    }
}

if(!empty($_POST["join_form"])){
    $user = new SignUp();
    $user->addUser(); 
}

