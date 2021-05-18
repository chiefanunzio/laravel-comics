<section class="contact">

    <div>
        <ul>
            
            <li>
                <h3>{{strtoupper($dcComics['title'])}}</h3>
            </li>
            @foreach ($dcComics['link'] as $i)
            
            <li>
                {{ucfirst($i)}}
            </li>
            @endforeach
        </ul>
        <ul>
            
            <li>
                <h3>{{strtoupper($shop['title'])}}</h3>
            </li>
            @foreach ($shop['link'] as $i)
            
            <li>
                {{ucfirst($i)}}
            </li>
            @endforeach
        </ul>
    </div>

    <div>
        <ul>
            
            <li>
                <h3>{{strtoupper($dc['title'])}}</h3>
            </li>
            @foreach ($dc['link'] as $i)
            
            <li>
                {{ucfirst($i)}}
            </li>
            @endforeach
        </ul>
    </div>
    <div>
        <ul>
            
            <li>
                <h3>{{strtoupper($sites['title'])}}</h3>
            </li>
            @foreach ($sites['link'] as $i)
            
            <li>
                {{ucfirst($i)}}
            </li>
            @endforeach
        </ul>
    </div>
    <p>all site content Tm and &copy; 2020 DC Entertainemnt, unless otherwise <span>noted here</span>. All rights reserved.</p>
    <p><span>Cokies Settings</span></p>
    <img src="{{ asset('/storage/assets/laravel-comics/dc-logo-bg.png') }}" alt="">
</section>

<section class="footer">

    
<span class="button"> SIGN-UP NOW! </span>
<ul>
    <li> FOLLOW US</li>
    @foreach ($social as $i)
        <li><img src="{{$i}}" alt=""></li>
    @endforeach
</ul>
</section>