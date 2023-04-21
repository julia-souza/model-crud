# PHP CRUD com Laravel: Leia com atenção! 
[![forthebadge](https://forthebadge.com/images/badges/built-with-love.svg)](https://forthebadge.com) [![forthebadge](/made-with-php.svg)](https://forthebadge.com)

## Arquivo importantes: 
* Rotas: ``\apicnpq\routes\web.php`` 

* Controller: ```apicnpq\app\Http\Controllers```

* View: ```C:\apicnpq\resources\views```

## PHP Artisan
### Alguns comandos importantes!!

### Servidor interno

Execute o comando:
```
php artisan serve
```
com isso ele vai subir um servidor já em uma porta especificada, utilizando um host especificado, então, sobe um servidor no nosso localhost, na porta 8000.

Caso queira mudar algum parâmetro, execute:
```
php artisan serve --host=IP_do_host --port=PORTA
```
### Make
Doc: <https://laravel.com/docs/10.x/artisan#generating-commands>

**Gerar *controller* automagicamente:** ```php artisan make:controller Nome-do-controller --resource ```

*Obs: Nome de classe sempre começa com letra maiúscula*

**Gerar *componente* automagicamente:** 
```
php artisan make:component Nome-do-componente 
```
ou 
```
php artisan make:component layout –view
```