<?php 

  $titolo1 = "DC COMICS";
  $titolo2 = "SHOP";
  $titolo3 = "DC";
  $titolo4 = "SITES";
  $menu1 = 
    [
        [
          'href'=> "#",
          'text'=> "Characters",
        ],
        [
          'href'=> "#",
          'text'=> "Comics",
        ],
        [
          'href'=> "#",
          'text'=> "Movies",
        ],
        [
          'href'=> "#",
          'text'=> "TV",
        ],
        [
          'href'=> "#",
          'text'=> "Games",
        ],
        [
          'href'=> "#",
          'text'=> "Videos",
        ],
        [
          'href'=> "#",
          'text'=> "News",
        ],
    ];
  $menu2 = 
    [
        [
          'href'=> "#",
          'text'=> "Shop DC",
        ],
        [
          'href'=> "#",
          'text'=> "Shop DC Collectibles",
        ],
    ];
  $menu3 = 
    [
        [
          'href'=> "#",
          'text'=> "Terms Of Use",
        ],
        [
          'href'=> "#",
          'text'=> "Privacy Policy",
        ],
        [
          'href'=> "#",
          'text'=> "Ad Choices",
        ],
        [
          'href'=> "#",
          'text'=> "Advertising",
        ],
        [
          'href'=> "#",
          'text'=> "Jobs",
        ],
        [
          'href'=> "#",
          'text'=> "Subscriptions",
        ],
        [
          'href'=> "#",
          'text'=> "Talent Workshops",
        ],
        [
          'href'=> "#",
          'text'=> "CPSC Certificates",
        ],
        [
          'href'=> "#",
          'text'=> "Ratings",
        ],
        [
          'href'=> "#",
          'text'=> "Shop Help",
        ],
        [
          'href'=> "#",
          'text'=> "Contact Us",
        ],
    ];
  $menu4 =
   [
      [
        'href'=> "#",
        'text'=> "DC",
      ],
      [
        'href'=> "#",
        'text'=> "Mad Magazine",
      ],
      [
        'href'=> "#",
        'text'=> "DC Kids",
      ],
      [
        'href'=> "#",
        'text'=> "DC Universe",
      ],
      [
        'href'=> "#",
        'text'=> "DC Power Visa",
      ],
    ];
  $footerLinks2 =
    [
      [
        'href'=>'#',
        'src'=> "../img/footer-facebook.png",
        'alt'=>'logo facebook',
      ],
      [
        'href'=>'#',
        'src'=> "../img/footer-twitter.png",
        'alt'=>'logo twitter',
      ],
      [
        'href'=>'#',
        'src'=> "../img/footer-youtube.png",
        'alt'=>'logo youtube',
      ],
      [
        'href'=>'#',
        'src'=> "../img/footer-pinterest.png",
        'alt'=>'logo pinterest',
      ],
      [
        'href'=>'#',
        'src'=> "../img/footer-periscope.png",
        'alt'=>'logo periscope',
      ],
    ];
?>

<footer>
    
    <div class="footer-pt-2">
        <div class="container">
            <div class="wrapper">
                <div class="col">
                  <h3>{{$titolo1}}</h3>
                  <ul>
                    @foreach ($menu1 as $link)
                    <li>
                      <a href="{{$link['href']}}">{{$link['text']}}</a>
                    </li>   
                    @endforeach
                  </ul>
                </div>
                <div class="col">
                  <h3>{{$titolo2}}</h3>
                  <ul>
                    @foreach ($menu2 as $link)
                    <li>
                      <a href="{{$link['href']}}">{{$link['text']}}</a>
                    </li>   
                    @endforeach
                  </ul>
                </div>
                <div class="col">
                  <h3>{{$titolo3}}</h3>
                  <ul>
                    @foreach ($menu3 as $link)
                    <li>
                      <a href="{{$link['href']}}">{{$link['text']}}</a>
                    </li>   
                    @endforeach
                  </ul>
                </div>
                <div class="col">
                  <h3>{{$titolo4}}</h3>
                  <ul>
                    @foreach ($menu4 as $link)
                    <li>
                      <a href="{{$link['href']}}">{{$link['text']}}</a>
                    </li>   
                    @endforeach
                  </ul>
                </div>
            </div>
            <div class="logo-cont">
                <img class="logo-big" src="{{asset('img/dc-logo-bg.png')}}" alt="">
            </div>
        </div>
    </div>
    <div class="footer-pt-3">
        <div class="container">
            <button>SIGN-UP NOW</button>
            <nav class="social-links">
                <a href="#"> FOLLOW US</a>
                <ul>
                  @foreach ($footerLinks2 as $link)
                  <li><a href="{{$link['href']}}"><img src="{{$link['src']}}" alt="{{$link['alt']}}"></a></li> 
                  @endforeach
                </ul>
            </nav>
        </div>
    </div>
</footer>
