@extends('layouts.master')
@section('content')
<div class="col-xs-12">
    <h4 class="gsb-titre">Liste</h4>
    <table class="table table-bordered table-striped table-responsive">
        <thead>
            <tr>
                <th>Type Praticien</th> 
                <th>Praticien</th> 
                <th>Activité complémentaire</th>  
                <th>Modifier</th>
                <th>Supprimer</th> 
            </tr>
        </thead>
        <!--@foreach($mesFrais as $unFrais)-->
        <tr>   
            <td> <!--{{ $unFrais->anneemois }}--> </td>
            <td style="text-align:center;"><a href="{{ url('/modifierFrais') }}/{{ $unFrais->id_frais }}">
                    <span class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="Modifier"></span></a></td>
            <td style="text-align:center;">
                <a class="glyphicon glyphicon-remove" data-toggle="tooltip" data-placement="top" title="Supprimer" href="#"
                   onclick="javascript:if (confirm('Suppression confirmée ?')){ window.location ='{{ url('/supprimerFrais')}}/'; }">
                </a>
            </td>                    
        </tr>
        <!--@endforeach-->
    </table>
</div>
@stop