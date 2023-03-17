<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>


<?php
    require 'header.php';
    if (isset($_SESSION['username'])) {
        header("location: home.php");
        die();
    }
?>
    <center>
        <h1>Welcome to BearBurger!</h1><br>
        <h3>User Login</h3>
        <form style="max-width: 25rem" method="post" novalidate>
            <table>
                <tr>
                    <td align="right"></td>
                    <td align="left">
                        <label for="email"></label>
                      <div class="input-container">
                        <i class="fa fa-envelope icon"></i>
                        <input type="email" placeholder="Email" id="email" name="email" 
                               value=""<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"
                        required>
                      </div>
                    </td>
                </tr>
                <tr>
                    <td align="right"></td>
                    <td align="left">
                        <label for="password"></label>
                      <div class="input-container">
                        <i class="fa fa-key icon"></i>
                        <input type="password" placeholder="Password" id="password" name="password"
                               value=""<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>"
                        required>
                      </div>
                    </td>
                </tr>
            </table>
            <input type="checkbox" id="remember" name="remember" value="remember">
            <label for="remember">Remember</label>
            <br><br>
            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') login(); ?>
            <input type="submit" value="Login">
            <br><br><br>
            <div>
                <span style="float:left;">New here? <a href="register.php">Register</a></span>
                <span style="float:right;"><a href="recover.php">Forgot Password</a></span>
            </div>
        </form>
    </center>

<?php include 'footer.php' ?>
  
  </body>
</html>