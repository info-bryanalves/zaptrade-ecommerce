# Repositório direcionado ao teste para empresa [ZAPTRADE](http://www.zaptrade.com.br/)

## ZAPTRADE E-commerce

A aplicação será um catálogo de produtos, contendo níveis de permissão e acesso: Gerente ou Vendedor, para o gerenciamento do catálogo.

##### Tecnologia utilizada
[Lumen 5.6](https://lumen.laravel.com/docs/5.6)

##### Build Setup
``` bash
# Baixar projeto
git clone https://github.com/info-bryanalves/zaptrade-ecommerce.git

# Instalar dependências
cd zaptrade-ecommerce
composer install

# A partir deste ponto, será necessário criar o banco de dados.
# Após o banco criado, crie um arquivo .env a partir do .env.example e configure o nome, usuario e senha do banco de dados.
# Obs.: Já deixei o arquivo .env.example igual ao que estou utilizando somente para facilidade na apresentação.

# Por fim, rode as migrations e seeds
php artisan migrate:refresh --seed

# Rodar projeto
php -S localhost:8000 -t public
