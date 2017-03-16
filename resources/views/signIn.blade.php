@extends('layouts.master')
@section('content')
<div class="col-xs-12">
    <h4 class="gsb-titre">Connexion</h4>
    <table border="0">
        <tr>
            <td style="padding-right:10px;">Nom d'utilisateur</td>
            <td><input type="text" placeholder="Nom d'utilisateur" name="username"/>
        </tr>
        <tr>
            <td style="padding-right:10px;">Mot de passe</td>
            <td><input type="text" placeholder="Mot de passe" name="password"/>
        </tr>
        <tr>
            <td><input type="submit" class="gsb-btn" name="Valider"/></td>
        </tr>
    </table>
</div>
@stop