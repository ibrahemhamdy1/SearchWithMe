@extends('layouts.app')

@section('content')
{{$cat['name']}}
-----------------------

@foreach($post as $p)
{{$p->categorie->id}}
@endforeach
@endsection
