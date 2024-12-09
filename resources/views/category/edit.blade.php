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
                  <h5 class="card-title text-center pb-0 fs-4">Edition d'une catégorie</h5>
                  <p class="text-center small">Renseignez le nom à éditer</p>
                </div>
                <form method="POST" action="{{route('categorie.update', $categorie->id)}}" class="row g-3 needs-validation">
                  @csrf
                  @method('PUT')

                  <div class="col-12">
                    <label for="yourPassword" class="form-label">Nom de la catégorie</label>
                    <input type="text" name="name" value="{{$categorie->name}}" class="form-control">
                  </div><br>
                  <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit">Editer</button>
                  </div>
                  @error('name')
                    <div class="alert alert-danger">
                      {{$message}}
                    </div>
                  @enderror
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