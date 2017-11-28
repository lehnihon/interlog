	<!-- MODALS -->
    <div class="modal fade planoa" tabindex="-1" role="dialog" style="background-color: rgba(0, 0, 0, 0); max-height: 100%; max-width: 100%; width: 100%">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h2 class="modal-title text-center">INTERLOG SISTEMA</h2>
          </div>
          <div class="modal-body">
          	<div id="msg_erro"></div>
            <form id="form1" name="form1" action="doLogin.php" method="post">
	          <div class="row">
	            <div class="col-md-6">
	              <div class="input-field">
	                <input type="text" class="form-control" name="username" id="username" placeholder="Digite seu usuário" required="">
	              </div>

	            </div><!-- /.col-md-6 -->
	            <div class="col-md-6">
	              <div class="input-field">
	                <input type="password" class="form-control" name="password" id="password" placeholder="Digite sua Senha" required="">
	              </div>
	            </div><!-- /.col-md-6 -->
	          </div><!-- /.row --><br>
	          <div class="row">
	            <div class="col-md-6 text-left">
	              <div class="input-field">
	                <input type="submit" class="btn-contato" id="btn_entrar" name="btn_entrar" value="Entrar">
	              </div>

	            </div><!-- /.col-md-6 -->
	          </div><!-- /.row -->
	        </form>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
	<footer id="footer">
		<div class="container">
			<div class="row wow fadeInUp">
				<div class="col-md-12">
					<h2>Interlog Distribuição</h2>
					<p>Logística integrada, eficiente e ágil, essa é a Interlog Distribuição.</p>
				</div>
			</div><br><br>
			<div class="row wow fadeInUp">
				<div class="col-md-12">
					<ul class="redes_sociais_header clearfix">
		              <li class="youtube"><a target="_blank" href="#"></a></li>
		              <li class="instagram"><a target="_blank" href="#"></a></li>
		              <li class="twitter"><a target="_blank" href="#"></a></li>
		              <li class="facebook"><a target="_blank" href="#"></a></li>
					</ul>
				</div>
			</div><br><br>
			<div class="row wow fadeInUp">
				<div class="col-md-10 col-md-offset-1">
					<ul class="menu-footer">
						<li><a href="#">Início</a></li
						><li><a href="<?php echo home_url( '/sobre' ); ?>">A Interlog</a></li
						><li><a href="<?php echo home_url( '/servicos' ); ?>">Serviços</a></li
						><li><a href="<?php echo home_url( '/estrutura' ); ?>">Estrutura</a></li
						><li><a href="<?php echo home_url( '/contato' ); ?>">Fale Conosco</a></li						><li><a data-toggle="modal" data-target=".planoa"  href="<?php echo home_url( '/' ); ?>">Área do Cliente</a></li>
					</ul>
				</div>
			</div><br><br>

			<div class="row wow fadeInUp">
				<div class="col-md-3 text-left">
					<h3>Interlog Belo Horizonte</h3>
					<p>
						Rua Major Lage, 400 - Ouro Preto<br>
						Belo Horizonte - MG<br>
						31 3048-9088
					</p>
				</div>
				<div class="col-md-3 text-left">
					<h3>Interlog São Paulo</h3>
					<p>
						Rua Dom João V, 170 - Lapa<br>
						São Paulo - SP<br>
						11 5524-7494
					</p>
				</div>
				<div class="col-md-3 text-left">
					<h3>Interlog Rio de Janeiro</h3>
					<p>
						Rua Proclamação, 611 - Bonsucesso<br>
						Rio de Janeiro - RJ<br>
						21 3976-5653

					</p>
				</div>
				<div class="col-md-3 text-left">
					<h3>Interlog Estados Unidos</h3>
					<p>
						7225. NW 68 Street Unit 12<br>
						Miami - Estados Unidos<br>
						+1 305-885777
					</p>
				</div>
			</div>
		</div>
	</footer><!-- #footer -->
	<div class="copyrino">
		<div class="container">
			<div class="row wow fadeInUp">
				<div class="col-md-12 text-center">
					&copy; Copyright <?php echo date('Y') ?> -  Todos os direitos reservados - Interlog Distribuição
						<a target="_blank" href="http://seimidigital.com.br/" class="pull-right">
						<img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-small.png"; ?>" />
					</a>
				</div>
			</div>
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
