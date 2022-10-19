@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Editer un utilisateur</h1>
            <a href="{{ route('users.index') }}" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fa-solid fa-arrow-left fa-sm text-white-50"></i>
                Retour
            </a>

        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h6 class="text-uppercase text-dark text-hover-primary font-weight-bold">
                            {{ __('Formulaire de modification') }}                        
                        </h6>
                    <div class=" d-sm-inline-block">
                        <form action="{{route('users.destroy', $user->id)}}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class=" btn btn-sm btn-danger shadow-sm">
                                <i class="fa-solid fa-trash fa-sm text-white-50"></i>
                                {{ __('Supprimer'), $user->username }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">

                                <div class="card-body">
                                    <form method="POST" action="{{ route('users.update', $user->id) }}">
                                        @csrf
                                        @method('PUT')

                                        <div class="row mb-3">
                                            <label for="username"
                                                class="col-md-4 col-form-label text-md-end">{{ __('Nom d\'utilisateur') }}</label>

                                            <div class="col-md-6">
                                                <input id="username" type="text"
                                                    class="form-control @error('name') is-invalid @enderror" name="username"
                                                    value="{{ old('username', $user->username) }}" required autocomplete="username" autofocus>

                                                @error('username')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="first_name"
                                                class="col-md-4 col-form-label text-md-end">{{ __('Nom') }}</label>

                                            <div class="col-md-6">
                                                <input id="first_name" type="text"
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    name="first_name" value="{{ old('first_name', $user->first_name) }}" required
                                                    autocomplete="first_name" autofocus>

                                                @error('first_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="last_name"
                                                class="col-md-4 col-form-label text-md-end">{{ __('Prenom') }}</label>

                                            <div class="col-md-6">
                                                <input id="last_name" type="text"
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    name="last_name" value="{{ old('last_name', $user->last_name) }}" required
                                                    autocomplete="last_name" autofocus>

                                                @error('last_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="email"
                                                class="col-md-4 col-form-label text-md-end">{{ __('Adresse Email') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                                    value="{{ old('email', $user->email) }}" required autocomplete="email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-sm btn-primary shadow-sm">
                                                    <i class="fa-solid fa-refresh fa-sm text-white-50"></i>
                                                    {{ __('Modifier') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
