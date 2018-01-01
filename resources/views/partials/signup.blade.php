<style media="screen">

.modal {
  text-align: center;
  padding: 5px!important;
  margin:5px!important;
}

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
<div id="signup-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" name="button" class="close" data-dismiss="modal">&times;</button>
        <h4>Inicio de sesión</h4>
      </div>

      <div class="modal-body">
        <form class="form-horizontal" action="{{ route('auth.signup') }}">
        {{ csrf_field() }}
        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
          <label for="bp-login-widget-user-login">Nombre</label>
          <input type="text" name="log" id="bp-login-widget-user-login" class="input form-control" value="" />
        </div>
        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
          <label for="bp-login-widget-user-login">Username o email</label>
          <input type="text" name="log" id="bp-login-widget-user-login" class="input form-control" value="" />
        </div>
        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
          <label for="bp-login-widget-user-pass">Contraseña</label>
          <input type="password" name="pwd" id="bp-login-widget-user-pass" class="input form-control" value="" spellcheck="false" autocomplete="off" />
        </div>
        <input type="submit" name="wp-submit" id="bp-login-widget-submit" value="Iniciar" />
        </form>
      </div>



    </div>
  </div>
</div>
