@extends('layouts.main-layout')
@section('content')
<section class="box-container">

    <span id="btn">
        CURRENT SERIES
    </span>
    @foreach ($data as $elem)
    
    <div class="box">
        <div>
            <img src="{{$elem['thumb']}}" alt="">
        </div>
        
        <a href="{{route('elem', $loop->index)}}">
            <h6>{{strtoupper($elem['series'])}}</h6>
        </a>
    </div>
    
    @endforeach

    <span>
        LOAD MORE
    </span>
</section>

<section class="merch">
    
    
        @foreach ($merch as $i)

        <div>
            <img src="{{asset($i['logo'])}}" alt="">
            <span>{{$i['desc']}}</span>
        </div>

        @endforeach
    
</section>

@endsection