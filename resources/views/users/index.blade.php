@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Utilisateurs</h1>
            <a href="{{ route('users.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i>
                Créer un utilisateur
            </a>
        </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Liste des utilisateurs</h6>
                </div>
                <div class="card-body">
                    <div>
                        @if (session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fa fa-check-circle"></i> {{ session('message') }}
                        </div>
                        @endif
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#Id</th>
                                <th scope="col">Nom d'utilisateur</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user )
                                    <tr>
                                        <th scope="row">{{ $user->id }}</th>
                                        <td>{{$user->username}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>editer/supprimer</td>
                                    </tr>
                                @endforeach
                            </tbody>
                          </table>
                    </div>
                    
                </div>
            </div>
        </div>
@endsection
