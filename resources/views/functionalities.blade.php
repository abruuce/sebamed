@extends('seba')

@section('content')
  <div class="row">
    <div class="container">
     <div class="col-md-9 col-md-offset-1 col-xs-12" >
     	<p><img src="{{ asset('images\news\title3.jpg') }}"></p>  
		  @foreach($functionalities as $functionality)
		    <a href="{{ action('FunctionalityController@show', [$functionality->id]) }}">
		    <img src="{{ asset('images/functionalities/'.$functionality->image1) }}">
		    </a>
		  @endforeach
	 </div>
    </div>
  </div>	    
@stop