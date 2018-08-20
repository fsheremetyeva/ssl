<div class="container">
  <div class="starter-template">
    <h1>Translate API</h1>
    <form action="" method="POST">
      <label for="srcText">What would you like to translate?</label><br>
      <!-- capture user's input -->
      <textarea id="srcText" name="srcText"><?php echo isset($_POST['srcText']) ? $_POST['srcText'] : null; ?></textarea><br>
      <label for="destLang">Choose a language</label><br>
      <select name="destLang" id="destLang">
        <option value="de">German</option>
          <option value="ru">Russian</option>
            <option value="es">Spanish</option>
              <option value="fr">French</option>
      </select><br>
      <br>
      <button class="btn btn-success" type="submit" value="">Translate Now</button>
    </form>
    <br>
    <?
        //output translation
        if(isset($data['modelData']['data']['translations'][0]['translatedText']))
          echo '<strong>Translated Text:</strong> <h2 style="color:green;">' . $data['modelData']['data']['translations'][0]['translatedText'] . '</h2>';
    ?>
  </div>

</div>
