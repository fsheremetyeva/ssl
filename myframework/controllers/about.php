<?

class about extends AppController{



  public function __construct($parent){

    $this->parent = $parent;
    $this->showList();


  }

  public function showList(){
    $menu = array(
      "Carousel" => "/welcome/carousel",
      "Progess" => "/progress",
      "Popover" => "/welcome/popover",
      "Contact" => "/welcome/contact"

    );
    $data = $this->parent->getModel("fruits")->select("select * from fruit_table");
    $this->getView("header", array("pagename"=>"about"));
    $this->getView("navigation", $menu);
    $this->getView("about", $data);


  }
  public function showAddForm(){
    $this->getView("header", array("pagename"=>"about"));
    $this->getView("addForm");

  }
  public function showUpdateForm(){
    $this->getView("header", array("pagename"=>"about"));
    $this->getView("updateForm");

  }
  public function addAction(){
    //var_dump($_REQUEST);
    $this->parent->getModel("fruits")->add("insert into fruit_table (name) values (:name)", array(":name"=>$_REQUEST["name"]));
    header("Location:/about");
  }
  public function deleteAction(){
    //var_dump($_REQUEST);
    $this->parent->getModel("fruits")->delete("delete from fruit_table where (id = :id)", array(":id"=>$_REQUEST["id"]));
    header("Location:/about");
  }
  public function updateAction(){
    var_dump($_REQUEST);
    $this->parent->getModel("fruits")->update("update fruit_table set name = :name where id = :id", array(":id" => $_REQUEST['fruitid'], ":name"=>$_REQUEST["name"]));
    header("Location:/about");
  }

}
?>
