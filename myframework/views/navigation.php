

  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand" href="/welcome">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">

          <?
            foreach($data as $key => $item){
              if(strpos($_SERVER['REQUEST_URI'], $item) !== false)
                echo " <li class='active nav-item'>";
              else
                echo " <li class='nav-item'>";

              echo "    <a class='nav-link' href='".$item."'>";
              echo "$key
                  </a>
                </li> ";
            }
            ?>
        </ul>
        <span style="color:red"><?=@$_REQUEST["msg"]? $_REQUEST["msg"] :''; ?></span>
        <?
          if(@$_SESSION["loggedin"] && @$_SESSION["loggedin"]==1){?>
            <form class="navbar-form navbar-right">
              <a href="/profile">Profile</a> |
              <a href="/settings">Settings</a> |
              <a  href="/auth/logout">Logout</a>
            </form>
          <?}else{?>
            <form id="navbar-login" class="form-inline my-2 my-lg-0" method="post" action="/auth/login">
              <div class="form-group">
                <label class="white" for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username" aria-describedby="usernameHelp" placeholder="Username">
              </div>
              <div class="form-group">
                <label class="white" for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <?}
            ?>


</div>
      </div>

  </nav>
