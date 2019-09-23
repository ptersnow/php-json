# php-json

Api utilizada nas minhas disciplinas, acessível pelo [link](https://php-json.herokuapp.com).

### Métodos e URLs aceitas:

##### Usuários

```
GET  ->   https://php-json.herokuapp.com/api/users
GET  ->   https://php-json.herokuapp.com/api/user/{id}
POST ->   https://php-json.herokuapp.com/api/user
PUT ->    https://php-json.herokuapp.com/api/user/{id}
DELETE -> https://php-json.herokuapp.com/api/user/{id}
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
GET  ->   https://php-json.herokuapp.com/api/posts
GET  ->   https://php-json.herokuapp.com/api/post/{id}
POST ->   https://php-json.herokuapp.com/api/post
PUT ->    https://php-json.herokuapp.com/api/post/{id}
DELETE -> https://php-json.herokuapp.com/api/post/{id}
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
