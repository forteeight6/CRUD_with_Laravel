<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ver um produto</title>
</head>
<body>
	<label for="">Nome</label><br>
	<input type="text" name="nome" value="{{ $produto->nome }}"><br><br>

	<label for="">Custo</label><br>
	<input type="text" name="custo" value="{{ $produto->custo }}"><br><br>

	<label for="">Preco</label><br>
	<input type="text" name="preco" value="{{ $produto->preco }}"><br><br>

	<label for="">Quantidade</label><br>
	<input type="text" name="quantidade" value="{{ $produto->quantidade }}"><br><br>

</body>
</html>