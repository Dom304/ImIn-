@extends('layouts.app')

@section('content')
<dashboard :jobs="{{ json_encode($jobs) }}"></dashboard>
@endsection