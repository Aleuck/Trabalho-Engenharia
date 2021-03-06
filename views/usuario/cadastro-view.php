  <div class="container-fluid">
    <div class="row-fluid">
      <div class="centering text-center">
        <div class="container">
          <form id="form-cadastro" action="<?php echo HOME_URI; ?>/cadastro/enviar/" method="post" class="form form-horizontal" role="form">

            <div class="form-group">
              <div class="col-md-4"></div>
              <div class="col-xm-12 col-sm-12 col-md-4" style="text-align:left;">
                <h1>Novo usuário</h1>
                <label>Matrícula</label>
                <input name="matricula" class="form-control" id="matricula" required pattern="[a-zA-Z0-9_-]{3,25}" placeholder="matricula" type="text">
                <!-- só incluir em caso de erro -->
                <!-- <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                <span id="inputError2Status" class="sr-only">(error)</span> -->
                <!-- -->
              </div>
              <div class="col-md-4"></div>
            </div>

            <!-- incluir a classe  has-error em caso de erro -->
            <div class="form-group  has-feedback">
              <div class="col-md-4"></div>
              <div class="col-xm-12 col-sm-12 col-md-4" style="text-align:left;">
                <label>Senha</label>
                <input name="senha" class="form-control" id="senha" placeholder="senha" pattern=".{6,}" required type="password">
                <!-- só incluir em caso de erro -->
                <!-- <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                <span id="inputError2Status" class="sr-only">(error)</span> -->
                <!-- -->
                </div>
              <div class="col-md-4"></div>
            </div>

            <div class="form-group has-feedback">
              <div class="col-md-4"></div>
              <div class="col-xm-12 col-sm-12 col-md-4" style="text-align:left;">
                <label>Repetir senha</label>
                <input name="senhaConfirmacao" class="form-control" id="senha-again" required placeholder="senha" type="password">
                <!-- só incluir em caso de erro -->
                <!-- <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                <span id="inputError2Status" class="sr-only">(error)</span> -->
                <!-- -->
              </div>
              <div class="col-md-4"></div>
            </div>

            <div class="form-group has-feedback">
              <div class="col-md-4"></div>
              <div class="col-xm-12 col-sm-12 col-md-4" style="text-align:left;">
                <label>Nome</label>
                <input name="nome" class="form-control" id="nome" required placeholder="nome" pattern="[A-Za-zÀ-ü ][A-Za-zÀ-ü ']*" type="text">
                <!-- só incluir em caso de erro -->
                <!-- <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                <span id="inputError2Status" class="sr-only">(error)</span> -->
                <!-- -->
              </div>
              <div class="col-md-4"></div>
            </div>

            <div class="form-group has-feedback">
              <div class="col-md-4"></div>
              <div class="col-xm-12 col-sm-12 col-md-4" style="text-align:left;">
                <label class="control-label">Email</label>
                <input name="email" class="form-control" id="email" required placeholder="email" type="email">
                <!-- só incluir em caso de erro -->
                <!-- <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                <span id="inputError2Status" class="sr-only">(error)</span> -->
                <!-- -->
              </div>
              <div class="col-md-4"></div>
            </div>

            <div class="form-group">
              <div class="col-md-4"></div>
              <div class="col-xm-6 col-sm-6 col-md-2" style="text-align:left;">
                <label>Prioridade</label>
                <select name="prioridade" id="prioridade" class="form-control">
                  <option value="1">Prefeito</option>
                  <option value="2">Secretário</option>
                  <option value="3" selected>Funcionário</option>
                </select>
              </div>
              <div class="col-xm-6 col-sm-6 col-md-2" style="text-align:left;">
                <label>Nivel</label>
                <select name="nivel" id="nivel" class="form-control">
                  <option value="1">Super administrador</option>
                  <option value="2">Gerência de recursos</option>
                  <option value="3" selected>Usuário</option>
                </select>
              </div>
              <div class="col-md-4"></div>
            </div>
            <button type="submit" id="enviar-cadastro" class="btn btn-default">Salvar</button>
          </form>
        </div>
      </div>
    </div>
  </div>

<?php // Javascript Includes >
$this->includeJS('/views/_js/cadastro.js');
