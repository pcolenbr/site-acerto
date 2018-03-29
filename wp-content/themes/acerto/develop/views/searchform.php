<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="form-group">
		<label class="sr-only" for="termo-de-pesquisa">Qual é a sua dúvida?</label>

	    <div class="input-group">
	    	<input type="text" class="form-control form-control-lg" name="s" id="termo-de-pesquisa" placeholder="O você está procurando?">

			<div class="input-group-append">
				<button type="submit" class="btn btn-quarteary btn-lg">Pesquisar</button>
		    </div>
		</div>
  	</div>
</form>