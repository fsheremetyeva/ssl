<div class="container">
  <div class="starter-template">
    <p><a href="/about/showAddForm">Add New</a></p>


    <?
      foreach($data as $fruit){
        echo $fruit["name"]."<a href='/about/deleteAction/?id=".$fruit["id"]."'> Delete</a> | <a href='/about/showUpdateForm?id=".$fruit["id"]."&currentfruit=" . $fruit["name"] . "'>Update</a><br>";
      }
    ?>
  </div>

</div>
