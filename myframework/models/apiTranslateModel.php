<?
//loading autoloader so can use predefined functions
require_once 'google-api-php-client/src/Google/autoload.php';
class apiTranslateModel{

  public function __construct($parent){

    $this->db = $parent->db;

  }

  public function googleTranslate($phrase='', $language = ''){
    //input validation
    if(empty($phrase)) return;
    //creating a new google client and passing API key
    $client = new Google_Client();
    $client->setApplicationName("sslapi");
    $client->setDeveloperKey("AIzaSyDIGyGh11nDYCYDD8R3rIF-VDNO3jKzAMY");

    $service = new Google_Service_Translate($client);
    
    return $service->translations->listTranslations($phrase, $language, ['source' => 'en']);
  }
}


?>
