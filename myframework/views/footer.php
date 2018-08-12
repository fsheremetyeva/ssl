
    </main>
    <footer>
      <p>&copy; Company 2017-2018</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/script.js"></script>
  <script>
$(document).ready(function(){
  $("#ajaxbutton").click(function(){

    $.ajax({
      method: "POST",
      url: "/welcome/ajaxPars",
      data: {
        "email": $("#email").val(),
        "password": $("#password").val()
      },
      success: function(msg){
          $("#feedback").html(msg);
        }
      });
    });


    $("#ajaxbuttonContact").click(function(){
        $.ajax({
          method: "POST",
          url: "/welcome/processAndReceive",
          data: {
            "email": $("#email").val(),
            "name": $("#name").val(),
            "gender": $("input[name='gender']:checked").val(),
            "department": $("#department").val(),
            "ft": $("#ft:checked").val(),
            "pt": $("#pt:checked").val(),
            "message": $("#message").val(),
            "captcha": $("#captcha").val()

          },
          success: function(msg){
              $("#feedback").html(msg);
            }
          });
        });

  });
    /*
    $.ajax({
      method: "POST",
      url: "/welcome/ajaxPars",
      data: {
        "email": $("#email").val(),
        "password": $("#password").val()
      },
      success: function(msg){
        if(msg=="welcome"){
          alert("welcome");
        }else{}
      }
    });
    */


  </script>
  </body>
</html>
