<?

class auth extends AppController{

  protected $menu;

  public function __construct(){



  }

  public function login(){

    if($_REQUEST["username"] && $_REQUEST["password"]){

      if($_REQUEST["username"]== "mike@aol.com" && $_REQUEST["password"] == "12345"){

        $_SESSION["loggedin"] = 1;

        header("Location:/welcome");
      }else{

        header("Location:/welcome?msg=Bad Login");
      }
    }else{
      header("Location:/welcome?msg=Bad Login");
    }
  }

  public function logout(){

    session_destroy();
    header("Location:/welcome");
    }
}


?>