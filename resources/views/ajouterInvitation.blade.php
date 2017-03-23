@extends('layouts.master')
@section('content')
@if(isset($uneInvitation))
{!! Form::open(['url' => 'editInvite']) !!}
@else
{!! Form::open(['url' => 'addInvite']) !!}
@endif
<div class="col-xs-12">
    <h4 class="gsb-color">Liste</h4>
    <table border="0">
        <tr>
            <td>Activité complémentaire</td>
            <td>
                @if(isset($uneInvitation))
                <select name="activite" required disabled>
                @else
                <select name="activite" required>
                @endif
                    @foreach ($lesActivites as $uneActivite)
                    <option value='{{$uneActivite->id_activite_compl}}'>{{$uneActivite->date_activite or 0}} - {{$uneActivite->motif_activite or 0}}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td>Praticien</td>
            <td>
                @if(isset($uneInvitation))
                <select name="praticien" required disabled>
                @else
                <select name="praticien" required>
                @endif
                    @foreach ($lesPraticiens as $unPraticien)
                    <option value='{{$unPraticien->id_praticien}}'>{{$unPraticien->nom_praticien or 0}}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td>Spécialite</td>
            <td><input type="text" name="specialiste" value="" size="1" maxlength="1"/></td>
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
