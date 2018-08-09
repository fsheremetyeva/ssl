<?

class welcome extends AppController{


  public function __construct(){

    $menu = array(
      "Controller" => "?controller=components",
      "Modal" => "?view=modal",
      "Carousel" => "?view=carousel",
      "Progess" => "?view=progress",
      "Popover" => "?view=popover"

    );

    $this->getView("header", array("pagename"=>"welcome"));
    $this->getView("navigation", $menu);
    $this->getView("welcome");
    $this->getView("footer");
  }


}
?>
