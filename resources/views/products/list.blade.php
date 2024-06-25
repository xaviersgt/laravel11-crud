<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bibloteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="bg-dark py-3">
        <h3 class="text-white text-center">Biblioteca</h3>
    </div>
    <div class="col-md-10 d-flex justify-content-end">
        <a href="dashboard" class="btn btn-danger" style="margin-top: 20px">Voltar</a>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-content-end">
                <a href="{{ route('products.create') }}" class="btn btn-dark">Adicionar</a>
            </div>           
        </div>
        <div class="row d-flex justify-content-center">
            @if (Session::has('success'))
            <div class="col-md-10 mt-4">
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>    
            @endif            
            <div class="col-md-10">
                <div class="card borde-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Meus Livros</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th></th>
                                <th>Autor</th>
                                <th>Título</th>
                                <th>Subtítulo</th>
                                <th>Edição</th>
                                <th>Editora</th>
                                <th>Ano de Publicação</th>
                                <th>Criado em</th>
                                <th>Ações</th>
                            </tr>
                            @if ($products->isNotEmpty())
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>
                                    @if ($product->image != "")
                                        <img width="50" src="{{ asset('uploads/products/'.$product->image) }}" alt="">
                                    @endif
                                </td>
                                <td>{{ $product->autor }}</td>
                                <td>{{ $product->titulo }}</td>
                                <td>{{ $product->subtitulo }}</td>
                                <td>{{ $product->edicao }}</td>
                                <td>{{ $product->editora }}</td>
                                <td>{{ $product->anodepublicacao }}</td>
                                <td>{{ \Carbon\Carbon::parse($product->created_at)->format('d M, Y') }}</td>
                                <td>
                                    <a href="{{ route('products.edit',$product->id) }}" class="btn btn-dark">Editar</a>
                                    <a href="#" onclick="deleteProduct({{ $product->id  }});" class="btn btn-danger">Deletar</a>
                                    <form id="delete-product-from-{{ $product->id  }}" action="{{ route('products.destroy',$product->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>   
                            @endforeach
                            
                            @endif
                            
                        </table>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    
  </body>
</html>

<script>
    function deleteProduct(id) {
        if (confirm("Tem certeza que deseja deletar o Produto?")) {
            document.getElementById("delete-product-from-"+id).submit();
        }
    }
</script>