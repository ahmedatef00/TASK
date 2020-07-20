
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blog</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Goudy+Bookletter+1911&display=swap" rel="stylesheet" />
  <link rel="icon" type="image/ico" href="images//b018978995324d2b64160a62514a7970.jpg">

  <link rel="stylesheet" href={{asset("assets/user/css/style.css")}} />
</head>

<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">

  <a class="navbar-brand" href="/">Mktabty</a>
  <div class="collapse navbar-collapse" id="collapsibleNavId">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link" href="/">All Books</a>
      </li>

      @auth
      <li class="nav-item">
        <a class="nav-link" href="/favorites">Favorites</a>
      </li>
      @endauth

      @auth
      <li class="nav-item">
        <a class="nav-link" href="/mybooks">My Books</a>
      </li>
      @endauth

    </ul>
  </div>



  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- Left Side Of Navbar -->
    <ul class="navbar-nav mr-auto">

    </ul>

    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
      <!-- Authentication Links -->
      @guest
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
      </li>
      @if (Route::has('register'))
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
      </li>
      @endif
      @else
      <li class="nav-item dropdown">
        {{-- <a  class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }} <span class="caret"></span>
        </a> --}}
        <img src="{{asset("Userimages/".Auth::user()->image) }}" width="60" height="40" alt="" title="">
      </li>
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          {{-- <a class="dropdown-item" href="{{ route('user.edit', Auth::user()->id) }}"> --}}
            {{ __('My Profile') }}
            <a class="dropdown-item" id="logout-button" href="#">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
           
        </div>
      </li>
      @endguest
    </ul>
</div>

  </div>
  
</nav>
<main class="py-4">
    @yield('content')
</main>
</div>

<script src="{{ asset('js/app.js') }}"></script>
<script>$('#logout-button').on('click', function(e) {
    e.preventDefault();
    $('#logout-form').submit();
});</script>
