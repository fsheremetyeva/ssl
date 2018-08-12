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
    $this->getView("profile", array("pagename"=>"profile"));
    $this->getView("footer");

  }
  public function update(){
    echo dirname(__FILE__); var_dump($_FILES["img"]["name"]);
    if($_FILES["img"]["name"] !=""){
      //set allowed image types to be submitted
      $imageFileType = pathinfo("assets/".$_FILES["img"]["name"],PATHINFO_EXTENSION);
      if(file_exists("assets/".$_FILES["img"]["name"])){
        echo "Sorry, file already exists";
      }else{
        if($imageFileType != "jpg" && $imageFileType != "png"){
          echo "Sorry, this file type isn't allowed";
        }else{
          if(move_uploaded_file($_FILES["img"]["tmp_name"], "assets/".$_FILES["img"]["name"])){
            echo "File uploaded";
          }else{
            echo "Error uploading";
          }
        }
      }
    }
    header("Location:/profile?msg=File Uploaded");
  }

}

?>
