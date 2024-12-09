@extends('layouts.template')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <nav>
        <a href="{{route('categorie.create')}}" class="btn btn-primary">Créer une catégorie</a>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Liste des catégories</h5>

                    <!-- Dark Table -->
                    <table class="table table-dark">
                        @if (@session('success_message'))
                            <div class="alert alert_success">
                                {{session('success_message')}}   
                            </div>
                        @endif
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Modification</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $categorie)
                                <tr>
                                    <td>{{$categorie->name}}</td>
                                    <td><a href="{{route('categorie.edit',$categorie->id)}}" class="btn btn-primary">Editer</a></td>
                                </tr>
                            @endforeach 
                        </tbody>
                    </table>
                    {{ $categories->links() }}
                    <!-- End Dark Table -->
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection