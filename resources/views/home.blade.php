@foreach($banners as $banner)
    {{ $banner->image }}
@endforeach

@foreach($news as $anews)
    {{ $anews->title }}
@endforeach
