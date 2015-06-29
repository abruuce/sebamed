@extends('sebamed')

@section('content')

    @foreach($news as $item)
        <div>
            <a href="{{ action('NewsController@show', [$item->id]) }}">{{ $item->title }}</a>
        </div>
    @endforeach
    <nav>
        {!! $news->render() !!}
    </nav>
@stop