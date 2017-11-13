<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="js/jquery-3.2.1.min.js" charset="utf-8"></script>
    <title>Welcome to WorldChat</title>
  </head>
  <body>
    <h2>Welcome Back</h2>
    <div id="LoginDiv">
      <form action="pages/UserLogin.php" method="post">
        <table>
          <tr>
            <td>Email: </td><td><input type="mail" name="UserMailLogin" required></td>
          </tr>
          <tr>
            <td>Password: </td><td><input type="password" name="UserPasswordLogin" required></td>
          </tr>
          <tr>
            <td></td><td><input type="submit" value="LOG IN"></td>
          </tr>
          <?php
            if (isset($GET['error'])) {


          ?>
          <tr>
            <td></td><td><span style="color:red;">ERROR LOGIN</span></td>
          </tr>
          <?php
            }
           ?>
        </table>
      </form>
    </div>

    <h2>Welcome to WorldChat</h2>
    <div id="SignUpDiv">
      <form action="pages/InsertUser.php" method="post">
        <table>
          <tr>
            <td>Your Name :</td><td><input type="text" name="UserName" required></td>
          </tr>
          <tr>
            <td>Your Email :</td><td><input type="mail" name="UserMail" required></td>
          </tr>
          <tr>
            <td>Password: </td><td><input type="password" name="UserPassword" required></td>
          </tr>
          <tr>
            <td></td><td><input type="submit" value="SIGN UP"></td>
          </tr>
          <?php
            if (isset($_GET['success'])) {
           ?>
          <tr>
            <td></td><td style="color:green;">success</td>
          </tr>
          <?php
          }
           ?>
        </table>
      </form>
    </div>

  </body>
</html>


<?php











 ?>
