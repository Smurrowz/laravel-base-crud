<?php 
$navLinksArray = [
          [
            'name' => 'CHARACTERS'
          ],
          [
            'name' => 'COMICS'
          ],
          [
            'name' => 'MOVIES'
          ],
          [
            'name' => 'TV'
          ],
          [
            'name' => 'GAMES'
          ],
          [
            'name' => 'COLLECTIBLES'
          ],
          [
            'name' => 'VIDEOS'
          ],
          [
            'name' => 'FANS'
          ],
          [
            'name' => 'NEWS'
          ],
          [
            'name' => 'SHOP'
          ],
        ]



?>

<header class="container">
  <div class="logo">
    <img src="{{ asset('img/dc-logo.png') }}" alt=" logo dc">
  </div>
  <nav class="main-nav">
    <ul>
      @foreach ($navLinksArray as $link)
          <li class="nav-link {{ $loop->first ? 'active' : ''}}">
            <a  href="#">{{$link['name']}}</a>
          </li>
      @endforeach
    </ul>
  </nav>  

 
</header>