<div class="container-fluid">
	<div class="row-fluid">
		<div class="centering text-center">
			<div class="container">
				<form class="form form-horizontal" id="form-login" role="form">
					<div class="form-group">
						<div class="col-md-4"></div>
						<div class="col-xm-12 col-sm-12 col-md-4" style="text-align:left;">
							<label>Matrícula</label>
							<input class="form-control" id="matricula" placeholder="matricula" type="text">
						</div>
						<div class="col-md-4"></div>
					</div>
					<div class="form-group">
						<div class="col-md-4"></div>
						<div class="col-xm-12 col-sm-12 col-md-4" style="text-align:left;">
							<label>Senha</label>
							<input class="form-control" id="senha" placeholder="senha" type="password">
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