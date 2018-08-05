<?


class welcome extends AppController{


  public function __construct(){

    $menu = array(
      "Home" => "/home",
      "Blog" => "/blog",
      "FAQ" => "/faq",
      "Contact" => "/contact"

    );

    $this->getView("header", array("pagename"=>"welcome"));
    $this->getView("navigation", $menu);
    $this->getView("welcome");
    $this->getView("footer");
  }


}
?>
