<div class="container">
  <div class="starter-template">
    <h1>Update</h1>
    <form action="/about/updateAction" method="POST">
      <input type="hidden" name="fruitid" value="<?php echo $_REQUEST['id']; ?>">
      <input type="text" name="name" value="<?php echo $_REQUEST['currentfruit']; ?>">
      <input type="submit" />
    </form>

  </div>

</div>
