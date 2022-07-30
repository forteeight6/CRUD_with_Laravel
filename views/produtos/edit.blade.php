<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastrar um novo produto</title>
</head>
<body>
	<form action="{{ route('alterar_produto', ['id' => $produto->id]) }}" method="POST">
		@csrf
		<label for="">Nome</label><br>
		<input type="text" name="nome" value="{{ $produto->nome }}"><br><br>

		<label for="">Custo</label><br>
		<input type="text" name="custo" value="{{ $produto->custo }}"><br><br>

		<label for="">Preco</label><br>
		<input type="text" name="preco" value="{{ $produto->preco }}"><br><br>

		<label for="">Quantidade</label><br>
		<input type="text" name="quantidade" value="{{ $produto->quantidade }}"><br><br>

		<button type="submit">Salvar</button>
	</form>
</body>
</html>