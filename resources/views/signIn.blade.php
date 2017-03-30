@extends('layouts.master')
@section('content')
<div class="col-xs-12">
    <h4 class="gsb-titre">Connexion</h4>
    {!! Form::open(['url' => 'SignIn']) !!}
    <table border="0">
        <tr>
            <td style="padding-right:10px;">Nom d'utilisateur</td>
            <td><input type="text" placeholder="Nom d'utilisateur" name="username"/>
        </tr>
        <tr>
            <td style="padding-right:10px;">Mot de passe</td>
            <td><input type="password" placeholder="Mot de passe" name="password"/>
        </tr>
        <tr>
            <td><br><input type="submit" class="gsb-btn" name="Valider"/></td>
        </tr>
    </table>
    {!! Form::close() !!}
    @if(isset($erreur))
    <div class="gsb-error" style="float:left;">
        <span class="fa fa-minus-circle"></span> {{$erreur or ""}}
    </div>
    @endif
</div>
@stop
