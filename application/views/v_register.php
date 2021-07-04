<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>template/login_pelanggan/assets/css/login.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="<?= base_url() ?>template/login_pelanggan/assets/images/login.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <p class="login-card-description">Register</p>
                <?php 

                echo validation_errors('<div class="alert alert-warning alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>','</div>');

      if ($this->session->flashdata('error')) {
          echo'<div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fas fa-ban"></i> Alert!</h5>';
          echo $this->session->flashdata('error');
          echo'</div>';
      }

      if ($this->session->flashdata('pesan')) {
        echo'<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i> Sukses!</h5>';
        echo $this->session->flashdata('pesan');
        echo'</div>';
    }

                echo form_open('pelanggan/register'); ?>
                  <div class="form-group">
                    <label for="text" class="sr-only">Nama </label>
                    <input type="text" name="username" value="<?= set_value('username')?>" class="form-control" placeholder="Nama">
                  </div>
                  <div class="form-group">
                    <label for="email" class="sr-only">E-mail</label>
                    <input type="email" name="email" value="<?= set_value('email')?>" class="form-control" placeholder="E-mail">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" value="<?= set_value('password')?>" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Retype Password</label>
                    <input type="password" name="ulangi_password" value="<?= set_value('ulangi_password')?>" class="form-control" placeholder="Retype Password">
                  </div>
                  <button type="submit" class="btn btn-dark  btn-lg mb-4" >Register</button>
                <?php echo form_close() ?>
                <p class="login-card-footer-text">Sudah punya akun? <a href="<?=base_url('pelanggan/login')?>" class="text-reset">Login</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function() {
      $(this).remove();
    });
  }, 3000)
</script>
</body>
</html>
