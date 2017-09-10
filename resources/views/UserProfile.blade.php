@extends('layouts.app')

@section('content')
    {{$user['name']}}

<h1 class="text-center">MyProfile </h1>
<div class="information blocks">		
	<div class="container ">
		<div class="panel panel-primary">
			<div class="panel-heading">MyInformation</div>
				<div class="panel-body">
                    <div class="text-center">
                        <img  class="img-responsive img-thumbnail  
                        img-circle text-center " src="/{{$user['image']}}" alt="" 
                        height="100" width="100"/>
                    </div>    
                    <div>   
                        <!-- ##### -->
                        <ul class="list-unstyled">	
						<li>
							<i class="fa fa-unlock-alt fa-fw"></i>
							Name:{{$user['name']}}
						</li>

						<li>
							<i class="fa  fa-mobile fa-fw"></i>
							Mobile:{{$user['user_phone']}} 
						</li>

						<li>
							<i class="fa fa-home fa-fw"></i>
                            home:{{$user['user_city']}} 
						</li>

						<li>
							<i class="fa fa-location-arrow   fa-spinner fa-spin fa-fw"></i>
                            Addres:{{$user['address']}} 
                                                        
						</li>


						<li>
							<i class="fa fa-envelope-o fa-fw"></i>
                            email:{{$user['email']}} 

						</li>

						
						</li>

						<li>
							<i class="fa fa-calendar fa-fw"></i>
                            Created at:{{$user['created_at']}} 
						</li>

						
					</ul>
                        <!-- ######## -->
                    </div>
                </div>
        </div>        
    </div>
<div>
@endsection