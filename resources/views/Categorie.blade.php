@extends('layouts.app')

@section('content')
{{$cat['name']}}
-----------------------

@foreach($post as $p)
{{$p['name']}}
@endforeach
@endsection
