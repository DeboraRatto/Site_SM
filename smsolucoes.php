<?php require_once("_php/formulario.php")?>
<?php 
	if (isset($_POST['enviar'])) {
		if (enviarMensagem($_POST)) {
			$mensagem = "Mensagem enviada com sucesso.";} else {
				$mensagem = "Erro no envio.";
		}
	}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Débora Ratto">
	<meta name="keywords" content="Soluções Metalurgicas, Metalurgicas, SM">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SM - Soluções Metalúrgicas</title>
	<link rel="stylesheet" href="assets/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	
</head>
<body>

	<header>
		<a href="smsolucoes.html"><img src="Img/SM.png"></a>
	
	</header>


	<nav>
		<ul>
			<li>
				<a href="smsolucoes.html">
						Início</a>
			</li>
			<li>
				<a href="#serv">
					Serviços</a>
			</li>
			<li>
				<a href="#empi">
					Empresa</a>
			</li>
			<li>
				<a href="#conta">
					Contato</a>
			</li>
		</ul>
	</nav>

	<section class="larg">
		<div class="owl-carousel owl-theme">
 
  			<div class="item"><img src="Imagens/Usinando.jpeg" alt="Usinando uma peça"></div>
  			<div class="item"><img src="Imagens/Maquina_fundo.jpeg" alt="Lagun GBM 32Z"></div>
 
		</div>
	</section>
	
	<section id="serv">
		<h1>Serviços</h1>

		<div class="servi">
			<a href="#conta"><img src="Imagens/Estamparia.jpeg"></a>
			<span>Estamparia</span>
		</div>
		<div class="servi">
			<a href="#conta"><img src="Imagens/Usinagem.jpeg"></a>
			<span>Usinagem</span>
		</div>
		<div class="servi">
			<a href="#conta"><img src="Imagens/Molde-de-injecao.jpeg"></a>
			<span>Molde de Injeção Plática</span>
		</div>
	
	</section>

		<section id="empi">
			<h1>A Empresa</h1>

			<p class="texto">O fundador Auro Zaparoli Dourado, nasceu em 1966 e trabalha no ramo desde 1989. Com seu vasto conhecimento em metalurgia, em 2016 decidiu começar a sua própria Metalúrgica, assim nasceu a SM - Soluções Metalúrgicas. Sendo hoje uma das melhores metalúrgicas da região, mantendo qualidade e assiduidade nos seus serviços. 
			</p>
		
			<div class="owl-carousel owl-theme">
 
  				<div class="item"><img src="Imagens/Empresa1.jpeg" alt="Empresa_1"></div>
  				<div class="item"><img src="Imagens/Empresa2.jpeg" alt="Empresa_2"></div>
  				<div class="item"><img src="Imagens/Empresa3.jpeg" alt="Empresa_3"></div>
 
			</div>
			
		</section>

		<section id="conta">
			<h1>Contato</h1>

			<form action="smsolucoes.php" method="post">
				<label for="nome">Nome</label></br>
				<input type="text" name="nome" id="nome" required></br>

				<label for="telefone">Telefone</label></br>
				<input type="tel" name="telefone" id="telefone" required></br>

				<label for="email">E-mail</label></br>
				<input type="email" name="email" id="email" required></br>

				<label for="mensagem">Mensagem</label></br>
				<textarea name="mensagem" rows="4" cols="50" id="mensagem" maxlength="600"></textarea></br>

				<input type="submit" value="Enviar" id="enviar" name="enviar" class="botao">
			</form>

			<?php 
				if(isset($mensagem)) {
					echo "<p>" . $mensagem . "</p>";
				}
			?>

		<div class="cont">
			<h4>Endereço</h4>
			<p>Av. do Oratório, 2853 - São Lucas,</p>
			<p>São Paulo-SP</p>
			<p>CEP: 03221-100</p>
			<h4>Telefone</h4>
			<p>(11) 2592-9486</p>

		</div>
		</section>

	<footer>
		
	</footer>
	
	<script src="jquery.min.js"></script>
	<script src="owl.carousel.min.js"></script>
	<script>

		$('.owl-carousel').owlCarousel({
   	 		loop:true,
    		margin:10,
    		nav:false,
    		autoplay:true,
    		responsive:{
        		0:{
            		items:1
       		 	}
    		}

		})

	</script>
	

</body>
</html>