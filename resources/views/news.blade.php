@extends('seba')

@section('content')
 <div class="row">
   <div class="col-md-9 col-md-offset-1 col-xs-12" >
    <div class="list" id="pag_list"> 
     <a href="{{ action('HomeController@index')}}">首頁</a> &gt; 最新消息
     <p>
    </div>
   </div>
 </div>

 <div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-1 col-xs-12" >
      <img src="{{ asset('images\product_line.jpg') }}" class="img-responsive hidden-xs">
      <img src="{{ asset('images\news\title_4.jpg') }}" class="img-responsive hidden-xs">
        <div class="row">
          <div class="col-md-12 col-xs-12" >
            <table class="table table-striped" >
              <tbody>
                
                <!--  <td width="700" height="400" valign="top" background-image="{{ asset('images\news\bg1_ph55.jpg') }}"> -->
                @foreach($news as $item)
                  <tr>
                    <td><a href="{{ action('NewsController@show', [$item->id]) }}">{{ $item->date }} {{ $item->title }}</a></td>
                  </tr>
                @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
          <div class="col-md-12 col-md-offset-1 col-xs-12">
            <nav>
              {!! $news->render() !!}
            </nav> 
          </div>       
    </div>  
  </div>
 </div>
@stop

