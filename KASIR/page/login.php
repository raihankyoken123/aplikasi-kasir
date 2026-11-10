<!DOCTYPE html>
<html>
    <body>
        <form action="proses_login.php" method="$_POST" class="form-signin">
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
    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
        <strong>GAGAL!</strong>Maaf, username atau password yang anda masukan salah!
    </div>
    </body>
</html>
