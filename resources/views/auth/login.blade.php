@extends('layouts.principal')
@section('conteudo')
        <h2 id="jogador" class="titulo"> Jogador </h2>
        
        <form class="form" action="{{route('login')}}" method="post">
            @csrf

            <div class="inline">
                Email <input required="" type="email" class="campos" size="10" type="text" name="email" >

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div id="form_senha">
                Senha <input required="" class="campos" id="" size="10" type="password" name="password" >

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

                <button id="botão" type="submit" name="button">Logar</button>
            </div>
        </form>
@stop