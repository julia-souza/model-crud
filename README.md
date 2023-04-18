# PHP CRUD com Laravel
[![forthebadge](https://forthebadge.com/images/badges/built-with-love.svg)](https://forthebadge.com) [![forthebadge](/made-with-php.svg)](https://forthebadge.com)
 

## Tech Stack
* PHP: ^8.2
* Composer: 2.5.5
* Laravel: ^10.8

## Configurando o ambiente

* Para gerenciar as dependências, será necessário o uso do **composer**. Para isso, basta acessar a documentação <https://getcomposer.org/download/>.
A versão utilziada neste projeto é: ``2.5.5`` 

* Para utilizar o **PostgreSQL**, adicione a seguinte extensão no arquivo ```php.ini```:  **``extension=php_pgsql.dll``**

* Para a utilização do Laravel com PHP 8.2, lembre-se de adicionar a extensão **`` extension=fileinfo``** no arquivo  ```php.ini```.

## Caso esteja clonando o repositório...

Caso tenha clonadao o repositório, basta acessar a pasta ```apicnqp`` e esecutar o comando:
```
composer install
```
para ter acesso à todas as dependências do projeto!


## Criando o projeto do zero

* Criando o projeto **Laravel** via composer do zero:

```
composer create-project laravel/laravel apicnpq 
```

## Uso do servidor interno

Execute o comando:
```
php artisan serve
```