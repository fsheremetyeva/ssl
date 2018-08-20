<?
  class api extends AppController{

    public function __construct($parent){
      $this->parent = $parent;
    }

    public function showApi(){

      $menu = array(
        "Progess" => "/progress",
        "Contact" => "/welcome/contact"

      );

      $this->getView("header", array("pagename"=>"api"));
      $this->getView("navigation", $menu);
      $data = $this->parent->getModel("apiModel")->googleBooks("Henry David Thoreau");
      $this->getView("api", $data);
      $this->getView("footer");
    }

  }

?>
