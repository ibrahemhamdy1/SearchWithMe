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
                            Name: <h3>{{$user['name']}}</h3>
						</li>

						<li>
							<i class="fa  fa-mobile fa-fw"></i>
                             Moblie: <h3>{{$user['user_phone']}}</h3>						</li>

                        </li>
							<i class="fa fa-home fa-fw"></i>
                            city: <h3>{{$user['user_city']}}</h3>	
                            </li>
						</li>

						

						
						
						</li>

						
						
					</ul>
</div>
</div>
</div>
</div>
@endsection