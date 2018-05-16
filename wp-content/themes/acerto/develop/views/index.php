<?php get_header(); ?>

<section class="index-hero-section default-hero-section">
	<div class="container position-relative">
		<div class="default-hero-section--content-wrapper py-5 py-lg-0 px-4 px-md-0">
			<div class="col-md-6 mb-5">
				<h2 class="text-color-white font-xxxlarge mb-4">Liberdade é poder negociar do seu jeito</h2>
				<h5 class="font-xlarge">Negociação boa de verdade precisa ser amigável, econômica e inteligente.</h5>
			</div>

			<form class="form-group form-consultar-cpf form-consultar-cpf--index-hero width-md-50 pt-md-5 mx-auto">
				<label class="sr-only" for="digiteSeuCPF">DIGITE SEU CPF</label>
				<div class="input-group input-group-lg">
			        <input type="text" class="form-input-acerto cpf round-border text-color-white form-input-acerto-hero" id="digiteSeuCPF" placeholder="Digite seu CPF">

			        <button type="submit" class="btn btn-primary btn-acerto btn-acerto-hero">CONSULTAR CPF</button>

			        <div class="text-center w-100">
			        	<h5 class="font-xlarge text-color-white">Garantido por <img class="logo-cdl-garantido-por" src="<?php echo get_template_directory_uri(); ?>/images/logo-cdl-branca.png"></h5>
			        </div>
			    </div>
			</form>
		</div>
	</div>
</section>

<?php
  $credores = get_post_meta($post->ID, 'credores-homepage',true);
?>
<section class="index-credores-section">
	<div class="container">
		<div class="row no-gutters align-items-center">
			<div class="col-md-5 mb-4 mb-md-0 px-4">
				<h2 class="font-xxxlarge mb-3">Negociação justa é boa para todo mundo.</h2>
				<p>Várias empresas já estão negociando dívidas pela Acerto. Para uma negociação ser boa para os nossos parceiros, ela precisa antes ser boa para você. Negociar na Acerto é bom para todo mundo.</p>
				<div class="text-center mt-4">
					<a href="https://portal.meuacerto.com.br/consumidor/autenticacao/cadastrar" class="btn btn-primary btn-acerto btn-padding-large">VEM NEGOCIAR!</a>
				</div>
			</div>

			<div class="col-md-7">
				<div class="index-credores-section--credores-wrapper px-3 py-4 px-md-0 py-md-0">
					<div class="row">
						<?php
						    foreach($credores as $credor) {
						    $img_url = wp_get_attachment_url($credor['image-credores-homepage']);
						    $img_title = get_the_title($credor['image-credores-homepage']);
						    $image_alt = get_post_meta($credor['image-credores-homepage'], '_wp_attachment_image_alt', true);
						?>
							<div class="col-4 mb-4 text-center">
					            <a class="d-inline-block" target="_blank" href="<?php echo $credor['link-credores-homepage']; ?>"><img class="img-fluid" src="<?php echo $img_url ?>"></a>
					            <?php if(!empty($credor['disclaimer-credores-homepage'])) { ?>
					            	<i class="material-icons tooltip-disclaimer-credor text-color-white" data-toggle="tooltip" data-placement="left" title="<?php echo $credor['disclaimer-credores-homepage']; ?>">info_outline</i>
					           	<?php } ?>
				            </div>
						<?php
							}
						?>
					</div>
				</div>
				<div class="credores-section--circulo d-none d-md-block"></div>	
			</div>
		</div>
	</div>
</section>

