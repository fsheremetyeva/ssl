<?

class progress extends AppController{

  protected $menu;

  public function __construct(){

    $this->menu = array(
    //  "Modal" => "/welcome/modal",
      "Carousel" => "/welcome/carousel",
      "Progress" => "/progress",
      "Popover" => "/welcome/popover",
      "Contact" => "/welcome/contact",
    //  "Login" => "/welcome/login"
    );


  }

  public function index(){

    $this->getView("header", array("pagename"=>"welcome"));
    $this->getView("navigation", $this->menu);
    $this->getView("progress");
    $this->getView("footer");

  }


}
?>
