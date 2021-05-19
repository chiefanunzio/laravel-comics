@extends('layouts.main-layout')
@section('content')


    <div class="banner">

    </div>
    <section class="elem-info">
        
        <div>
            <h1>{{ strtoupper($elem['title']) }}</h1>

            <div >
                <div class="header-tab">
                    <p>US Price:<span>{{$elem['price']}}</span></p>
                    <p>AVAILABLE</p>
                </div>
                <div class="header-tab">
                    <span>Chech Availability <i class="fas fa-caret-down"></i></span>
                </div>
            </div>



            <p>{{$elem['description']}}</p>
        </div>

        <div class="adv">
            <h4>ADVERTISEMENT</h4>
            <img src="{{ asset('storage/assets/laravel-comics/adv.jpg')}}" alt="">
        </div>
           

    </section>

    <section class="tab-section">
        <div>
            <ul>
                <li><h2>Talent</h2></li>
                <li>
                    <h5>Art by</h5>
                    <ul>
                        @foreach ($elem['artists'] as $i)
                            <li>{{$i}}</li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>

        <div>
            <ul>
                <li><h2>Talent</h2></li>
                <li>
                    <h5>Art by</h5>
                    <ul>
                        @foreach ($elem['artists'] as $i)
                            <li>{{$i}}</li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>

    </section>





@endsection
