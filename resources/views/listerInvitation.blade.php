@extends('layouts.master')
@section('content')
<div class="col-xs-12">
    <h4 class="gsb-titre">Liste</h4>
    <table class="table table-bordered table-striped table-responsive">
        <thead>
            <tr>
                <th width="40%">Type Praticien</th> 
                <th width="30%">Praticien</th> 
                <th width="30%">Activité complémentaire</th>  
                <th width="10%">Modifier</th>
                <th width="10%">Supprimer</th> 
            </tr>
        </thead>
        @foreach($lesInvitations as $uneInvit)
        <tr>   
            <td>{{$uneInvit->lib_type_praticien}}</td>
            <td>{{$uneInvit->nom_praticien}}</td>
            <td>{{$uneInvit->date_activite}} - {{$uneInvit->motif_activite}}</td>
            <td style="text-align:center;"><a href="{{ url('/modifierInvit') }}/{{$uneInvit->id_activite_compl}}/{{$uneInvit->id_praticien}}">
                    <span class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="Modifier"></span></a></td>
            <td style="text-align:center;">
                <a class="fa fa-remove" data-toggle="tooltip" data-placement="top" title="Supprimer" href="#"
                   onclick="javascript:if (confirm('Suppression confirmée ?')){ window.location ='{{ url('/deleteInvite')}}/{{$uneInvit->id_activite_compl}}/{{$uneInvit->id_praticien}}'; }">
                </a>
            </td>                    
        </tr>
        @endforeach
    </table>
</div>
@stop