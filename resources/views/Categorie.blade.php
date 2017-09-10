@extends('layouts.app')

@section('content')

<div class="container nav-margin ">
<h1 class="text-center">
{{$cat['name']}}
</h1>
<div class="row">
    @foreach($post as $p)
    <div class="col-sm-6 col-md-3">
        <div class="thumbnail item-box">
            <span class="approve-status img-responsive img-thumbnail center-block">NOtfound</span> 
            <div class="caption"> 
            <span class="age-Tag"> {{$p['age']}}</span>
            <img  class="  img" src="/{{$p['image']}}" alt=""  width="219.63px" max-height="425px"/>
            <h3><a href="/Post/{{$p['id']}}">{{$p['name']}}</a></h3>
            <p>{{$p['description']}}</p>
                <div class="date">Add_Date</div>
            </div>
        </div>
    </div>
    @endforeach


    {{ $post->links() }}
</div>	
</div>

@endsection
