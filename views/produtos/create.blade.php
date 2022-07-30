<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastrar um novo produto</title>
</head>
<body>
	<form action="{{ route('registrar_produto') }}" method="POST">
		@csrf
		<label for="">Name</label><br>
		<input type="text" name="nome"><br><br>

		<label for="">Custo</label><br>
		<input type="text" name="custo"><br><br>

		<label for="">Preco</label><br>
		<input type="text" name="preco"><br><br>

		<label for="">Quantidade</label><br>
		<input type="text" name="quantidade"><br><br>

		<button type="submit">Salvar</button>
	</form>
</body>
</html>