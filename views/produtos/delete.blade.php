<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Excluir um produto</title>
</head>
<body>

	<form action="" method="POST">
		@csrf
		<label for="{{ route('excluir_produto', $produto->id) }}">Tem certeza que deseja excluir este produto?</label><br>
		<input type="text" name="nome" value="{{ $produto->nome }}"><br><br>

		<button type="submit">Sim</button>
	</form>
	

</body>
</html>