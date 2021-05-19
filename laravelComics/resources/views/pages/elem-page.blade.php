@extends('layouts.main-layout')
@section('content')


    <div class="banner">
        <div>
            <div class="contain">
                <img src="{{$elem['thumb']}}" alt="">
                <a href="{{ route('home')}}">
                    <span>COMIC BOOK</span>
                    <span>VIEW GALLERY</span>
                </a>
            </div>
        </div>
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
        <div class="tab">
            <ul>
                <li><h2>Talent</h2></li>
                <li>
                    <h5>Art by</h5>
                    <ul>
                        <li>
                            @foreach ($elem['artists'] as $i)
                                <span>{{$i}}</span>
                            @endforeach
                        </li>
                    </ul>
                </li>

                <li>
                    <h5>Written by</h5>
                    <ul>
                        <li>
                            @foreach ($elem['writers'] as $i)
                            <span>{{$i}}</span>
                            @endforeach
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="tab">
            <ul>
                <li><h2>Specs</h2></li>
                <li>
                    <h5>Series</h5>
                    <span>{{strToUpper($elem['series'])}}</span>
                </li>
                <li>
                    <h5>U.S Price:</h5>
                    <p>{{$elem['price']}}</p>
                </li>
                <li>
                    <h5>On Sale Date</h5>
                    <p>{{$elem['sale_date']}}</p>
                </li>
                    
                    

                
            </ul>
        </div>

        

    </section>
    <section class="card">
        @foreach ($card as $i)
        
            <div class="card-elem">
                <span> {{strToUpper($i['title'])}}</span>
                <img src="{{$i['logo']}}" alt="">
            </div>
                
        @endforeach
    </section>





@endsection
