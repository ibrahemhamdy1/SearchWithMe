@extends('layouts.app')

@section('content')


<h1 class="text-center">New Post</h1>
<div class="creat-ad blocks">		

	<div class="container  ">
		<div class="panel panel-primary">
			<div class="panel-heading">New Post</div>
				<div class="panel-body">
					<div  class="row ">
                      <div class="col-md-12">
                      {!! Form::open(array('route'=>'Post.store','files'=>true,),array('action'=>['PostController@store']))!!}
                        {{ csrf_field() }}
                        <!--  start name  -->
                        <div  class="col-md-12">

                            <div class="form-group form-group-lg">
                                <label class="col-sm-3 control-label margin-top">Name</label>
                                    <div class="col-sm-10 col-md-9">
                                        {!!Form::text('name',null,array('required','class'=>'form-control live','placeholder'=>'the  name  of  the  missing'))!!}

                                                    
                                    </div>
                            </div>
                        </div>
                        <!--  end name  -->

                        <!--  start age  -->
                        <div  class="col-md-12">
                            <div class="form-group form-group-lg">
                                <label class="col-sm-3 control-label margin-top">Age</label>
                                    <div class="col-sm-10 col-md-9">
                                        {!!Form::number('age',null,array('required','class'=>'form-control live','placeholder'=>'the  age  of  the  missing'))!!}

                                                    
                                    </div>
                            </div>
                        </div>    
                        <!--  end age  -->
                        <!--  start description  -->
                        <div  class="col-md-12">

                            <div class="form-group form-group-lg">
                                <label class="col-sm-3 control-label margin-top">Description</label>
                                    <div class="col-sm-10 col-md-9">
                                        {!!Form::text('description',null,array('required','class'=>'form-control live','placeholder'=>'the  description  of  the  missing'))!!}
                                    </div>
                            </div>
                        </div> 
                        <!--  end description  -->
                        <!--  start  	adders   -->
                        <div  class="col-md-12">

                            <div class="form-group form-group-lg">
                                <label class="col-sm-3 control-label margin-top"> 	Adders </label>
                                    <div class="col-sm-10 col-md-9">
                                        {!!Form::text('adders',null,array('required','class'=>'form-control live','placeholder'=>'the  description  of  the  missing'))!!}
                                    </div>
                            </div>
                        </div>    
                        <!--  end  	adders   -->
                        <!--  start  	country   -->
                        <div  class="col-md-12">
                            <div class="form-group form-group-lg">
                                <label class="col-sm-3 control-label margin-top"> 	Country</label>
                                    <div class="col-sm-10 col-md-9">
                                        {!!Form::text('country',null,array('required','class'=>'form-control live','placeholder'=>'the  country  of  the  missing'))!!}
                                    </div>
                            </div>
                        </div>
                        <!--  end  	country   -->

                        <!--  start  	gnader   -->
                        <div  class="col-md-12">
                            <div class="form-group form-group-lg">
                                <label class="col-sm-3 control-label margin-top"> 	Gnader</label>
                                    <div class="col-sm-10 col-md-9">
                                        {!! Form::select('gnader', array('Man' => 'Man', 'Woman' => 'Woman'), 'Man') !!}  
                                    </div>
                            </div>
                        </div>   
                        <!--  end  	gnader -->

                        <!--  start  	Lostrelationship   -->
                        <div  class="col-md-12">

                            <div class="form-group form-group-lg ">
                            <label class="col-sm-3 control-label margin-top">The Lostrelationship</label>

                                    <div class="col-sm-10 col-md-9 ">
                                        {!! Form::select('lost_relationship', array('Father' => 'Father', 'Mothre' => 'Mothre', 'Brother' => 'Brother','Sister'=>'Sister',), 'Father') !!}  
                                    </div>
                            </div>
                        </div>

                        <!--  end  	Lostrelationship -->
                        <!--  start  	Categories   -->
                        <div  class="col-md-12">

                            <div class="form-group form-group-lg ">
                            <label class="col-sm-3 control-label margin-top">Categories</label>

                                    <div class="col-sm-10 col-md-9 ">
                                        {!! Form::select('Categorie', array('1' => 'Unidentified Person', '2' => 'Missing Person'), '2') !!}  
                                    </div>
                            </div>
                        </div>

                        <!--  end  	Lostrelationship -->
                        <!--  start  	 	tags    -->
                        <div  class="col-md-12">
                            <div class="form-group form-group-lg">
                                <label class="col-sm-3 control-label margin-top"> 	 	Tags </label>
                                    <div class="col-sm-10 col-md-9">
                                        {!!Form::text('tags',null,array('class'=>'form-control live','placeholder'=>'the   	tags '))!!}
                                    </div>
                            </div>
                        </div>
                        <!--  end  	 	tags    -->
                        <!--  start  	 	image    -->
                        <div  class="col-md-12">
                            
                                <label class="col-sm-3 control-label margin-top"> 	 	Image </label>
                                    <div class="col-sm-10 col-md-9">
                                    {!! Form::file('image')!!}
                                    </div>
                            
                        </div>
                        <!--  end  	image  -->
                        <div class="text-center">
                        {!! Form::submit('Submit',array('class'=>'btn  btn-primary'))!!}
                        </div>
                      </div>
                    </div>
                </div>    
            </div>  
        </div>            
    </div>
                    

</div>                    
@endsection