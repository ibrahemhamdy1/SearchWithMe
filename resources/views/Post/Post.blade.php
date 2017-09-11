@extends('layouts.app')

@section('content')
<div class="contaner itempage">
    <div class="row">
            <div class="col-md-3 ">
                <img  class="img-responsive img-thumbnail center-block" src="/{{$post['image']}}" alt="" height="252.5" width="300.34"/>
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
				@if($post['user_id']==$user_id)
				<li class='edit-btn'>
				<a href="{{$post->id}}/edit"><span class="btn  btn-success">edit</span></a>

				</li>
				@endif
		    </ul>



		</div>
    </div>

	<hr class="custom-hr">

		<div  class="row">
			<div class="col-md-offset-3">
				<div class="add-comment">
					<h3>AddYourComment </h3>
					{!! Form::open(array('route'=>'Comment.store'))!!}
					{{ csrf_field() }}
						{!!Form::textarea('comment',null,array('required','class'=>'form-control','placeholder'=>'comment'))!!}
						{!! Form::hidden('post_id', $post['id'] )!!}
						{!! Form::submit('AddComment',array('class'=>'btn  btn-primary'))!!}
					{!! Form::close() !!}
				</div>
			</div>	
		</div>		
	<hr class="custom-hr">

	<div  class="comment-box ">
		<div class="row">
			
				@if(!empty($comment))
					@foreach($comment as $c)
						@if(!empty($c->user->image&&$c['comment']))

						<div class="col-sm-2 text-center">

						<a href="/User/{{$c->user->id}}">	<img  class="img-responsive img-thumbnail   img-circle" src="/{{$c->user->image}}" alt="" max-hight="40px"/></a>
							
								

						</div>

						<div class="col-sm-10 lead">
							{{$c['comment']}}
						</div>
						@endif
					
					@endforeach
				@endif
			
		</div>		
	</div>	

<!-- end  -->

</div>
@endsection