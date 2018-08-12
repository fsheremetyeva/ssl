
<div class="container">
  <h1>Please fill out the form below.</h1>
  <?

function create_image($cap)

{

@unlink("./assets/image1.png");

global $image;

$image = imagecreatetruecolor(200, 50) or die("Cannot Initialize new GD image stream");
$background_color = imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0, 255, 255);
$line_color = imagecolorallocate($image, 64, 64, 64);
$pixel_color = imagecolorallocate($image, 0, 0, 255);
imagefilledrectangle($image, 0, 0, 200, 50, $background_color);

for ($i = 0; $i < 3; $i++) {
imageline($image, 0, rand() % 50, 200, rand() % 50, $line_color);
}

for ($i = 0; $i < 1000; $i++) {
imagesetpixel($image, rand() % 200, rand() % 50, $pixel_color);
}

$text_color = imagecolorallocate($image, 0, 0, 0);
ImageString($image, 22, 30, 22, $cap, $text_color);

/*
Create your session variable that carries the data, you will check against this in your controller.
Something like $_SESSION[..]=....;
*/

$_SESSION["captchaKey"] = $cap;

imagepng($image, "./assets/image1.png");

}

create_image($data["cap"]);



?>
<form action="/welcome/processAndReceive" method="POST">
  <div class="form-group">
    <label for="name">Name</label>
    <input name="name" type="text" class="form-control" id="name" placeholder="John Doe">
    <div id="name-input-val"></div>
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
  </div>
  <p>Gender</p>
  <div class="form-check">

  <input class="form-check-input" type="radio" name="gender" id="radios1" value="male">
  <label class="form-check-label" for="radios">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="radios2" value="female">
  <label class="form-check-label" for="radios">
    Female
  </label>
</div>
<br>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Department</label>
    <select name="department" class="form-control" id="department">
      <option>Accounting</option>
      <option>Finance</option>
      <option>Maintenance</option>
      <option>IT</option>
    </select>
  </div>

  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="ft" name="ft" value="yes">
    <label class="form-check-label" for="ft">Full time</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="pt" name="pt" value="yes">
    <label class="form-check-label" for="pt">Part Time</label>
  </div>

  <div class="form-group">
    <label for="message">Comments</label>
    <textarea name="message" class="form-control" id="message" rows="3"></textarea>
  </div>
  <?echo "<img src='/assets/image1.png'>";?>
  <div>
    <label for="exampleInputEmail1">Enter Captcha </label>

    <input name="captcha" type="captcha" id="captcha"  placeholder="">

    </div>
  <button type="submit" class="btn btn-primary mb-2">Submit</button>
  <input type="buton" class="btn" value="Ajax Submit" id="ajaxbuttonContact">
</form>
<div id="feedback"></div>
</div>
