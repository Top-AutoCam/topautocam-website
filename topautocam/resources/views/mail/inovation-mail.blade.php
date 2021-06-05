<h2>New promotion for you now.</h2>
<br>sss
@foreach($data as $data)
    <h4>{{$data['name']}}</h4></br>
    <p>
        {{$data['deail']}}
    </p>
    <div>
        <img data-src="{{ asset('storage/'.$data->image) }}" width="1800" height="1200" alt="" uk-cover uk-img="target: !.uk-slideshow-items">
    </div>
@endforeach
Thanks!!!<br>