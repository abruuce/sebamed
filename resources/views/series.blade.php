@foreach($series as $item)
    <a href="{{ action('SeriesController@show', [$item->id]) }}">
        <img src="{{ asset('images/series/'.$item->image) }}">
    </a>
@endforeach