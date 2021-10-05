@extends('/layouts/main')

@section ('content')
@include('/partials/navbar')

<div class="container">
  <div class="row">
    <!-- Botão voltar -->
    <div class="col-12 my-4">
      <a href="/"><i class="fas fa-arrow-left me-1"></i>Voltar </a>
    </div>

    <!-- Card form -->
    <div class="col-12">
      <div class="card shadow bg-white rounded">
        <div class="card-header gradient text-white">
          <h2 class="card-title p-3">
            <i class="fas fa-image"></i>
            {{ isset($photo) ? 'Alterar imagem' : 'Nova imagem'}}
          </h2>
        </div>

        <div class="card-body p-5">
          <!-- Form -->
          @if (isset($photo))
            <form action="/photos/{{$photo->id}}" method="POST">
            @method('PUT')
          @else 
            <form action="/photos" method="POST">
          @endif

          @csrf
            
            <div class="row">
              <!-- Coluna da foto -->
              <div class="col-lg-6">
                <div class="d-flex flex-column h-100">
                  <div
                    class="miniatura img-thumbnail d-flex flex-column justify-content-center align-items-center h-100 mt-4">
                    <i class="far fa-image"></i>
                    <br>
                    <small>
                    </small>
                  </div>
                  <div class="form-group mt-2">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile"> Nenhum arquivo selecionado </label>
                    </div>
                  </div>
                </div>
              </div>
              <!--Fim da coluna da foto -->

              <!-- Coluna das inputs-->
              <div class="col-lg-6">
                <!-- Título -->
                <div class="form-group">
                  <label for="title"> Título </label>
                  <div class="input-group">
                    <div class="input-group-text">
                      <i class="fas fa-image"></i>
                    </div>
                    <input id="title" name="title" type="text" class="form-control" required
                      placeholder="Digite o título da sua imagem" value="{{$photo->title ?? null}}">
                  </div>
                </div>

                <!-- Data -->
                <div class="form-group mt-3">
                  <label for="date">Data </label>
                  <div class="input-group">
                    <div class="input-group-text">
                      <i class="far fa-calendar-alt"></i>
                    </div>
                    <input id="date" name="date" type="date" class="form-control" required 
                      value="{{$photo->date ?? null}}">
                  </div>
                </div>

                <!-- Descrição -->
                <div class="form-group mt-3">
                  <label for="description"> Descrição </label>
                  <textarea id="description" name="description" cols="40" rows="5" class="form-control" required
                    placeholder="Digite uma pequena descrição da imagem">{{$photo->description ?? null}}</textarea>
                </div>

                <!-- Botões -->
                <div class="form-group d-flex mt-3">
                  <button name="submit" type="reset" class="btn btn-laranja flex-grow-1 me-3"> Limpar </button>
                  <button name="submit" type="submit" class="btn btn-primary flex-grow-1"> Salvar </button>
                </div>
              </div> <!-- Fim da coluna das inputs -->
            </div> <!-- Fim da row -->
          </form> <!-- Fim do form -->
        </div> <!-- Fim do card-body -->
      </div> <!-- Fim do card -->
    </div> <!-- Fim do card-form -->
  </div> <!-- Fim da row -->
</div> <!-- Fim do container -->
@endsection