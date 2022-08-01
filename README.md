# CRUD_with_Laravel

0º Para instalar o Laravel use o comando >> composer create-project --prefer-dist laravel/laravel <nome do projeto>
  Exemplo: composer create-project --prefer-dist laravel/laravel crud_basico

1º A configuração do banco de dados é feito no documento .env;

2º Por padrão o Laravel requisita a inserção de umas tabelas no banco de dados, os scripts de criação esta presente no diretorio migrations;

3º Para executar os scripts presente no diretorio migrations para inserir as tabelas no banco de dados é só usar o comando >> php artisan migrate;

4º Caso queira gerar o seu próprio script que cria uma tabela no banco de dados, use o comando >> php artisan make:model <nome do modelo> -m;
  Examplo: php artisan make:model Produto -m
  Ps. Este comando ira criar um documento chamado Produto.php no diretorio Models, porem também irá gerar um script com o mesmo nome do Model em plural no diretorio Migrations.
  
5º Após criado o script é só edita-lo a sua necessidade, inserindo os campos que precisa, e após isso executar o comando >> php artisan migrate, que ira gerar a nova tabela no banco de dados que ja esta configurado no documento .env;
Ps. A tabela padrão migrations do Laravel armazena todas as tabelas que ja foram inseridas no banco de dados isso impede que as inseridas novamente ao executar o comando >> php artisan migrate.
  
6º Para criarmos funções no Laravel para serem utilizadas pela view, ou pelo model utilizamos o comando >> php artisan make:controller <nome do controlador>;
  Exemplo: php artisan make:controller ProdutosController.
  Ps: Este comando ira criar um documento no diretorio Http/Controllers nomeado como ProdutosController.php, é nele que será inseridos as funções.
 
7º Por padrão do Laravel os scripts da view devem se nomeados com a extenção .blade.php.
  Exemplo: create.blade.php, delete.blade.php, edit.blade.php, show.blade.php
  Ps. Essa extenção é usada na administração do html, layouts e redirecionamentos.
  
8º Dentro do diretorio resources\views\ é o local onde serão criado as views(Interfaces da Aplicação).
  Exemplo: produtos/create.blade.php.
  Ps. Recomenda-se criar pastas para agrupar os scrips que se correlacionam, como nesse exemplo de crud foi criado uma pasta Produtos, e dentro dela cada script contido está relacionado aos Produtos, e cada script esta nomeado com a finalidade dele. Traduzindo o script create.blade.php utiliza a função create contida no script ProdutosController.php.
  
9º Para verificar se a pagina do Formulario será ou e se a função está funcionando é necessario criar uma rota. E isso é feito no script web.php presente no diretorio routes.
  Ps. Nesse projeto está exemplificando como isso é feito.
  
10º Para testar ligue o servidor do Laravel e acesse pelo navegador para ver se esta tudo ok. O comando para fazer isso é >> php artisan serve.
  Ps: Este comando ira ligar o servidor nativo do Lavarel, e a aplicação poderá ser acessada em localhost:8000.
  
Continuar esse Tutorial...
  
