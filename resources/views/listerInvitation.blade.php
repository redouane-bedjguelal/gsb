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
        @foreach($lesInvitations as $uneInvit)
        <tr>   
            <td>{{$uneInvit->lib_type_praticien}}</td>
            <td>{{$uneInvit->nom_praticien}}</td>
            <td>{{$uneInvit->id_activite_compl}}</td>
            <td style="text-align:center;"><a href="{{ url('/modifierInvit') }}/{{$uneInvit->id_activite_compl}}/{{$uneInvit->id_praticien}}">
                    <span class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="Modifier"></span></a></td>
            <td style="text-align:center;">
                <a class="glyphicon glyphicon-remove" data-toggle="tooltip" data-placement="top" title="Supprimer" href="#"
                   onclick="javascript:if (confirm('Suppression confirmée ?')){ window.location ='{{ url('/supprimerFrais')}}/'; }">
                </a>
            </td>                    
        </tr>
        @endforeach
    </table>
</div>
@stop