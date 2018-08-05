
<nav>
  <ul class="nav-menu">
    <?
    foreach($data as $key => $item){
      echo " <li class='nav-item'>
          <a href='".$item."'>
            ".$key."
          </a>
        </li> ";
    }

    ?>
  </ul>
</nav>
