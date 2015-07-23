@extends('seba')

@section('content')
    <div class="row">
    
      <div class="col-md-11 col-md-offset-1 col-xs-12" >
      	<a> <img  src="{{ asset('images\news\title_4.jpg') }}" ></a>
          <a><div class="col-md-11 col-md-offset-1 col-xs-12" style="font-weight:bold"><font size="5"> 
             {!! $news->title !!}</font>
           </div></a>
            <div class="col-md-10 col-md-offset-2 col-xs-12">{!! $news->content !!}
            </div>
            <!--  <div class="col-md-12 col-md-offset-2 col-xs-12">
              	<img class="img-responsive"> {!! $news->content !!}
              </div>
            -->
      </div>
    
    </div>
    
@stop