{{ $title }}

@foreach($products as $product)
    <a href="{{ action('ProductController@show', [$product->id]) }}">
        <img src="{{ asset('images/products/small/'.$product->image1) }}">
    </a>
    {!! $product->name !!}
@endforeach