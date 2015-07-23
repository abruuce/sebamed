@extends('seba')

@section('content')

 <div class="row">
  <div class="container">
    <div class="col-md-8 col-md-offset-1 col-xs-12">
<!-- <div id="contectright"> -->
      <img src="http://www.sebamed.com.tw//images/product_series_4.jpg" class="img-responsive">
      <img src="http://www.sebamed.com.tw//images/ss1_3.jpg" class="img-responsive">
<!--   <img src="http://www.sebamed.com.tw//images/bg1.jpg" width="718" height="40" align="center">-->
    
<!--{{ $title }}

 @foreach($products as $product)
    <a href="{{ action('ProductController@show', [$product->id]) }}">
        <img src="{{ asset('images/products/small/'.$product->image1) }}">
    </a>
    {!! $product->name !!}
 @endforeach

    -->
     
      <!-- Trigger the modal with a button -->
      @foreach($products as $key => $product)
        <!--
         <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal_<?=$key;?>">
         <img src="{{ asset('images/products/small/'.$product->image1) }}">
         {!! $product->name !!}
         </button>
        -->
        <a href="" data-toggle="modal" data-target="#myModal_<?=$key;?>">
        <img src="{{ asset('images/products/small/'.$product->image1) }}" >
        <a class="btn btn-default" data-toggle="modal" data-target="#myModal_<?=$key;?>">{!! $product->name !!}</a>
    

        <!-- Modal -->
        <div class="modal fade" id="myModal_<?=$key;?>" role="dialog">
        <div class="modal-dialog">
         <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">{{ $title }} </h4>
        </div>
        <div class="modal-body">
          <!-- <a href="{{ action('ProductController@show', [$product->id]) }}"></a>-->
         <table class="table">
          <tbody> 
           <tr>
            <td>
             <img src="{{ asset('images/products/big/'.$product->image2 ) }}" >
              <td>
               <table>
                <tbody>
                 <tr> <p>{{ $product->name }}</p>
                      <p>{{ $product->name_en }}</p>
                      <p>{!! $product->description !!}</p>
                      <a>規格:{{ $product->specification }}</a>
                      <p>價格:{{ $product->price }}</p>
                 </tr>
                </tbody>
               </table>
              </td>
             </td>
            </tr>
           </tbody>
          </table>
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

<!--
@foreach($products as $product)
    <a href="{{ action('ProductController@show', [$product->id]) }}">
        <img src="{{ asset('images/products/small/'.$product->image1) }}">
    </a>
    {!! $product->name !!}
@endforeach
-->