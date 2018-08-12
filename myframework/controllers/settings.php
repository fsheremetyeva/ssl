<?

class settings extends AppController{

  protected $menu;

  public function __construct(){


    if(@$_SESSION["loggedin"] && @$_SESSION["loggedin"]==1){


    }else{
      header("Location:/welcome");
    }

    $this->menu = array(
    //  "Modal" => "/welcome/modal",
      "Carousel" => "/welcome/carousel",
      "Progess" => "/progress",
      "Popover" => "/welcome/popover",
      "Contact" => "/welcome/contact",
      "Favorites" => "/welcome/favorites",
      "Settings" => "/welcome/settings"
    );

  }

  public function index(){

    $this->getView("header", array("pagename"=>"settings"));
    $this->getView("navigation", $this->menu);
    $this->getView("settings");
    $this->getView("footer");

  }

}

?>
