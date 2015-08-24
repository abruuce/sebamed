@extends('seba')

@section('content')
    <!--
    <div class="row">
        <div class="col-md-10 col-md-offset-1 col-xs-12">
            <div class="list" id="pag_list"> 
                <a href="{{ action('HomeController@index')}}">首頁</a> &gt; 網路商店
                <p>
            </div>
        </div>   
    </div>
    -->
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-xs-12" align="center">
            <img src="{{ asset('images\video\video1.jpg') }}" class="img-responsive hidden-xs">
            <img src="{{ asset('images\product_line.jpg') }}" class="img-responsive">
        </div>    
        <div class="col-md-8 col-md-offset-2 col-xs-12">
            <div class="row">
                @foreach($videos as $store)
                    <!-- <div class="col-md-4 col-sm-6 col-xs-6" style="text-align:center"> -->
                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <a href="{{ $store->url }}">            
                                <img src="{{ asset('images/video/'.$store->pname) }}"  width="150" height="100" border="0" align="left">
                            </a>
                        </div>    
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <a href="{{ $store->url }}">            
                                {{ $store->title }}
                            </a>
                            <p>
                        </div>    
                    <!-- <img src="{{ asset('images/video/'.$store->pict ) }}" > -->
                    </div>
                @endforeach
            </div>
        </div> 
    </div> 
    <br>
    <br>
    <br>
 


@stop