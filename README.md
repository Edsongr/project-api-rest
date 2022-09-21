## Sobre o Projeto 
Criar um endpoint REST, que retorne um ranking de um movimento. As informações de retorno devem ser:
 * Nome Movimento
 * Nome usuário 
 * Recorde do Usuário
 * Posição
 * Data


## Tecnologias Usada 
Foi utilizado as seguintes tecnologias: 

* Laravel 9 
* Php 8.1
* Docker Ci 
* Mysql 

## Inicializar o projeto 
O Projeto pode ser inicializado com o próprio server do Laravel ou com Docker. 

Primeiramente configure o arquivo .env da aplicação, colocando sua conexão de banco local. 
Ou se for rodar com o Docker configurar a conexão do Mysql do docker-compose.

Para iniciar com Laravel rode os comandos:

<code>
    
    composer install 
    
    php artisan migrate 
    
    php artisan db:seed
    
    php artisan serve
    
</code>

Para iniciar com Docker digite o comando: 

<code>
    
    sudo docker-compose up -d
    
</code>


## Endpoins

#### RANKING:

URL 

    * LARAVEL: http://127.0.0.1:8000/api/ranking/1 
    
    * DOCKER: http://127.0.0.1/api/ranking/1 
    

METHOD: GET 

Exemplo RETORNO:

<code>

    {
        "status": true,
        "data": {
            "Deadlift": [
                {
                    "user": "Jose",
                    "record": 190,
                    "position": 1,
                    "date": "2021-01-06 00:00:00"
                },
                {
                    "user": "Joao",
                    "record": 180,
                    "position": 1,
                    "date": "2021-01-02 00:00:00"
                },
                {
                    "user": "Paulo",
                    "record": 170,
                    "position": 1,
                    "date": "2021-01-01 00:00:00"
                }
            ]
        }
    }

</code>


### Outros endpoints feitos como adicionais ao projeto/teste:

#### LIST ALL MOVEMENT:
URL 

    * LARAVEL: http://127.0.0.1:8000/api/movement 
    
    * DOCKER: http://127.0.0.1/api/movement 
    

METHOD: GET 

Exemplo de Retorno:

<code>

    {
        "status": true,
        "data": [
            {
                "id": 1,
                "name": "Deadlift",
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 2,
                "name": "Back Squat",
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 3,
                "name": "Bench Press",
                "created_at": null,
                "updated_at": null
            }
        ]
    }

</code>

#### GET ONE MOVEMENT:

URL:

    * LARAVEL: http://127.0.0.1:8000/api/movement/1
    
    * DOCKER: http://127.0.0.1/api/movement/1
    

METHOD: GET 

Exemplo de Retorno:

<code>

    {
        "status": true,
        "data": {
            "id": 1,
            "name": "Deadlift",
            "created_at": null,
            "updated_at": null
        }
    }

</code>

<hr>

#### INSERT MOVEMENT:

URL:

    * LARAVEL: http://127.0.0.1:8000/api/movement
    
    * DOCKER: http://127.0.0.1/api/movement
    

METHOD: POST 

Exemplo Body Envio: 

<code>

    {
        "name": "Novo Movimento"
    }

</code>


Exemplo de Retorno:

<code>

    {
        "status": true,
        "message": "REGISTRO CRIADO COM SUCESSO!"
    }

</code>



#### UPDATE MOVEMENT:

URL:

    * LARAVEL: http://127.0.0.1:8000/api/movement/1
    
    * DOCKER: http://127.0.0.1/api/movement/1
    

METHOD: PUT 

Exemplo Body Envio: 

<code>

    {
        "name": "Novo Movimento edit"
    }

</code>


Exemplo de Retorno:

<code>

    {
        "status": true,
        "message": "REGISTRO ATUALIZADO COM SUCESSO!"
    }

</code>



#### DELETE MOVEMENT:

URL:

    * LARAVEL: http://127.0.0.1:8000/api/movement/1
    
    * DOCKER: http://127.0.0.1/api/movement/1
    

METHOD: DELETE 


Exemplo de Retorno:

<code>

    {
        "status": true,
        "message": "REGISTRO DELETADO COM SUCESSO!"
    }

</code>



