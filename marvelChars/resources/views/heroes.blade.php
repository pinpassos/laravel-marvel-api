@extends('layouts.main')
@section('title', 'Marvel Heroes')
@section('content')


<div class="container" id="content">
    <h1 class="text-center title-h1">Laravel Marvel Heroes</h1>
    
    @for($i = 0; $i <= 19; $i++)
    
        <div class="card" style="width: 18rem;">
            <img src="{{$hero['data']['results'][$i]['thumbnail']['path'].$extension}}" class="card-img-top image">
            <div class="card-body">
                <h5 class="card-title">Hero Name</h5>
                <p class="card-text"><b>{{$hero['data']['results'][$i]['name']}}</p>
            </div>
        </div>

    @endfor

</div>

@endsection
