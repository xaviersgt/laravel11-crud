<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

    <div class="bg-dark py-3">
        <h3 class="text-white text-center">Sua Biblioteca</h3>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-content-end">
                <a href="{{ route('products.index') }}" class="btn btn-dark">Back</a>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card borde-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Create Product</h3>
                    </div>
                    <form enctype="multipart/form-data" action="{{ route('products.store') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="" class="form-label h5">Autor</label>
                                <input value="{{ old('autor') }}" type="text" class="@error('autor') is-invalid @enderror form-control-lg form-control" placeholder="Autor" name="autor">
                                @error('autor')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h5">Título</label>
                                <input value="{{ old('titulo') }}" type="text" class="@error('titulo') is-invalid @enderror form-control form-control-lg" placeholder="Título" name="titulo">
                                @error('titulo')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h5">Subtítulo</label>
                                <input value="{{ old('subtitulo') }}" type="text" class="@error('subtitulo') is-invalid @enderror form-control form-control-lg" placeholder="Subtítulo" name="subtitulo">
                                @error('subtitulo')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h5">Edição</label>
                                <input value="{{ old('edicao') }}" type="text" class="@error('edicao') is-invalid @enderror form-control form-control-lg" placeholder="Edição" name="edicao">
                                @error('edicao')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h5">Editora</label>
                                <input value="{{ old('editora') }}" type="text" class="@error('editora') is-invalid @enderror form-control form-control-lg" placeholder="Editora" name="editora">
                                @error('editora')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h5">Ano de Publicação</label>
                                <input value="{{ old('anodepublicacao') }}" type="text" class="@error('anodepublicacao') is-invalid @enderror form-control form-control-lg" placeholder="Ano de Publicação" name="anodepublicacao">
                                @error('anodepublicacao')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="" class="form-label h5">Capa do Livro</label>
                                <input type="file" class="form-control form-control-lg" placeholder="Price" name="image">
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-lg btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
  </body>
</html>