<section class="index-como-funciona-section position-relative py-0 py-md-5">
	<img class="index-como-funciona-section--background d-none d-md-block" src="<?php echo get_template_directory_uri(); ?>/images/background-como-funciona.png">
	<div class="container">
		<div class="row align-items-center no-gutters px-4 px-md-0 pt-md-5">
			<div class="col-md-4">
				<h2 class="font-xxxlarge mb-3 text-color-white-md">Entenda o processo</h2>
				<h5>Veja como você pode negociar as suas dívidas em menos de 5 minutos</h5>
			</div>

			<div class="col-md-4 pt-5 d-none d-md-block">
				<img src="<?php echo get_template_directory_uri(); ?>/images/iphone-acerto.png">
			</div>

			<div class="col-md-4 mt-5 mt-md-0 text-xs-center">
				<div class="row align-items-center mb-4">
					<div class="col-md-3 mb-3 mb-md-0">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/icone-cpf.png">
					</div>

					<div class="col-md-9">
						<h3>Consulte o seu CPF</h3>
						<p>É só você digitar seu CPF e completar o cadastro rapidinho.</p>
					</div>
				</div>

				<div class="row align-items-center mb-4">
					<div class="col-md-3 mb-3 mb-md-0">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/icone-localizar-divida.png">
					</div>

					<div class="col-md-9">
						<h3>Localiza suas dívidas</h3>
						<p>Veja as dívidas que foram informadas na Acerto por nossos parceiros.</p>
					</div>
				</div>

				<div class="row align-items-center mb-4">
					<div class="col-md-3 mb-3 mb-md-0">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/icone-enviar-proposta.png">
					</div>

					<div class="col-md-9">
						<h3>Envie sua proposta</h3>
						<p>Selecione a dívida que quer negociar e faça uma proposta que caiba no seu bolso.</p>
					</div>
				</div>

				<div class="row align-items-center mb-4">
					<div class="col-md-3 mb-3 mb-md-0">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/icone-gerar-boletos.png">
					</div>

					<div class="col-md-9">
						<h3>Vizualize os boletos</h3>
						<p>Com a proposta aceita, agora é só baixar os boletos para pagamento.</p>
					</div>
				</div>
				</div>
			</div>

			<div class="col-md-4 text-center d-md-none">
				<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/iphone-acerto.png">
			</div>

			<div class="col-12 text-center">
				<a href="https://portal.meuacerto.com.br/consumidor/autenticacao/cadastrar" class="btn btn-quarteary btn-acerto btn-padding-large d-inline-block">LOCALIZAR MINHAS DÍVIDAS!</a>
			</div>
		</div>
	</div>
</section>

<section class="index-cdl-section position-relative py-0">
	<div class="index-cdl-section--background">
		<div class="container position-relative index-cdl-section--content-container">
			<div class="index-cdl-section--content-wrapper mt-5 mt-md-0 pr-md-5 px-4 pl-md-0">
				<div class="row">
					<div class="offset-md-5 col-md-7 index-cdl-section--conteudo text-center text-md-right pt-md-0 pt-5">
						<img class="img-fluid mb-5" src="<?php echo get_template_directory_uri(); ?>/images/logo-cdl-bh.png">

						<h2 class="font-xxxlarge mb-0 text-right">Se confiança é importante para você,</h2>
						<h3 class="font-xxlarge font-weight-light text-right">também é importante para a gente.</h3>
					</div>
				</div>
			</div>

			<div class="index-cdl-section--content-acerto">
				<h3 class="font-xxlarge-md font-weight-light text-color-white text-center text-md-left py-5 py-md-0 px-4 px-md-0 my-4 my-md-0">A ACERTO e a CDL/BH estão juntas para garantir que a sua negociação seja tranquila e segura.</h3>
			</div>
		</div>
	</div>
</section>

