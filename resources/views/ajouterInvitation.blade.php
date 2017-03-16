@extends('layouts.master')
@section('content')
{!! Form::open(['url' => 'validerFrais']) !!}
<div class="col-xs-12">
    <h4 class="gsb-titre">Liste</h4>
    <table border="0">
        <input type="hidden" name="id_frais" value=""/>
        <tr>
            <td>Activité complémentaire</td>
            <td>
                <select name="activite" required>
                    <option>Oui</option>
                    <option>Oui</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Praticien</td>
            <td>
                <select name="praticien" required>
                    <option>Oui</option>
                    <option>Oui</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Spécialite</td>
            <td><input type="text" value=""/></td>
        </tr>
        <tr>
            <td>
                <button type="submit" class="btn btn-default btn-primary">
                    <span class="glyphicon glyphicon-ok"></span> Valider
                </button>
                <button type="button" class="btn btn-default btn-primary" 
                        onclick="javascript: window.location = '';">
                    <span class="glyphicon glyphicon-remove"></span> Annuler</button>
            </td>
        </tr>
    </table>
</div>
@stop
