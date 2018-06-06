<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ config('app.name', 'WelcometoGems') }}</title>
    <!-- This gets changed -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script>
        window.Laravel = {!! json_encode( [ "csrfToken" => csrf_token() ]) !!}
    </script>
    <script type="text/javascript" src="/vendor.js"></script>
    <script type="text/javascript" src="/assets/js/app.js"></script>
    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet">
    <link rel="shortcut icon" href="/logo.png">
  </head>
 <body>
   <div id='app'></div>
   <div id="main">
   <section class="hero is-bold app-navbar animated slideInDown">
     <div class="hero-head">
       <nav class="nav">
       <div class="nav-left">.b</div>
         <div class="nav-center">
           <a href="/" class="nav-item hero-brand">
             <div aria-label="v0.1" class="is-hidden-mobile tooltip--right tooltip--success tooltip--no-animate tooltip--small tooltip--rounded tooltip-always">
               <span class="vue">Welcome </span>
                <strong class="admin"> to Gems</strong>
              </div></a></div>
              <div class="nav-right">
                <ul>
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
              </div>
            </nav>
           </div>
         </section>
     <section class="app-main">
        <div class="container is-fluid is-marginless app-content">
            @yield('content')
       </div>
     </section>
   </div>
   <!-- Scripts -->
  </body>
</html>
