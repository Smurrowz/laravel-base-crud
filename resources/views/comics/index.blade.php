<?php
$footerLinks1 = [
    [
        'href' => '#',
        'src' => '../img/buy-comics-digital-comics.png',
        'alt' => 'logo digital comics',
        'title' => 'DIGITAL COMICS',
    ],
    [
        'href' => '#',
        'src' => '../img/buy-comics-merchandise.png',
        'alt' => 'logo dc merchandise',
        'title' => 'DC MERCHANDISE',
    ],
    [
        'href' => '#',
        'src' => '../img/buy-comics-subscriptions.png',
        'alt' => 'logo subscription',
        'title' => 'SUBSCRIPTION',
    ],
    [
        'href' => '#',
        'src' => '../img/buy-comics-subscriptions.png',
        'alt' => 'logo comic shop locator',
        'title' => 'COMIC SHOP LOCATOR',
    ],
    [
        'href' => '#',
        'src' => '../img/buy-dc-power-visa.svg',
        'alt' => 'logo dc power visa',
        'title' => 'DC POWER VISA',
    ],
];
?>
@extends('layout.app')
@section('content')
    <div class="comics">
        <div class="container">
            <button class="current-series">CURRENT SERIES</button>
            <a href="{{ route('comics.create') }}" class="create-comic">CREATE COMIC</a>
            <div class="card-container">

                @foreach ($comics as $key => $comic)
                    <div class="cont-c">
                        <a href="{{ route('comics.show', $comic) }}">
                            <div class="card">
                                <div>
                                    <img class="card-img" src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                                </div>
                                <div class="card-bottom">
                                    <p>{{ $comic['series'] }}</p>
                                    <p class="price"> {{ $comic['price'] }}</p>
                                </div>
                            </div>
                            
                        </a>
                        <a class="edit-button" href="{{ route('comics.edit', $comic) }}">EDIT COMIC</a>
                    </div>
                @endforeach

            <button class="load-more">LOAD MORE</button>

        </div>

    </div>

    </div>
    <div class="footer-pt-1">
        <div class="container">
            <ul>
                @foreach ($footerLinks1 as $item)
                    <li>
                        <a href="{{ $item['href'] }}">
                            <div>
                                <img src="{{ asset($item['src']) }}" alt="{{ $item['alt'] }}">
                            </div>
                            <div>
                                {{ $item['title'] }}
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
