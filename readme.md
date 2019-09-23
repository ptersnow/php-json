# php-json

Api para a disciplina de Programação para Dispositivos Móveis e Sem Fio, acessível pelo [link](https://php-json.herokuapp.com).

### Métodos e URLs aceitas:

##### Usuários

```
GET  ->   https://php-json.herokuapp.com/users
GET  ->   https://php-json.herokuapp.com/users/{id}
POST ->   https://php-json.herokuapp.com/users
PUT ->    https://php-json.herokuapp.com/users/{id}
DELETE -> https://php-json.herokuapp.com/users/{id}
```

Sendo que, para o método POST, deve ser passado um objeto JSON do tipo:

```
{
    "user": {
        "name": "Pedro Silva",
        "username": "ptersnow",
        "pass": "123456"
    }
}
```


##### Postagens

```
GET  ->   https://php-json.herokuapp.com/posts
GET  ->   https://php-json.herokuapp.com/posts/{id}
POST ->   https://php-json.herokuapp.com/posts
PUT ->    https://php-json.herokuapp.com/posts/{id}
DELETE -> https://php-json.herokuapp.com/posts/{id}
```

Sendo que, para o método POST, deve ser passado um objeto JSON do tipo:

```
{
    "post": {
        "title": "Título do post",
        "content": "Conteúdo",
        "user_id": 1
    }
}
```
