
@foreach($banners as $banner)
    <div>
        {{ $banner->image }}
        {{ $banner->url }}
    </div>
@endforeach

@foreach($news as $item)
    <div>
        {{ $item->title }}
    </div>
@endforeach
