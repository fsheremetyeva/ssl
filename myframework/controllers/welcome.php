<?

class welcome extends AppController{

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
    $this->getView("welcome");
    $this->getView("footer");

  }

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
    //var_dump($_REQUEST);
    $errors = array();
     if(empty($_REQUEST["name"])){
       $errors[] = "Name is not supplied";
    }
    if(empty($_REQUEST["email"])){
      $errors[] = "You must supply an email address";
    }
    else if(!filter_var($_REQUEST["email"],FILTER_VALIDATE_EMAIL)){
      $errors[] = "You must supply a valid email address";
    }
    if (!isset($_REQUEST["gender"])) {
      $errors[] =  "You must select a gender";
    }
    if (empty($_REQUEST["ft"]) && empty($_REQUEST["pt"])) {
      $errors[] = "You must select your job hours";
    }

    if(empty($_REQUEST["department"])){
      $errors[] = "You must select a department";
    }

    if(empty($_REQUEST["message"])){
      $errors[] = "You must supply your comments/message";
    }

    if(empty($errors))
    {
        echo "<span style=\"color: green;\">Thank you " . $_REQUEST['name'] . ' for your form submission. You entered:<br />';
        foreach($_REQUEST as $key => $value)
        {
          echo '<strong>' . ucwords($key) . ':</strong> ' . $value . '.<br />';
        }
        echo "</span>";
    }
    else {
      echo "<span style=\"color: red;\"><strong>Please take care of these errors and try again:</strong> <br />";
      foreach($errors as $error)
        echo $error . "<br />";
      echo "</span>";
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

    // var_dump($_REQUEST);
if(!empty($_REQUEST["email"]) && !empty($_REQUEST["password"])){
    if($_REQUEST["email"] == "mike@aol.com" && $_REQUEST["password"] == "12345"){
      echo "
      <p style='color:green; font-size:20px;text-align:center;'>Welcome. You successfully logged in.</p>";
    }else{
      echo "<p style='color:red; font-size:20px;text-align:center;'>You entered wrong email or password. Please try again</p>";
    }
}else{
  echo "Don't leave input blank";
}
  }
}
?>
