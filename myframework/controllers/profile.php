<?

class profile extends AppController{

  protected $menu;

  public function __construct(){


    if(@$_SESSION["loggedin"] && @$_SESSION["loggedin"]==1){


    }else{
      header("Location:/welcome");
    }

    $this->menu = array(
    //  "Modal" => "/welcome/modal",
      "Carousel" => "/welcome/carousel",
      "Progress" => "/progress",
      "Popover" => "/welcome/popover",
      "Contact" => "/welcome/contact",
      "Favorites" => "/welcome/favorites"
    //  "Favorites" => "/welcome/favorites"
    );

  }

  public function index(){

    $this->getView("header", array("pagename"=>"profile"));
    $this->getView("navigation", $this->menu);

    echo "This is a protected area";
    $this->getView("footer");

  }

}

?>
