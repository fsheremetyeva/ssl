<?
/*
class profile extends AppController{

  protected $menu;

  public function __construct(){

    $this->menu = array(
      "Controller" => "/welcome/components",
      "Modal" => "/welcome/modal",
      "Carousel" => "/welcome/carousel",
      "Progess" => "/welcome/progress",
      "Popover" => "/welcome/popover",
      "Contact" => "/welcome/contact",
      "Login" => "/welcome/login"
    );

    if(@$_SESSION["loggedin"] && @$_SESSION["loggedin"]==1){


    }else{
      header("Location:/welcome");
    }

    //db con
    // global information


  //  $this->getView("header", array("pagename"=>"welcome"));
  //  $this->getView("navigation", $menu);
  //  $this->getView("welcome");
  //  $this->getView("footer");
  }

  public function index(){

    $this->getView("header", array("pagename"=>"welcome"));
    $this->getView("navigation", $this->menu);

    echo "This is a protected area";
    $this->getView("footer");

  }
}
/*
  public function popover(){
    $this->getView("header", array("pagename"=>"popover"));
    $this->getView("navigation", $this->menu);
    $this->getView("popover");
    $this->getView("footer");
  }
  public function modal(){
    $this->getView("header", array("pagename"=>"modal"));
    $this->getView("navigation", $this->menu);
    $this->getView("modal");
    $this->getView("footer");
  }
  public function carousel(){
    $this->getView("header", array("pagename"=>"carousel"));
    $this->getView("navigation", $this->menu);
    $this->getView("carousel");
    $this->getView("footer");
  }
  public function progress(){
    $this->getView("header", array("pagename"=>"progress"));
    $this->getView("navigation", $this->menu);
    $this->getView("progress");
    $this->getView("footer");
  }
  public function contact(){
    $this->getView("header", array("pagename"=>"contact"));
    $this->getView("navigation", $this->menu);
    $this->getView("contact");
    $this->getView("footer");
  }
  public function login(){
    $this->getView("header", array("pagename"=>"contact"));
    $this->getView("navigation", $this->menu);
    $this->getView("login");
    $this->getView("footer");
  }

  public function processAndReceive(){

    $name = $email = $genter = $message = "";

    $department = array();

    if(empty($_POST["name"])){
      echo "name is missing";
    }else{
      echo "<br>found name<br>";
    }
    if(empty($_POST["email"])){
      echo "email is missing";
    }else{
      echo "<br>found email<br>";
    }
    if (!isset($_POST["gender"])) {
        echo "You must select 1 option<br>";
    }
    else {
        echo "Thanks for making a selection<br>";
    }
    if(empty($POST["department"])){
      echo "You must select 1 of the deparments";
    }
    else{
      echo "Thank you for selecting a deparment";
    }
    var_dump($_POST);

    if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
      echo "email invalid";
    }else{
      echo "email valid";
    }
  }
  public function contactRecv(){
    var_dump($_POST);

    if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
      echo "email invalid";
    }else{
      echo "email valid";
    }

    if(!preg_match("/^[a-zA-Z]*$/", $_POST["password"] )){

      echo "invalid password";
    }
  }
  public function ajaxPars(){
    var_dump($_REQUEST);

    if($_REQUEST["email"] == "mike@aol.com" && $_REQUEST["password"] == "12345"){
      echo "welcome";
    }else{
      echo "You entered wrong email or password. Please try again";
    }

  }
}
*/
?>
