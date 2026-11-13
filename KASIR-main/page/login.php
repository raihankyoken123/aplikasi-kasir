<!DOCTYPE html>
<html>
    <style>
        body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #18c5df;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="text"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

    </style>
    <body>
        <form action="proses_login.php" method="POST" class="form-signin">
        <h2 class="form-signin-heading">SILAHKAN LOGIN</h2>
        <label for="username" class="sr-only">username</label>
        <input type="text" id="username" class="form-control" placeholder="username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">simpan</button>
      </form>
      
      <?php
    $error = '';
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
    }

    $pesan = '';

    if ($error == 'login') {
        $pesan = 'Username dan Password anda salah';
    } 
    else if ($error == 'invalid') {
        $pesan = 'Username dan Password Harus diisi';
    }
    if ($pesan != '') {
        echo $pesan;
    }
    ?>
    
    </body>
</html>
