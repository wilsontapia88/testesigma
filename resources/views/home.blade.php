@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Rol</th>
                            <th scope="col">mail</th>
                            <th scope="col">acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($users as $user)
                            <tr>
                              <th scope="row">1</th>
                              <td>{{$user->name}}</td>
                              <td>administrador</td>
                              <td>{{$user->email}}</td>
                              <td><a href="#">Editar</a></td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
