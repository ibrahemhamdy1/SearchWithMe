@extends('layouts.app')

@section('content')




<h1 class="text-center">The owner</h1>
<div class="information blocks">		

	<div class="container ">
		<div class="panel panel-primary text-center">

			<div class="panel-heading"></div>
			<!--image -->
			<div class="col-md-4 image">
				<div  class="thumbnail">
					@if(!empty($user['image']))		
					<img  class="img-responsive  center-block img"  src="/{{$user['image']}}" alt="" max-hight="30px"/>
                    @else 
                    <img class="img-responsive img" src="{{ URL::to('/') }}/images/user/image.png" />
                    @endif					
				</div>
			</div>
			
				<div class="panel-body text-center">
                        <ul class="list-unstyled text-center">	
                            <li>
                                <i class="fa fa-unlock-alt fa-fw"></i>
                                Name: {{$user['name']}}
                            </li>

                            <li>
                                <i class="fa  fa-mobile fa-fw"></i>
                                Moblie: {{$user['user_phone']}}						</li>
                            </li>

                            <li>
                                <i class="fa fa-home fa-fw"></i>
                                City: {{$user['user_city']}}	
                                </li>

                            

                            
                            

                            
                            
                        </ul>
                </div>
        </div>
    </div>
</div>



<div id="myad" class="myads">		

	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">Owner Ads</div>
				<div class="panel-body">
                <div class="row">
                @foreach($posts as $p)
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail item-box">
                        <span class="approve-status img-responsive img-thumbnail center-block">NOtfound</span> 
                        <div class="caption"> 
                        <span class="age-Tag"> 18 </span>
                        <img  class="  img" src="{{$p['image']}}" alt=""  width="219.63px" max-height="425px"/>
                        <h3><a href="/Post/{{$p['id']}}">{{$p['name']}}</a></h3>
                        <p>{{$p['description']}}</p>
                            <div class="date">Add_Date</div>
                        </div>
                    </div>
                </div>
                @endforeach
            
            
            </div>	
                </div>    
            </div>         
        </div>            
    </div>                
</div>                    
@endsection