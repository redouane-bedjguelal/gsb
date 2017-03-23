@extends('layouts.master')
@section('content')
<div class="col-xs-12">
    <h4 class="gsb-color">Bienvenue, {{Session::get('nom')}} {{Session::get('prenom')}}</h4>
</div>
@stop