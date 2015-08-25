  <html>
    <head>
      <title>Exemplo</title>
      <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body class="container">
      <table border="1" style="width:100%">
        <tr>
          <td>id</td>
          <td>Categorias</td>
          <td>Descrição</td>
        </tr>
        @foreach($categories as $category)
          <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->description}}</td>
          </tr>
        @endforeach
      </table>
    </body>
  </html>
