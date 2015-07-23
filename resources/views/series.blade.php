@extends('seba')

@section('content')
  <div class="container"> 
   <div class="row">
     <div class="col-md-9 col-md-offset-1 col-sm-3 col-xs-12" >
     	<p><img src="{{ asset('images\news\title3.jpg') }}"></p>
       @foreach($series as $item)
         <a href="{{ action('SeriesController@show', [$item->id]) }}">
            <img src="{{ asset('images/series/'.$item->image) }}">
         </a>
       @endforeach
     </div>
    </div>
   </div>
  
@stop