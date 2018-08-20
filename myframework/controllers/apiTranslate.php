<?
  class apiTranslate extends AppController{

    public function __construct($parent){
      $this->parent = $parent;
    }

    public function showApiTranslate(){

      $menu = array(
        "Progess" => "/progress",
        "Contact" => "/welcome/contact"

      );

      $this->getView("header", array("pagename"=>"apiTranslate"));
      $this->getView("navigation", $menu);
      //call the apiTranslateModel and pass user's input
      $data = $this->parent->getModel("apiTranslateModel")->googleTranslate((isset($_POST['srcText']) ? $_POST['srcText'] : null), (isset($_POST['destLang']) ? $_POST['destLang'] : null));
      $this->getView("apiTranslate", $data);
      $this->getView("footer");
    }

  }

?>
