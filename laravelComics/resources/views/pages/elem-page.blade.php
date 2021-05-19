@extends('layouts.main-layout')
@section('content')


    <div class="banner">

    </div>
    <section class="elem-info">
        
        <div>
            <h1>{{$elem['title']}}</h1>

            <div >
                <div class="header-tab">
                    <p>us price:<span>{{$elem['price']}}</span></p>
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





@endsection
