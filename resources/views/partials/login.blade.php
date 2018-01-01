<style media="screen">

.modal:before {
  display: inline-block;
  vertical-align: middle;
}

.modal-dialog {
  display: inline-block;
  text-align: left;
  vertical-align: middle;
}

</style>

<div id="login-modal" class="modal modal-sm">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" id="myModalLabel">Inicio de sesión</h4>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-xs-6 col-md-12">
                  <div class="well">
                      <form id="loginForm" method="POST" action="{{ route('auth.signin') }}" novalidate="novalidate">
                          <div class="form-group">
                              <label for="username" class="control-label">Usuario o email</label>
                              <input type="text" class="form-control" id="username" name="username" value="" required="" title="Ingresa tu usuario o email" placeholder="Ingresa tu usuario o tu email">
                              <span class="help-block"></span>
                          </div>
                          <div class="form-group">
                              <label for="password" class="control-label">Contraseña</label>
                              <input type="password" class="form-control" id="password" name="password" value="" required="" title="Ingresa tu contraseña" placeholder="Ingresa tu contraseña">
                              <span class="help-block"></span>
                          </div>
                          <div id="loginErrorMsg" class="alert alert-error hide">Credenciales incorrectas</div>
                          <div class="checkbox">
                              <label>
                                  <input type="checkbox" name="remember" id="remember"> Recuerdame
                              </label>
                          </div>
                          <button type="submit" class="btn btn-primary btn-block">Iniciar</button>
                          No tienes usuario. <a href="{{ route('auth.signup') }}" class="btn btn-link">Registrate</a>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
