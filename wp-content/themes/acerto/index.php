<?php get_header(); ?>

<section class="index-hero-section">
	<div class="container">
		<div class="row justify-content-end align-items-center">
			<div class="col-6">
				<h1 class="text-color-white mb-4">A melhor opção para negociar suas dívidas sem sair de casa</h1>

				<div class="">
					<p class="text-color-white mb-1">Quanto cabe em seu bolso?</p>
					<p class="text-color-white mb-1">Consulte grátis o seu CPF e faça SUA proposta.</p>

					<div class="form-group">
						<label class="sr-only" for="digiteSeuCPF">Digite seu CPF</label>
						<div class="input-group input-group-lg">
					        <input type="text" class="form-control border-none" id="digiteSeuCPF" placeholder="Digite seu CPF">

					        <div class="input-group-append">
								<button type="submit" class="btn btn-primary">Consultar</button>
					        </div>
					    </div>
					</div>
	  			</div>
			</div>
		</div>
	</div>
</section>

<section class="verde">
	<div class="container">
		<h2 class="text-center mb-4">Vejo porque você precisa negociar hoje</h2>

		<div class="row">
			<div class="col-12 col-md-6">
				<p class="mb-2">Isso é quanto sua dívida cresce se você não negocia-la:</p>

				<p class="mb-0"><strong>321,3%</strong> juros médio em cheque-especial no ano de 2017</p>
				<p><strong>363,3%</strong> juros médio em cartão de crédito no ano de 2017</p>

				<img class="img-fluid w-75 mt-4 wow animated fadeIn" data-wow-duration="2s" src="<?php echo get_template_directory_uri(); ?>/images/grafico-preco-divida.png">
			</div>

			<div class="col-12 col-md-6">
				<div class="mb-4">
					<h3>Resolver hoje sai mais barato.</h3>
					<p>Simule quanto de desconto você pode conseguir e veja o quanto precisa poupar para atingir sua meta!</p>
				</div>

				<form>
					<div class="form-group">
						<label class="sr-only" for="valorDaDivida">Valor da dívida</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text background-amarelo text-color-white">R$</div>
					        </div>
					        
					        <input type="text" class="form-control border-none" id="valorDaDivida" placeholder="Valor da dívida">
					    </div>
					</div>

					<div class="form-group">
						<select class="form-control border-none">
						  <option>Default select</option>
						</select>
					</div>

					<div class="form-group">
						<label class="sr-only" for="valorDaDivida">Valor da dívida</label>
						<div class="input-group">
					        <input type="text" class="form-control border-none" id="valorDaDivida" placeholder="Valor da dívida">

					        <div class="input-group-append">
								<div class="input-group-text background-amarelo text-color-white">meses</div>
					        </div>
					    </div>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-quarteary w-100">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<?php
  $credores = get_post_meta($post->ID, 'credores-homepage',true);
?>
<section>
	<div class="container">
		<div class="mb-5">
			<h2 class="text-center mb-2">Com quais empresas posso quitar minha dívida</h2>
			<p class="text-center w-75 mx-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus consectetur nisl quis velit finibus aliquet. Fusce ornare risus in felis ullamcorper, ut sagittis ex sollicitudin. Donec cursus augue elit.</p>
		</div>

		<div class="home-carousel-credores">
			<?php
			    foreach($credores as $credor) {
			    $img_url = wp_get_attachment_url($credor['image-credores-homepage']);
			    $img_title = get_the_title($credor['image-credores-homepage']);
			    $image_alt = get_post_meta($credor['image-credores-homepage'], '_wp_attachment_image_alt', true);
			?>
				<div class="position-relative">
		            <a class="d-inline-block" target="_blank" href="<?php echo $credor['link-credores-homepage']; ?>"><img class="img-fluid px-4" src="<?php echo $img_url ?>"></a>
		            <?php if(!empty($credor['disclaimer-credores-homepage'])) { ?>
		            	<i class="material-icons tooltip-disclaimer-credor" data-toggle="tooltip" data-placement="top" title="<?php echo $credor['disclaimer-credores-homepage']; ?>">info_outline</i>
		           	<?php } ?>
	            </div>
			<?php
				}
			?>
		</div>
	</div>
</section>

