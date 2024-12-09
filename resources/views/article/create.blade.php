@extends('layouts.template')
@section('content')
<main>
  <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="card mb-3">

              <div class="card-body">

                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Création d'un article</h5>
                  <p class="text-center small">Renseignez les informations</p>
                </div>
                
                <form method="POST" action="{{route('article.store')}}" enctype="multipart/form-data" class="row g-3 needs-validation">
                  @csrf
                  @method('POST')

                  <div class="col-12">
                    <label for="yourPassword" class="form-label">Titre</label>
                    <textarea placeholder="Entrez un titre" class="form-control" name="title">{{old("title")}}</textarea>
                    @error('title')
                        <div class="alert alert-danger">
                        {{$message}}
                        </div>
                    @enderror
                  </div><br>

                  <div class="col-12">
                    <label for="yourPassword" class="form-label">Contenu</label>
                    <textarea placeholder="Entrez un contenu" class="form-control" name="content" id="" cols="30" rows="10">{{old("content")}}</textarea>
                    @error('content')
                        <div class="alert alert-danger">
                        {{$message}}
                        </div>
                    @enderror
                  </div><br>

                  <div class="col-12">
                    <label for="yourPassword" class="form-label">Auteur</label>
                    <input type="text" name="auteur" value="{{old("auteur")}}" placeholder="Entrez le nom de l'auteur" class="form-control" >
                    @error('auteur')
                        <div class="alert alert-danger">
                        {{$message}}
                        </div>
                    @enderror
                  </div><br>

                  <div class="col-12">
                    <label for="yourPassword" class="form-label">Categorie</label>
                    <select name="categories_id" id="" class="form-control">
                        <option value="">Choisir...</option>
                      @foreach ($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                      @endforeach
                    </select>
                    @error('categories_id')
                        <div class="alert alert-danger">
                        {{$message}}
                        </div>
                    @enderror
                  </div><br>

                  <div class="col-12">
                    <label for="yourPassword" class="form-label">Image</label>
                    <input type="file" name="image" accept=".jpg, .png, jpeg" class="form-control" >
                    @error('image')
                        <div class="alert alert-danger">
                        {{$message}}
                        </div>
                    @enderror
                  </div><br>
                  <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit">Enregistrer</button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

  </div>
</main>
@endsection