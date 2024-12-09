@extends('layouts.template')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <nav>
        <a href="{{route('article.create')}}" class="btn btn-primary">Créer un article</a>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Liste des articles</h5>

                    <!-- Dark Table -->
                    <table class="table table-dark">
                        @if (@session('success_message'))
                            <div class="alert alert_success">
                                {{session('success_message')}}   
                            </div>
                        @endif
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Contenu</th>
                                <th>Catégorie</th>
                                <th>Auteur</th>
                                <th>Image</th>
                                <th>Edition</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                                <tr>
                                    <td>{{ substr($article->title, 0, 15)}}...</td>
                                    <td>{{ substr($article->content, 0, 30) }}...</td>
                                    <td>{{ $article->categorie->name }}</td>
                                    <td>{{ $article->auteur }}</td>
                                    <td> <img src="images/{{$article->image}}" style="border-radius: 100%" height="50" width="50" alt=""></td>
                                    <td><a href="{{route('article.edit',$article->id)}}" class="btn btn-primary">Editer</a></td>
                                </tr>
                            @endforeach 
                        </tbody>
                    </table>
                    {{ $articles->links() }}
                    <!-- End Dark Table -->
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection