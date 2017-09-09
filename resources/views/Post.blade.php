@extends('layouts.app')

@section('content')
<div class="contaner itempage">
    <div class="row">
            <div class="col-md-3 ">
                <img  class="img-responsive img-thumbnail center-block" src="{{$post['image']}}" alt="" height="252.5" width="300.34"/>
            </div>
            <div class="col-md-9 item-info  ">
			<h2>{{$post['name']}}</h2>
			<p>{{$post['description']}}</p>
		    <ul class="list-unstyled">

				<li>
					<i class="fa fa-calendar fa-fw"></i>
					<span>AddDate:</span>{{$post['created_at']}}
				</li>
				<li>
					<i class="fa fa-birthday-cake fa-fw"></i>
					<span>Age:</span>{{$post['age']}}
				</li>
				<li>
					<i class="fa fa-user fa-fw"></i>
					<span>gander</span>{{$post['gnader']}}
				</li>
				<li>
					<i class="fa fa-user fa-fw"></i>
					<span>LostRelationship</span> {{$post['lost_relationship']}}
				</li>
				

				<li>
					<i class="fa fa-building fa-fw"></i>
					<span>Addres:</span>{{$post['adders']}}
				</li>

				<li>
					<i class="fa fa-building fa-fw"></i>
					<span> 	Country: </span>{{$post['country']}}
				</li> 

				<li>
				

				<li>
					<i class="fa fa-tags fa-fw"></i>
					<span>Category:</span><a href="/Categorie/{{$post->categorie->id}}">{{$post->categorie->name}}</a>
				</li>
				<li>
					<i class="fa fa-user fa-fw"></i>
					<span>AddBy:</span><a href="/User/{{$post->user->id}}">{{$post->user->name}}</a>
				</li>
				
					
				<li class='tags-items'>
					<i class="fa fa-user fa-fw"></i>
					<span >Tags</span> {{$post['tags']}}
					


							
				</li>
		    </ul>



		</div>
    </div>
</div>
@endsection