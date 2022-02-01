@extends('layouts.app')

@section('content')

<b-container>
  <b-row align-h="center">
    <b-col></b-col>
    <b-col cols="8">
      <b-card title="Registro" class="my-3">
        <b-form method="POST" action="{{ route('register') }}">
          @csrf

          @if ($errors->any())
            <b-alert show variant="danger">
              <ul class="mb-0">
                @foreach ($errors->all() as $error)
                <li>{{ $error }} </li>
                @endforeach
              </ul>
            </b-alert>
          @else
            <b-alert show>
              Por favor ingresa tus datos
            </b-alert>
          @endif

          <b-form-group
            label="Nombre:"
            label-for="name">
            <b-form-input type="text"
              id="name" name="name"
              value="{{ old('name') }}" 
              required autocomplete="name" autofocus             
              placeholder="Ingresa tu nombre">
            </b-form-input>
          </b-form-group>

          <b-form-group
            label="Correo electónico:"
            label-for="email"
            description="Nunca compartiremos tu correo con nadie más.">
            <b-form-input type="email"
              id="email" name="email"
              value="{{ old('email') }}" 
              required autocomplete="email"             
              placeholder="Ingresa tu correo electrónico">
            </b-form-input>
          </b-form-group>

          <b-form-group
            label="Contraseña:"
            label-for="password">
            <b-form-input type="password"
              id="password" name="password"
              required autocomplete="new-password">
            </b-form-input>
          </b-form-group>

          <b-form-group
            label="Confirmar contraseña:"
            label-for="password-confirm">
            <b-form-input type="password"
              id="password-confirm" name="password_confirmation" 
              required autocomplete="new-password">
            </b-form-input>
          </b-form-group>

          <b-button type="submit" variant="primary">
            Registrarse
          </b-button>

          <b-button href="{{ route('login') }}" variant="link">
            ¿Ya te has registrado?
          </b-button>           
        </b-form>
      </b-card>     
    </b-col>
    <b-col></b-col>
  </b-row>
</b-container>             
@endsection
