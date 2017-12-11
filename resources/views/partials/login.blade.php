<style media="screen">

.modal {
  text-align: center;
  padding: 0px!important;
}

.modal-body {
  padding: 15px!important;
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
<div id="login-modal" class="modal fade" role="dialog">
  <form class="form-horizontal" action="{{ route('auth.signin') }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" name="button" class="close" data-dismiss="modal">&times;</button>
          <h4>Inicio de sesión</h4>
        </div>
        <div class="modal-body">
          <!-- Username Field -->
              <div class="row">
                  <div class="form-group col-xs-12">
                  <label for="username"><span class="text-danger" style="margin-right:5px;">*</span>Username:</label>
                      <div class="input-group">
                          <input class="form-control" id="username" type="text" name="username" placeholder="Username" required/>
                          <span class="input-group-btn">
                              <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
                          </span>
                          </span>
                      </div>
                  </div>
              </div>

              <!-- Content Field -->
              <div class="row">
                  <div class="form-group col-xs-12">
                      <label for="password"><span class="text-danger" style="margin-right:5px;">*</span>Password:</label>
                      <div class="input-group">
                          <input class="form-control" id="password" type="password" name="password" placeholder="Password" required/>
                          <span class="input-group-btn">
                              <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></label>
                          </span>
                          </span>
                      </div>
                  </div>
              </div>

              <!-- Login Button -->
              <div class="row">
                  <div class="form-group col-xs-4">
                      <button class="btn btn-primary" type="submit">Submit</button>
                  </div>
              </div>
            </div>
          </div>
      </div>
    </form>
  </div>
