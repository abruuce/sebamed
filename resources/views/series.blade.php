@extends('seba')

@section('content')
  <div class="row">
     <div class="col-md-9 col-md-offset-1 col-xs-12" >
      <div class="list" id="pag_list"> 
        <a href="{{ action('HomeController@index')}}">首頁</a> &gt; 產品櫥窗 &gt; 依系列區分
        <p>
      </div>
   </div>   
  </div>

   <div class="row">
     <div class="col-md-9 col-md-offset-1 col-xs-12" >
      <img src="{{ asset('images\product_line.jpg') }}" class="img-responsive">
     	<p><img src="{{ asset('images\news\title3.jpg') }}" class="img-responsive hidden-xs" ></p>
       @foreach($series as $item)
         <a href="{{ action('SeriesController@show', [$item->id]) }}">
            <img src="{{ asset('images/series/'.$item->image) }}" >
         </a>
       @endforeach
     </div>
    </div>
  
  
@stop