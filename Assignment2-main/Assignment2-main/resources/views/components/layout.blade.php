<!DOCTYPE html>
<html>
  <head>
    <title>{{$title}}</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <header class="header">
      <div class="desktop-header-wrapper">
        <div class="header__content">
          <a href="/plants" class="logo">
            <img src="{{asset('storage/logo2.png')}}" alt="logo">
          </a>

          <div onclick="toggleNav()" id="openIcon" class="menu-icon">
            <svg width="30px" viewBox="0 0 10 10" fill="none">
              <path d="M1 1h8M1 4h 8M1 7h8" stroke="#fff" stroke-width="1" />
            </svg>
          </div>

          <div id="closeIcon" onclick="toggleNav()" class="hide menu-icon">
            <svg width="30px" viewbox="0 0 40 40">
              <path d="M 10,10 L 30,30 M 30,10 L 10,30" stroke="#fff" stroke-width="4" />
            </svg>
          </div>

          <nav class="nav">
           
            <ul id="navList" class="hide nav__list">
              @can('edit')
              <li class="nav__item">
                <a href="/plants/create" class="nav__link">Create</a>
              </li>
              <li class="nav__item">
                <a href="/favourite" class="nav__link">Favourite</a>
              </li>
              @endcan
              <li class="nav__item">
                <a href="/plants/about" class="nav__link">About</a>
              </li>
              @guest
              <li class="nav__item">
                <a href="/login" class="nav__link">Sign-in</a>
              </li>
              @endguest
              @auth
                <form method="POST" action="/logout">
                  @csrf
                  <button type="submit">Logout</button>
                </form>
              @endauth
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <main class="main">
      {{$slot}}
    </main>
    <script>
    const navList = document.querySelector("#navList");
    const openIcon = document.querySelector("#openIcon");
    const closeIcon = document.querySelector("#closeIcon");

    function toggleNav(){
      navList.classList.toggle('show')
      openIcon.classList.toggle('hide')
      closeIcon.classList.toggle('hide')
    }
    </script>
  </body>
</html>