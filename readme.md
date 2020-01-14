# Repositório direcionado ao teste para empresa [ZAPTRADE](http://www.zaptrade.com.br/)

## ZAPTRADE E-commerce

A aplicação será um catálogo de produtos, contendo níveis de permissão e acesso: Gerente ou Vendedor, para o gerenciamento do catálogo.

##### Tecnologia utilizada
[Lumen 5.6](https://lumen.laravel.com/docs/5.6)

##### Requisitos
- PHP >= 7.1.3
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension

##### Configuração
``` bash
# Baixe projeto
git clone https://github.com/info-bryanalves/zaptrade-ecommerce.git

# Instale dependências
cd zaptrade-ecommerce
composer install

# A partir deste ponto, será necessário criar o banco de dados.
# Após o banco criado, crie um arquivo .env a partir do .env.example e configure o nome, usuario e senha do banco de dados.
# Obs.: Já deixei o arquivo .env.example igual ao que estou utilizando somente para facilidade na apresentação.
# Está configurado da seguinte forma: usuário: "root", senha: "",e banco: "zaptrade".

# Rode as migrations e seeds
php artisan migrate:refresh --seed

# Por fim, execute o projeto
# Obs.: Você pode configurar o seu apache diretamente para pasta public do projeto que irá ter o mesmo efeito;
php -S localhost:8000 -t public
