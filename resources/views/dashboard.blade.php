@extends('layouts.app')

@section('content')
    <dashboard :jobs="JSON.parse('{{ json_encode($jobs) }}')"></dashboard>
@endsection