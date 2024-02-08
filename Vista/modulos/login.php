<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Centro Médico Divino Niño</b></a>
  </div>
  <div class="login-box-body text-center">
    <img src="divino.png" alt="" class="img-responsive" style="max-width: 100%; margin: 0 auto;">
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <form method="post">

      <div class="form-group has-feedback">

        <input type="text" class="form-control" name="usuario-Ing" placeholder="Usuario">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" name="clave-Ing" placeholder="Contraseña">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <div class="col-xs-6 pull-right">
          <button type="submit" class="btn btn-link btn-flat">¿Olvidó su contraseña?</button>
        </div>
      </div>

      <div class="row">
       
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        </div>
        <!-- /.col -->
      </div>

      <?php

      $ingreso = new co_sesion();
      $ingreso -> iniciarSesion();

      ?>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>