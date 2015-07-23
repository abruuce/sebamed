@extends('seba')

@section('content')

@foreach($product as $item)
    <img src="{{ asset('images/products/big/'.$item->image2) }}">
    {{ $item->name }}
    {{ $item->name_en }}
    {!! $item->description !!}
    {{ $item->specification }}
    {{ $item->price }}
@endforeach

@stop