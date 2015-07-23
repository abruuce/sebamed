@extends('seba')

@section('content')
{{ $series->series_banner }}
  <div class="container">
    <div class="row">
     <div class="col-md-9 col-md-offset-1 col-xs-12" >
     	<p><img src="{{ asset('images\news\title3.jpg') }}"></p>
          @foreach($products as $key => $product)
            <a href="#" data-toggle="modal" data-target="#myModal_<?=$key;?>">
              <img src="{{ asset('images/products/small/'.$product->image1) }}"  >
            </a>
              <a class="btn btn-default" data-toggle="modal" data-target="#myModal_<?=$key;?>">{!! $product->name !!}</a>
	        <!-- Modal -->
	        <div class="modal fade" id="myModal_<?=$key;?>" role="dialog">
	        <div class="modal-dialog">
	         <!-- Modal content-->
	        <div class="modal-content">
	        <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">產品櫥窗</h4>
	        </div>
	        <div class="modal-body">
	          <!-- <a href="{{ action('ProductController@show', [$product->id]) }}"></a>-->
	          <img src="{{ asset('images/products/big/'.$product->image2 ) }}" >
	          <p>{{ $product->name }}</p>
	          <p>{{ $product->name_en }}</p>
	          <p>{!! $product->description !!}</p>
	          <a>規格:{{ $product->specification }}</a>
	          <p>價格:{{ $product->price }}</p>
	        </div>

	         <div class="modal-footer">  
	          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	         </div>
	        </div>
	        </div>
	        </div>

          @endforeach
      </div>
    </div>
  </div>

@stop
