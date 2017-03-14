<?php
	
/*	if($_POST["acao"] == "inserir"){
		inserirPessoa();
	}*/

	function inserirPessoa(){
		
		// Conexão com o Banco de Daos

		$con = new mysqli("localhost", "root", "", "bancovalemobi");
				
		// Inserir valores dentro do Banco de Dados
		$sql = "INSERT INTO tblEstoque(codProduto, tipo, mercadoria, quantidade, preco, negocio)
		VALUES ('{$_POST["campo-codigo"]}','{$_POST["campo-tipoMercadoria"]}','{$_POST["campo-nomeMercadoria"]}','{$_POST["campo-quantidade"]}','{$_POST["campo-preco"]}','{$_POST["campo-tipoVenda"]}')";
		
		echo "Cadastrado com Sucesso!";
		
		$con->query($sql);
		$con->close();
		
		echo "Fim da Conexão!";
	}
	header("cadastro.php");
?>