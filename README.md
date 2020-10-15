# Catálogo de Filmes
> Teste para ingressar como Desenvolvedor Back End na Rede Magic em Curitiba-PR

## Sobre a Aplicação
Essa aplicação é um catálogo de filmes desenvolvido com PHP e MySQL no Back-End utilizando o Framework Laravel com api REST

## API
Caso queira consumir a api do Catálogo de Filmes, veja a documentação criado no postman:

Link da Documentação: https://documenter.getpostman.com/view/13084905/TVRq15ov

Link da Collection com JSON: https://www.getpostman.com/collections/f907a03bc8cc481c1815 

## Funções Disponíveis
* [ ] Novo Filme
* [ ] Editar Filme
* [ ] Atualizar Filme
* [ ] Excluir Filme

## Screeshoots

![Filmes](images/screenshot.png?raw=true "Filmes")


## Pré Requisitos

- Servidor Mysql
- PHP 7 ou mais recente

## Instalação

- [Baixe](https://github.com/rochac2lee/crud-filmes-laravel-rest/archive/master.zip) ou Clone a aplicação: git clone https://github.com/rochac2lee/crud-filmes-laravel-rest.git

- Em seu servidor mysql crie uma base de dados com o nome "crud-filmes-laravel-rest"

- Altere o arquivo config/database.php com as configurações do seu servidor:

```
'host' => env('DB_HOST', 'hostname'), // O nome do host do seu servidor de banco de dados. - exemplo: localhost 
'port' => env('DB_PORT', '3306'), // Porta do servidor mysql
'database' => env('DB_DATABASE', 'crud-filmes-laravel-rest'), // Nome da base de dados
'username' => env('DB_USERNAME', 'username'), // Nome de usuário usado para conectar ao banco de dados - exemplo: root
'password' => env('DB_PASSWORD', 'password'), // A senha usada para conectar ao banco de dados - exemplo: 123456
```

- Necessário também alterar o arquivo .env com as configurações do seu servidor:

```
DB_HOST=hostname // O nome do host do seu servidor de banco de dados.
DB_PORT=3306 // Porta do servidor mysql
DB_DATABASE=crud-filmes-laravel-rest // Nome da base de dados
DB_USERNAME=username // Nome de usuário usado para conectar ao banco de dados - exemplo: root
DB_PASSWORD=password // A senha usada para conectar ao banco de dados - exemplo: 123456
```

- Insira as tabelas da aplicação com o comando:

```
php artisan migrate
```

- Após tudo configurado, abra o seu console e inicie sua aplicação digitando o comando:

```
php artisan serve
```

- Acesse a aplicação http://[SEU_SERVIDOR]:8000

## Créditos

- Cleberli da Rocha - https://github.com/rochac2lee

