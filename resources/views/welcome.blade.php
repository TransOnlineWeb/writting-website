<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Assignments Experts</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
         <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div>
            <header>
                <nav class="navbar navbar-expand-md fixed-top font">
                    <a class="navbar-brand text-light" href="#">AssignmentsExperts</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                          <a class="nav-link text-light" href="/howitworks">How it Works <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-light" href="/services">Services</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-light" href="/about">About Us</a>
                        </li>
                      </ul>

                      <div class="mt-2 mt-md-0">
                          @if (Route::has('login'))
                              <div class="mr-sm-2">
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        <li class="nav-item">
                                            <a href="/login" class="nav-link">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                            <a class="nav-link" href="/register">Sign Up</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item">
                                            <a href="/task" class="btn btn-lg btn-success">Submit An Order</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="/order">My Orders</a>
                                                <a class="dropdown-item" href="">My Profile</a>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
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
                          @endif
                      </div>
                      {{-- <div class="mt-2 mt-md-0">
                          @if (Route::has('login'))
                              <div class="mr-sm-2">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        @auth
                                            <a class="nav-link text-light" href="{{ url('/home') }}">Home</a>
                                        @else
                                            <a class="nav-link text-light" href="{{ route('login') }}">Login</a>
                                    </li class="nav-item">
                                    <li>
                                            @if (Route::has('register'))
                                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                                            @endif
                                        @endauth
                                    </li>
                                </ul>
                              </div>
                          @endif
                      </div> --}}
                    </div>
                  </nav>
            </header>
            <!---------------- banner section ---------------------->

            <div class="home">
                <div class="hero-text">
                    <h1 class="font-weight-bold pt-4"> We Will Help You Do Your Assignments</h1>
                    <h4>From initial topic to finished paper</h4>
                    <a href="" class="btn btn-lg btn-success mt-5">Make An Order</a>
                </div>
            </div>

            <div class="row p-5">
              <div class="col-md-8 pt-5">
                <h2 class="display-4 featurette">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
                <p class="lead pt-3">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
              </div>
              <div class="col-md-4 p-3">
                <img class="img-fluid" src="./img/small.jpg" alt="">
              </div>
            </div>
            <div class="justify-content-center py-3 px-5 bg-custom">
                 <div class="row justify-content-center pb-2">
                    <h1 class="featurette px-4">Features</h1>
                </div>
                <div class="row justify-content-center container-fluid pt-3">
                    <div class="col-md-4">
                        <img src="./img/contract.svg" style="height: 60px; width: 60px" alt="">
                        <h3 class="pt-2 featurette">Any Deadline - Any Subject</h3>
                        <p class="pt-2 lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi autem, nam, a iste quia quos quidem provident magnam. Necessitatibus at ducimus odit amet mollitia facilis molestias iste pariatur atque.</p>
                    </div>
                    <div class="col-md-4">
                        <img src="./img/notification.svg" style="height: 60px; width: 60px" alt="">
                        <h3 class="pt-2 featurette">Email Notifications</h3>
                        <p class="pt-2 lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi autem, nam, a iste quia quos quidem provident magnam. Necessitatibus at ducimus odit amet mollitia facilis molestias iste pariatur atque.</p>
                    </div>
                    <div class="col-md-4">
                        <img src="./img/chat.svg" style="height: 60px; width: 60px" alt="">
                        <h3 class="pt-2 featurette">Online Writer Chat</h3>
                        <p class="pt-2 lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi autem, nam, a iste quia quos quidem provident magnam. Necessitatibus at ducimus odit amet mollitia facilis molestias iste pariatur atque.</p>
                    </div>
                </div>
                <div class="row justify-content-center container-fluid pt-3">
                    <div class="col-md-4">
                        <img src="./img/bargains.svg" style="height: 60px; width: 60px" alt="">
                        <h3 class="pt-2 featurette">Have the Bargaing Power</h3>
                        <p class="pt-2 lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi autem, nam, a iste quia quos quidem provident magnam. Necessitatibus at ducimus odit amet mollitia facilis molestias iste pariatur atque.</p>
                    </div>
                    <div class="col-md-4">
                        <img src="./img/file.svg" style="height: 60px; width: 60px" alt="">
                        <h3 class="pt-2 featurette">Plagiarism Free Papers</h3>
                        <p class="pt-2 lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi autem, nam, a iste quia quos quidem provident magnam. Necessitatibus at ducimus odit amet mollitia facilis molestias iste pariatur atque.</p>
                    </div>
                    <div class="col-md-4">
                        <img src="./img/coin.svg" style="height: 60px; width: 60px" alt="">
                        <h3 class="pt-2 featurette">Affordable Prices</h3>
                        <p class="pt-2 lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi autem, nam, a iste quia quos quidem provident magnam. Necessitatibus at ducimus odit amet mollitia facilis molestias iste pariatur atque.</p>
                    </div>
                </div>
            </div>
            <div class="justify-content-center py-3">
              <div class="row justify-content-center">
                <h1 class="featurette text-center px-4 pt-3">24/7 Customer Support</h1>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <h1 class="text-center display-1 px-5 featurette">6min</h1>
                  <p class="text-center px-5 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quod , possimus, minus, culpa recusandae nesciunt dolor magni! Itaque, dolorum iste!</p>
                </div>
                <div class="col-md-6">
                  <h1 class="text-center display-1 px-5 featurette">98%</h1>
                  <p class="text-center px-5 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quod , possimus, minus, culpa recusandae nesciunt dolor magni! Itaque, dolorum iste!</p>
                </div>
              </div>
              <h4 class="featurette text-center px-5 pt-3">Let us take care of your order details while you enjoy your free time!</h4>
              <div class="center">
                <a href="" class="btn btn-lg btn-success">Make An Order</a>
              </div>

            </div>

             @include('includes.footer')
        </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
