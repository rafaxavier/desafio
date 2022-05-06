<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Preparando para rodar

- Execute na raiz do projeto (local) , para subir o docker </br>
 $ sudo docker-compose up -d 

- Comando para acessar a raiz do projeto no docker </br>                          
 $ sudo docker exec -it desafio-php-fpm-1  bash   

- Após acessar a raiz no docker, executar as migrations </br>
 $ php artisan migrate


<table>
    <tr>
       <td>Método</td>   	
       <td>Endpoint</td>    	
       <td>Descrição</td>
    </tr>
    <tr>
       <td>POST</td>   	
       <td>http://localhost:8000/api/cliente</td>    	
       <td>Cadastro de novo cliente.</td>
    </tr>
    <tr>
       <td>PUT	</td>   	
       <td>http://localhost:8000/api/cliente/{id}</td>    	
       <td>Edição de um cliente já existente..</td>
    </tr>
    <tr>
       <td>DELETE	</td>   	
       <td>http://localhost:8000/api/cliente/{id}</td>    	
       <td>Remoção de um cliente existente.</td>
    </tr>
    <tr>
       <td>GET	</td>   	
       <td>http://localhost:8000/api/cliente/{id}</td>    	
       <td>Consulta de dados de um cliente..</td>
    </tr>
    <tr>
       <td>GET	</td>   	
       <td>http://localhost:8000/api/consulta/final-placa/{numero}</td>    	
       <td>Consulta de todos os clientes cadastrados na base, onde o último número da placa do carro é igual ao informado.</td>
    </tr>
</table>	
