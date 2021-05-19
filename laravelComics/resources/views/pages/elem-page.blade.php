@extends('layouts.main-layout')
@section('content')


    <section>
        
           <div>
                <h1>{{$elem['title']}}</h1>

                <div>
                    <p>us price:<span>{{$elem['price']}}</span></p>
                    <span>AVAILABLE</span>
                </div>
                <div>
                    <span>Chech Availability <i class="fas fa-caret-down"></i></span>
                </div>

                <p>{{$elem['description']}}</p>
           </div>

           <div>
                <h4>ADVERTISEMENT</h4>
                <img src="{{ asset('storage/assets/laravel-comics/adv.jpg')}}" alt="">
           </div>
            

    </section>





@endsection
