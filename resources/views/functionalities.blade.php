@extends('seba')

@section('content')
 <div class="row">
     <div class="col-md-9 col-md-offset-1 col-xs-12" >
      <div class="list" id="pag_list"> 
        <a href="{{ action('HomeController@index')}}">首頁</a> &gt; <a href="{{ action('FunctionalityController@index')}}">產品櫥窗</a>&gt; 依功能區分
        <p>
      </div>
   </div>   
  </div>
  
    <div class="row">
     <div class="col-md-9 col-md-offset-1 col-xs-12" >
     	<img src="{{ asset('images\product_line.jpg') }}" class="img-responsive">
     	<p><img src="{{ asset('images\news\title3.jpg') }}" class="img-responsive hidden-xs"></p>  
		  @foreach($functionalities as $functionality)
		    <a href="{{ action('FunctionalityController@show', [$functionality->id]) }}">
		    <img src="{{ asset('images/functionalities/'.$functionality->image1) }}" >
		    </a>
		  @endforeach
	 </div>
    </div>
@stop