<section>
	<div class="row no-gutters">
		<div class="col-12 col-md-5 confianca-col confianca-col-1 position-relative wow animated slideInLeft" data-wow-duration="2s">
			<div class="container text-center">
				<h4 class="text-color-white">As negociações da Acerto são seguras e garantidas pela CDL/BH	</h4>
			</div>
		</div>

		<div class="col-12 col-md-3 confianca-col confianca-col-2 position-relative">
			<a target="_blank" href="http://www.cdlbh.com.br/portal/6843/Sugestao_de_Pauta/Consumidores_agora_podem_renegociar_dividas_em_menos__de_cinco_minutos_em_plataforma_online_e_gratuita">
				<div class="container">
					<img class="img-fluid wow animated fadeIn" data-wow-duration="3s" src="<?php echo get_template_directory_uri();?>/images/logo-cdl.jpg">
				</div>
			</a>
		</div>

		<div class="col-12 col-md-4 confianca-col confianca-col-3 position-relative wow animated slideInRight" data-wow-duration="2s">
			<div class="container text-center">
				<h2 class="text-color-white">Uma iniciativa da CDL/BH para facilitar a sua vida</h2>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container como-funciona">
		<div class="row align-items-center">
			<div class="col-6">
				<h2 class="mb-5">Entando como você pode negociar sua dívida com descontos</h2>
				<div class="row">
					<div class="col-3 mb-5 wow animated slideInLeft text-center" data-wow-duration="2s">
						<img src="<?php echo get_template_directory_uri();?>/images/meeting.png">
					</div>

					<div class="col-9 mb-5 wow animated slideInLeft" data-wow-duration="2s">
						<h4 class="font-weight-bold">Consulte seu CPF</h4>
						<p>Para começar é simples! Basta fornecer seu CPF e completar o cadastro para verificarmos as dívidas disponíveis no sistema para negociação.</p>
					</div>

					<div class="col-3 mb-5 wow animated slideInLeft text-center" data-wow-duration="2s">
						<img src="<?php echo get_template_directory_uri();?>/images/meeting.png">
					</div>

					<div class="col-9 mb-5 wow animated slideInLeft" data-wow-duration="2s">
						<h4 class="font-weight-bold">Consulte seu CPF</h4>
						<p>Para começar é simples! Basta fornecer seu CPF e completar o cadastro para verificarmos as dívidas disponíveis no sistema para negociação.</p>
					</div>

					<div class="col-3 mb-5 wow animated slideInLeft text-center" data-wow-duration="2s">
						<img src="<?php echo get_template_directory_uri();?>/images/meeting.png">
					</div>

					<div class="col-9 mb-5 wow animated slideInLeft" data-wow-duration="2s">
						<h4 class="font-weight-bold">Consulte seu CPF</h4>
						<p>Para começar é simples! Basta fornecer seu CPF e completar o cadastro para verificarmos as dívidas disponíveis no sistema para negociação.</p>
					</div>
				</div>
			</div>

			<div class="col-5 offset-1 background-cinza-claro px-4 py-4 como-funciona-video-container">
				<h3>Ainda não entendeu? O Quite te explica como funciona!</h3>
				<p>O Quite é nosso mascote que vai te ajudar a entender como funciona a Acerto</p>

				<iframe width="100%" height="315" class=" wow animated fadeIn" data-wow-duration="2s" src="https://www.youtube.com/embed/dTVuu9aZZeU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>

<section class="background-verde">
	<div class="container">
		<div class="row">
			<div class="col align-items-center">
				<h2 class="text-center text-color-white mb-4">Faça como milhares de brasileiros e quite sua dívida online!</h2>

				<form class="w-50 mx-auto">
					<div class="form-group">
					    <label class="sr-only" for="digiteSeuCPF2">Digite seu CPF</label>
					    <input type="email" class="form-control border-none form-control-lg mb-3" id="digiteSeuCPF2" placeholder="Digita seu CPF">
					    <button type="submit" class="btn btn-quarteary btn-lg w-100">Consultar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<?php
  $noticias = get_post_meta($post->ID, 'noticias-homepage',true);
  $depoimentos = get_post_meta($post->ID, 'depoimentos-homepage',true);
?>
<section>
	<div class="container">
		<h2 class="text-center text-color-amarelo mb-5">Confira o que estão falando sobre a Acerto</h2>

		<div class="falando-sobre-imprensa text-center">
			<div class="row align-items-center">
				<?php
				    foreach($noticias as $key=>$noticia) {
				    $img_url = wp_get_attachment_url($noticia['logo-noticias-homepage']);
				    $img_title = get_the_title($noticia['logo-noticias-homepage']);
				    $image_alt = get_post_meta($noticias['logo-noticias-homepage'], '_wp_attachment_image_alt', true);
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

		<div class="falando-sobre-usuarios mt-5">
			<h4 class="text-center text-color-amarelo">E o que nossos usuários estão pensando sobre a gente?</h4>

			<div class="row mt-5">
				<?php
				    foreach($depoimentos as $depoimento) {
				    $img_url = wp_get_attachment_url($depoimento['logo-credor-depoimentos-homepage']);
				    $img_title = get_the_title($depoimento['logo-credor-depoimentos-homepage']);
				    $image_alt = get_post_meta($depoimento['logo-credor-depoimentos-homepage'], '_wp_attachment_image_alt', true);
				?>
					<div class="col-12 col-md-4 text-center wow animated slideInUp" data-wow-duration="2s">
						<p class="font-weight-bold mb-0"><?php echo $depoimento['titulo-depoimentos-homepage'] ?></p>
						<p class="text-color-verde mb-2 font-xsmall"><?php echo $depoimento['descricao-depoimentos-homepage'] ?></p>

						<p class="font-italic">"<?php echo $depoimento['depoimento-depoimentos-homepage'] ?>"</p>

						<p class="font-xsmall font-weight-bold mb-1">Negociou com:</p>
						<img class="img-falando-sobre-usuarios img-fluid d-block mx-auto" src="<?php echo $img_url;?>">
					</div>

				<?php
					}
				?>
			</div>
		</div>
	</div>
</section>

<section class="background-cinza-claro">
	<div class="container">
		<div class="row">
			<div class="col align-items-center">
				<h2 class="text-center text-color-amarelo mb-4">Faça como milhares de brasileiros e quite sua dívida online!</h2>

				<form class="w-50 mx-auto">
					<div class="form-group">
					    <label class="sr-only" for="digiteSeuCPF2">Digite seu CPF</label>
					    <input type="email" class="form-control border-none form-control-lg mb-3" id="digiteSeuCPF2" placeholder="Digita seu CPF">
					    <button type="submit" class="btn btn-primary btn-lg w-100">Consultar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>
