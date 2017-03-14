<!DOCTYPE html>

<html>
	
	<head>
		<title>PNM | Valemobi</title>
		<meta http-equiv="Content-Type" content="text/html", charset=utf-8" />
		<meta name="description" content="Valemobi - São Paulo">
		<meta name="keywords" content="HTML,CSS,JavaScript,PHP e MySQL">
		<meta name="author" content="Andrew Marques">
		
		<script type="text/javascript" language="javascript" src="javaScript/javaS.js"></script>
		<link rel="stylesheet" href="css/estilo.css" type="text/css">
		
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700" rel="stylesheet">
		
	</head>
	
	<body>
		<div id="geralCadastro">
			
			<div id="menuSuperior">
				<img id="imgFundoSuperior" src="imagens/fundoSuperior.png" alt="Fundo Menu Superior"/>
			</div>
			
			<div id="sessao1Cadastro">
				<div = id="titulo-sessao1">
					<p class="txt-titulo-formulario">PLATAFORMA DE NEGOCIÇÃO DE MERCADORIAS</p>
				</div>
				
				<div class="sub-sessao-cadastro">
					<div class="titulo-sub-sessao">
						<p id="txt-titulo-formulario-sub-sessao-cadastro">CADASTRO&nbsp DE&nbsp MERCADORIA</p>
						
						<div id="sub-sessao-btn-form">
							<div id="sub-sessao-btn-form-ajuda">
								<a href="#" ><img src="imagens/icones/info1.png" alt="Fundo Menu Superior"/></a>
							</div>
							<div id="sub-sessao-btn-form-fechar">
								<a href="index.php"><img src="imagens/icones/fechar1.png" alt="Fundo Menu Superior"/></a>
							</div>
						</div>
				</div>	

					<form name="form1" method="post" action="conexao.php">
						<div id="organizacao-campos-txt-codigo">
							<p class="titulo-form">Código:</p>
							<input class="txt-form" id="txt-codigo" type="text" name="campo-codigo" placeholder="Código do Produto"/></br>
						</div>
						
						<div id="organizacao-campos-txt-tipoMercadoria">
							<p class="titulo-form">Tipo de Mercadoria:</p>
							<input class="txt-form" id="txt-tipoMercadoria" type="text" name="campo-tipoMercadoria" placeholder="Tipo de Mercadoria?"/></br>
						</div>
						
						<div id="organizacao-campos-txt-nomeMercadoria">
							<p class="titulo-form">Nome da Mercadoria:</p>
							<input class="txt-form" id="txt-nomeMercadoria" type="text" name="campo-nomeMercadoria" placeholder="Mercadoria"/></br>
						</div>
						
						<div id="organizacao-campos-txt-quantidade">
							<p class="titulo-form">Quantidade:</p>
							<input class="txt-form" id="txt-quantidade" type="number" name="campo-quantidade" placeholder="Quantidade"/></br>
						</div>
						
						<div id="organizacao-campos-txt-preco">
							<p class="titulo-form">Preço:</p>
							<input class="txt-form" id="txt-preco" type="text" name="campo-preco" placeholder="Valor"/></br>
						</div>
						
						<div id="organizacao-campos-txt-tipoNegocio">
							<p class="titulo-form">Tipo de Negócio:</p>

							<select class="txt-form" id="txt-tipoVenda" name="campo-tipoVenda">
								<option>Escolha</option>
								<option value="1">Compra</option>
								<option value="2">Venda</option>		  
							</select> 
						</div>	
						
						<div id="organizacao-botoes">							
							<input class="btn-subs-config" id="btn-limpar-sub-cadastro" type="reset" value="LIMPAR CAMPOS" name="cadastro"/>
							<input type="hidden" name="acao" value="inserir"/>
							<input class="btn-subs-config" id="btn-cadastrar-sub-cadastro" type="submit" value="CADASTRAR" name="limpar"/>					
						</div>						
					</form>				
				</div>	
				
			</div>
			
		</div>
		
	</body>	

</html>
