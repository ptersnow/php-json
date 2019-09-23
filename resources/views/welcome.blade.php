<!-- View stored in resources/views/greeting.blade.php -->

<html lang="pt-br">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <body>
    <div class="Box-body">
      <article class="markdown-body entry-content p-5" itemprop="text">
        <h1>php-json</h1>
        <p>Api utilizada nas minhas disciplinas, acessível pelo <a href="https://php-json.herokuapp.com" rel="nofollow">link</a>.</p>
      <h3>Métodos e URLs aceitas:</h3>
      <h5>Usuários</h5>
      <pre><code>
      GET    -&gt; https://php-json.herokuapp.com/api/users
      GET    -&gt; https://php-json.herokuapp.com/api/user/{id}
      POST   -&gt; https://php-json.herokuapp.com/api/user
      PUT    -&gt; https://php-json.herokuapp.com/api/user/{id}
      DELETE -&gt; https://php-json.herokuapp.com/api/user/{id}
      </code></pre>
      <p>Sendo que, para o método POST, deve ser passado um objeto JSON do tipo:</p>
      <pre><code>
      {
        "user": {
          "name": "Pedro Silva",
          "username": "ptersnow",
          "pass": "123456"
        }
      }
      </code></pre>
      <h5>Postagens</h5>
      <pre><code>
      GET    -&gt; https://php-json.herokuapp.com/api/posts
      GET    -&gt; https://php-json.herokuapp.com/api/posts/{id}
      POST   -&gt; https://php-json.herokuapp.com/api/posts
      PUT    -&gt; https://php-json.herokuapp.com/api/posts/{id}
      DELETE -&gt; https://php-json.herokuapp.com/api/posts/{id}
      </code></pre>
      <p>Sendo que, para o método POST, deve ser passado um objeto JSON do tipo:</p>
      <pre><code>
      {
        "post": {
          "title": "Título do post",
          "content": "Conteúdo",
          "user_id": 1
        }
      }
      </code></pre>
      </article>
    </div>
  </body>
</html>
