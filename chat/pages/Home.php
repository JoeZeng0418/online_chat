<?php
  session_start();
 ?>

<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style/home.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300" rel="stylesheet">
    <script src="../js/jquery-3.2.1.min.js" charset="utf-8"></script>
    <title>WorldChat Home</title>
    <script type="text/javascript">
        $(document).ready(function(){
          var oldNumMsg = 0;
          var newNumMsg = 0;
          var isBottom = true;
          $('#ChatText').keyup(function(e){
            // enter is pressed in the textarea
            var text = $('#ChatText').val();
            if (e.keyCode==13) {
              $.ajax({
                type:"POST",
                method:"POST",
                url:'InsertMessage.php',
                data:{ChatText: text},
                success:function(){
                  $('#ChatMessages').load('DisplayMessages.php',function() {
                    /* When load is done */
                  });
                  scrollToBottom();
                  $('#ChatText').val("");
                }
              });
            }
          });
          setInterval(function(){
            isBottom = isScrolledToBottom('#ChatMessages');
            // console.log(isBottom);

            $('#ChatMessages').load('DisplayMessages.php',function(){});
            // auto scroll down to the bottom if the user is chatting(at the bottom)
            // and others send the data
              // if (isBottom) {
                $.get('getNumMsg.php', function(data){
                  // alert(data);
                   newNumMsg = data;
                });
                if (newNumMsg>oldNumMsg) {
                  scrollToBottom();
                  oldNumMsg = newNumMsg;
                // }
            }
          },1200);
          $('#ChatMessages').load('DisplayMessages.php',function() {
            /* When load is done */
          });


          function scrollToBottom(){
            // console.log($('#ChatMessages')[0].scrollHeight);
            $('#ChatMessages').stop().animate({
              scrollTop: $('#ChatMessages')[0].scrollHeight
            }, 500,);
          }

          function isScrolledToBottom(el) {
              var $el = $(el);
              // console.log($el[0].scrollHeight - $el.scrollTop() - $el.outerHeight());
              return $el[0].scrollHeight - $el.scrollTop() - $el.outerHeight() < 1;
          }
          window.setTimeout(function(){
              scrollToBottom();
            }, 500);




        });
    </script>
  </head>
  <body>
    <h2>Welcome <span style="color: green;"><?php echo $_SESSION['UserName']; ?></span></h2>
    <div id="ChatContainer">
      <div id="ChatMessages">

      </div>
      <textarea name="ChatText" id="ChatText"></textarea>

    </div>
  </body>
</html>
