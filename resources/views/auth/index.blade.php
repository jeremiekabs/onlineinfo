@extends('layouts.template')

@section('content')

<main id="main" class="main">

    <section class="section">
      <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Liste des admins</h5>

                    <!-- Dark Table -->
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Accès</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if ($user->statut == 0)
                                        <a href="{{ route('user.update', ['id' => $user->id, 'statut' => 1]) }}" class="btn btn-primary">Valider</a>
                                    @else
                                        <a href="{{ route('user.update', ['id' => $user->id, 'statut' => 0]) }}" class="btn btn-secondary">Invalider</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $users->links() }}
                    <!-- End Dark Table -->
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection