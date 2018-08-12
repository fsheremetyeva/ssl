<?

class auth extends AppController{

  protected $menu;

  public function __construct(){



  }

  public function login(){
    
    if($_REQUEST["username"] == null || $_REQUEST["password"] == null)
      {
        header("Location:/welcome?msg=Fill out the fields");
        return;

      }
    $users=file('./users.txt');

    foreach($users as $user)
    {
       $user = explode('|', $user);
       if(strtolower($_REQUEST["username"])== strtolower($user[0]) && $_REQUEST["password"] == $user[1]){
         $_SESSION["loggedin"] = 1;
         $_SESSION["profiledata"] = $user;
         header("Location:/welcome");
         return;
       }

    }
    header("Location:/welcome?msg=Bad Login");
    return;
  }

/*
    if($_REQUEST["username"] && $_REQUEST["password"]){

      if($_REQUEST["username"]== "mike@aol.com" && $_REQUEST["password"] == "password"){

        $_SESSION["loggedin"] = 1;

        header("Location:/welcome");
      }else{

        header("Location:/welcome?msg=Bad Login");
      }
    }else{
      header("Location:/welcome?msg=Bad Login");
    }
  */


  public function logout(){

    session_destroy();
    header("Location:/welcome");
    }
}


?>