<section class="py-md-0">
	<div class="container px-4 px-md-0">
		<h2 class="font-xxxlarge width-md-50">É do seu jeito, no seu tempo e cabe no seu bolso.</h2>
		
		<h4 class="width-md-50 font-weight-light text-right float-right mb-5 mb-md-0">Sair do vermelho é uma ótima sensação, por isso, tornamos as coisas mais fáceis para você.</h4>

		<div class="row index-beneficios-section clearfix">
			<div class="col-md-3 text-center mb-4 mb-md-0">
				<img class="img-fluid mb-3" src="<?php echo get_template_directory_uri(); ?>/images/icone-sem-sufoco.png">
				<h5 class="text-color-verde">Sem sufoco</h5>
				<p class="width-md-75 mx-auto">Quite sua dívida com descontos exclusivos e pague parcelado.</p>
			</div>

			<div class="col-md-3 text-center mb-4 mb-md-0">
				<img class="img-fluid mb-3" src="<?php echo get_template_directory_uri(); ?>/images/icone-sem-chateacao.png">
				<h5 class="text-color-verde">Sem chateação</h5>
				<p class="width-md-75 mx-auto">Não tem ligações chatas. Resolva pelo site, na hora que você quiser.</p>
			</div>

			<div class="col-md-3 text-center mb-4 mb-md-0">
				<img class="img-fluid mb-3" src="<?php echo get_template_directory_uri(); ?>/images/icone-nome-limpo.png">
				<h5 class="text-color-verde">Nome limpo</h5>
				<p class="width-md-75 mx-auto">Seu nome limpo em 5 dias úteis após quitar a primeira parcela</p>
			</div>

			<div class="col-md-3 text-center mb-4 mb-md-0">
				<img class="img-fluid mb-3" src="<?php echo get_template_directory_uri(); ?>/images/icone-credito-na-praca.png">
				<h5 class="text-color-verde">Crédito na praça</h5>
				<p class="width-md-75 mx-auto">Com o nome limpo, você volta a ter crédito na praça e pode comprar a prazo.</p>
			</div>
		</div>

		<div class="row align-items-center mt-5 pt-5">
			<div class="col-4 d-none d-md-block">
				<img class="img-fluid mb-3" src="<?php echo get_template_directory_uri(); ?>/images/quite-andando.png">
			</div>

			<div class="col-md-4 mb-5 mb-md-0">
				<h2 class="font-xxlarge">Se você ainda tem dúvidas, aqui estão as respostas.</h2>
				<h4 class="font-weight-light">Assista ao vídeo ou acesse nosso portal de ajuda.</h4>
				<a href="<?php echo get_permalink(get_page_by_title('Perguntas Frequentes')->ID); ?>" class="btn btn-primary btn-acerto btn-padding-large mt-3 width-xs-100"><i class="material-icons">help_outline</i>PORTAL DE AJUDA</a>
			</div>

			<div class="col-md-4 px-5 px-md-0">
				<a href="#" data-toggle="modal" data-target="#modalVideoQuite"><img class="img-fluid mb-3" src="<?php echo get_template_directory_uri(); ?>/images/computador-acerto.png"></a>
			</div>
		</div>
	</div>
</section>

<?php
  $depoimentos = get_post_meta($post->ID, 'depoimentos-homepage',true);
