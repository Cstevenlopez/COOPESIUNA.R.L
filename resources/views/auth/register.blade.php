@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">{{ __('Register') }}</div>

<div class="card-body">
<form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
    @csrf

<div class="form-group row">
    <label for="id_usuario" class="col-md-4 col-form-label text-md-right">{{ __('Id de usuario') }}</label>
    <div class="col-md-6">
        <input id="id_usuario" type="text" class="form-control @error('id_usuario ') is-invalid @enderror" name="id_usuario" value="{{ old('id_usuario') }}" required autocomplete="id_usuario" autofocus>
        @error('id_usuario')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre y apellido') }}</label>
<div class="col-md-6">
    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
</div>

<div class="form-group row">
<label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('Foto') }}</label>
<div class="col-md-6">
    <input id="foto" class="file" type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" value="{{ old('foto') }}" required autocomplete="foto" autofocus>
    @error('foto')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
</div>

    <!-- SELECT PERFIL -->
<div class="form-group row">
    @error('perfil')
    <small style="background: #00ffff;" class="text-danger">*{{$message}}</small>
    @enderror
    <label for="perfil" class="col-md-4 col-form-label text-md-right">{{ __('Perfil de usuario') }}</label>
    <select id="perfil" class="form-control @error('perfil') is-invalid @enderror" style="width: 345px;" name="perfil" value="{{ old('perfil') }}" required autocomplete="perfil" autofocus>
    <option selected >Elija un perfil</option>
    <option value="Administrador">Administrador</option>
    <option value="Tecnico">Tecnico</option>
    </select>
    <!-- FIN DEL SELECT -->
    </div>

<div class="form-group row">
<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Dirección E-Mail') }}</label>

<div class="col-md-6">
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
</div>

<div class="form-group row">
    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

    <div class="form-group row">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Password') }}</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
        </div>
    </div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection
