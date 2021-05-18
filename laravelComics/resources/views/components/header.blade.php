
<header>
    <section>
        <ul>
            <li>DC POWER &#8480; VISA &reg;</li>
            <li>ADDITIONAL DC SITES <i class="fas fa-caret-down"></i></li>
        </ul>
    </section>
    
    <nav>
        <img src="{{ asset('/storage/assets/laravel-comics/dc-logo.png') }}" alt="">
        <ul>
            @foreach ($navbar as $elem)
            <li>{{$elem}}</li>
            @endforeach
            <li> <span class="search">search<i class="fas fa-search"></i></span></li>
        </ul>
       
    </nav>
</header>

<section class="jumbo">
    <span>
        CURRENT SERIES
    </span>
</section>
    
                    