?>
<section class="index-opniao-section position-relative">
	<img class="img-fluid index-background-depoimentos-top w-100 position-absolute d-none d-md-block" src="<?php echo get_template_directory_uri(); ?>/images/background-cinza-depoimentos-top.png">
	
	<div class="container px-4 px-md-0">
		<h2 class="font-xxxlarge width-md-40 mb-4">As opiniões de quem é importante para a gente.</h2>
		
		<h4 class="width-md-40 font-weight-light font-xlarge mb-5">Veja o que diz quem negociou na Acerto.</h4>

		<div id="carousel-depoimentos" class="carousel slide carousel-depoimentos" data-ride="carousel">
	  		<div class="carousel-inner mx-auto">

	  			<?php
				    foreach($depoimentos as $key=>$depoimento) {
				    $img_url = wp_get_attachment_url($depoimento['logo-credor-depoimentos-homepage']);
				    $img_title = get_the_title($depoimento['logo-credor-depoimentos-homepage']);
				    $image_alt = get_post_meta($depoimento['logo-credor-depoimentos-homepage'], '_wp_attachment_image_alt', true);
				?>
					<div class="carousel-item text-center <?php if($key==0) {echo active;} ?>">
						<div class="width-md-50 mx-auto">
		      				<p class="font-large font-weight-bold mb-0"><?php echo $depoimento['titulo-depoimentos-homepage'] ?></p>
		      				<p class="mb-4"><?php echo $depoimento['descricao-depoimentos-homepage'] ?></p>

		      				<p class="font-italic mb-4 carousel-depoimentos-texto">"<?php echo $depoimento['depoimento-depoimentos-homepage'] ?>"</p>

		      				<p class="font-xsmall font-weight-bold mb-1">Negociou com:</p>
							<img class="img-falando-sobre-usuarios img-fluid d-block mx-auto" src="<?php echo $img_url;?>">
						</div>
	    			</div>
				<?php
					}
				?>
	  		</div>
	  		
	  		<a class="carousel-control-prev" href="#carousel-depoimentos" role="button" data-slide="prev">
	    		<i class="material-icons text-color-verde font-weight-bold font-xxxlarge">keyboard_arrow_left</i>
	  		</a>
	  		
	  		<a class="carousel-control-next" href="#carousel-depoimentos" role="button" data-slide="next">
		    	<i class="material-icons text-color-verde font-weight-bold font-xxxlarge">keyboard_arrow_right</i>
		  	</a>
		</div>
	</div>
	<img class="img-fluid index-background-depoimentos-bottom w-100 position-absolute d-none d-md-block" src="<?php echo get_template_directory_uri(); ?>/images/background-cinza-depoimentos-bottom.png">
</section>

<?php
  $noticias = get_post_meta($post->ID, 'noticias-homepage',true);
?>
<section>
	<div class="container px-4 px-md-0">
		<h2 class="font-xxxlarge width-md-50 text-right float-right mb-5">O que saiu sobre a gente na mídia?</h2>

		<div class="falando-sobre-imprensa text-center clearfix">
			<div class="row align-items-center">
				<?php
				    foreach($noticias as $key=>$noticia) {
				    $img_url = wp_get_attachment_url($noticia['logo-noticias-homepage']);
				    $img_title = get_the_title($noticia['logo-noticias-homepage']);
				?>
					<div class="col-12 col-md-4 wow animated fadeIn" data-wow-duration="2s">
						<a href="<?php echo $noticia['link-noticias-homepage']; ?>">
							<div class="img-noticia-container mb-3">
								<img class="img-fluid img-noticia" src="<?php echo $img_url; ?>">
							</div>
							<p class="resumo-noticia font-italic"><?php echo $noticia['texto-noticias-homepage']; ?></p>
						</a>
					</div>
				<?php
					}
				?>
			</div>
		</div>
	</div>
</section>

<section class="background-amarelo">
	<div class="container px-4 px-md-0">
		<div class="row align-items-center">
			<div class="offset-md-1 col-md-5 position-relative mb-4 mb-md-0">
				<h2 class="font-xxxlarge width-md-75">E você, se interessou?</h2>
				<h3 class="text-color-white font-weight-light font-xlarge width-md-50">Faça como milhares de brasileiros e quite sua dívida online!</h3>

				<img class="img-fluid position-absolute index-seta-cta d-none d-md-block" src="<?php echo get_template_directory_uri(); ?>/images/seta.png">
			</div> 

			<div class="col-md-5">
				<form class="form-group form-consultar-cpf mx-auto">
					<label class="sr-only" for="digiteSeuCPF">DIGITE SEU CPF</label>
					<div class="input-group input-group-lg">
				        <input type="text" class="form-input-acerto cpf round-border w-100 mb-2" id="digiteSeuCPF" placeholder="Digite seu CPF">

				        <button type="submit" class="btn btn-secondary btn-acerto w-100">CONSULTAR CPF</button>
				    </div>
				</form>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
