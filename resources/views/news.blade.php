@extends('seba')

@section('content')
 <div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-1 col-xs-12" >
      <a> <img src="{{ asset('images\news\title_4.jpg') }}"></a>
        <div class="row">
          <div class="col-md-12 col-md-offset-1 col-xs-12" >
            <table class="table table-striped">
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
          <div class="col-md-12 col-md-offset-2 col-xs-12">
            <nav>
              {!! $news->render() !!}
            </nav> 
          </div>       
    </div>  
  </div>
 </div>
@stop

