@extends('layouts.app')

@section('content')



<h1 class="text-center">New Post</h1>
<div class="creat-ad blocks">		

	<div class="container ">
		<div class="panel panel-primary">
			<div class="panel-heading">New Post</div>
				<div class="panel-body">
					<div  class="row">
                      <div class="col-md-8">
                      {!! Form::open(array('route'=>'Post.store'))!!}
                        {{ csrf_field() }}
                        <!--  start name  -->
                        <div  class="col-md-12">

                            <div class="form-group form-group-lg">
                                <label class="col-sm-3 control-label">Name</label>
                                    <div class="col-sm-10 col-md-9">
                                        {!!Form::text('name',null,array('required','class'=>'form-control live','placeholder'=>'the  name  of  the  missing'))!!}

                                                    
                                    </div>
                            </div>
                        </div>
                        <!--  end name  -->

                        <!--  start age  -->
                        <div  class="col-md-12">
                            <div class="form-group form-group-lg">
                                <label class="col-sm-3 control-label">Age</label>
                                    <div class="col-sm-10 col-md-9">
                                        {!!Form::number('age',null,array('required','class'=>'form-control live','placeholder'=>'the  age  of  the  missing'))!!}

                                                    
                                    </div>
                            </div>
                        </div>    
                        <!--  end age  -->
                        <!--  start description  -->
                        <div  class="col-md-12">

                            <div class="form-group form-group-lg">
                                <label class="col-sm-3 control-label">Description</label>
                                    <div class="col-sm-10 col-md-9">
                                        {!!Form::text('description',null,array('required','class'=>'form-control live','placeholder'=>'the  description  of  the  missing'))!!}
                                    </div>
                            </div>
                        </div> 
                        <!--  end description  -->
                        <!--  start  	adders   -->
                        <div  class="col-md-12">

                            <div class="form-group form-group-lg">
                                <label class="col-sm-3 control-label"> 	Adders </label>
                                    <div class="col-sm-10 col-md-9">
                                        {!!Form::text('adders',null,array('required','class'=>'form-control live','placeholder'=>'the  description  of  the  missing'))!!}
                                    </div>
                            </div>
                        </div>    
                        <!--  end  	adders   -->
                        <!--  start  	country   -->
                        <div  class="col-md-12">

                            <div class="form-group form-group-lg">
                                <label class="col-sm-3 control-label"> 	Country</label>
                                    <div class="col-sm-10 col-md-9">
                                        {!!Form::text('country',null,array('required','class'=>'form-control live','placeholder'=>'the  country  of  the  missing'))!!}
                                    </div>
                            </div>
                        </div>

                        <!--  start  	gnader   -->
                        <div  class="col-md-12">
                            <div class="form-group form-group-lg">
                                <label class="col-sm-3 control-label"> 	Gnader</label>
                                    <div class="col-sm-10 col-md-9">
                                        {!! Form::select('gnader', array('Man' => 'Man', 'Woman' => 'Woman'), 'Man') !!}  
                                    </div>
                            </div>
                        </div>   
                        <!--  end  	gnader -->

                        <!--  start  	Lostrelationship   -->
                        <div  class="col-md-12">

                            <div class="form-group form-group-lg ">
                            <label class="col-sm-2 control-label">The Lostrelationship</label>

                                    <div class="col-sm-10 col-md-9 ">
                                        {!! Form::select('lost_relationship', array('Father' => 'Father', 'Mothre' => 'Mothre', 'Brother' => 'Brother','Sister'=>'Sister',), 'Father') !!}  
                                    </div>
                            </div>
                        </div>

                        <!--  end  	Lostrelationship -->
                                    
                      </div>
                    </div>
                </div>    
            </div>  
        </div>            
    </div>
                    

</div>                    
@endsection