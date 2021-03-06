<div class="container-fluid">
  <div class="row-fluid">
    <div class="centering text-center">
      <div class="container">
        <form class="form form-horizontal" id="form-login" action="<?php echo HOME_URI; ?>/login/validaUsuario" method="post" role="form">
          <div class="form-group">
            <div class="col-md-4"></div>
            <div class="col-xm-12 col-sm-12 col-md-4" style="text-align:left;">
              <label>Matrícula</label>
              <input class="form-control" name="matricula" id="matricula" placeholder="matricula" type="text">
            </div>
            <div class="col-md-4"></div>
          </div>
          <div class="form-group">
            <div class="col-md-4"></div>
            <div class="col-xm-12 col-sm-12 col-md-4" style="text-align:left;">
              <label>Senha</label>
              <input class="form-control" name="senha" id="senha" placeholder="senha" type="password">
              <span id="msg-password"></span>
            </div>
            <div class="col-md-4"></div>
          </div>
          <div class="form-group">
            <div class="col-md-4"></div>
            <div class="col-xm-12 col-sm-12 col-md-4" style="text-align:left;">
            &nbsp;<label><input type="checkbox"> Lembrar meus dados</label>
            </div>
            <div class="col-md-4"></div>
          </div>
          <button type="submit" class="btn btn-default">Entrar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php // Javascript Includes >
$this->includeJS('/views/_js/login.js');
