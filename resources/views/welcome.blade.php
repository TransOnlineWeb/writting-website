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
                    <a class="navbar-brand text-light" href="#">My Assignments Experts</a>
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
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                    <h4>We write a Custom persuasive essay.</h4>
                    <a href="" class="btn btn-lg btn-success mt-5">Make An Order</a>
                </div>
            </div>

            <div class="container-fluid">
              <div class="row p-5">
                <div class="col-md-8 pt-5">
                  <h2 class="display-4 featurette">How can I get help to write my school essay?  <!-- <span class="text-muted">It’ll blow your mind.</span> --></h2>
                  <p class="lead pt-3">Writing school essay has never been easy. For anyone to come up with a good essay, you will need to come up with good and reasonable objectives, reasonable points with facts, and most importantly you should be good in grammar and use better stylistic devices. Having all these requirements may not be an easy task since it requires a lot of time. Truth is that only a small number of students can write quality essays. No need to have questions like ‘who can help me write my school essay?’ We decided that you may need assistance in writing essays, and we are here to help.</p>
                </div>
                <div class="col-md-4 p-3">
                  <img class="img-fluid" src="./img/small.jpg" alt="">
                </div>
              </div>
              <div class="justify-content-center py-3 px-5 bg-custom">
                   <div class="row justify-content-center pb-2">
                      <h1 class="featurette px-4">What we offer</h1>
                  </div>
                  <div class="row justify-content-center container-fluid pt-3">
                      <div class="col-md-4">
                          <img src="./img/contract.svg" style="height: 60px; width: 60px" alt="">
                          <h3 class="pt-2 featurette">Any Deadline - Any Subject</h3>
                          <p class="pt-2 lead2">Submitting assignments even a few hours past the deadline can result in you losing a good grade. So why risk your scores when you can get the fastest assignment help from our team of super-swift assignment helpers?</p>
                      </div>
                      <div class="col-md-4">
                          <img src="./img/notification.svg" style="height: 60px; width: 60px" alt="">
                          <h3 class="pt-2 featurette">Email Notifications</h3>
                          <p class="pt-2 lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi autem, nam, a iste quia quos quidem provident magnam. Necessitatibus at ducimus odit amet mollitia facilis molestias iste pariatur atque.</p>
                      </div>
                      <div class="col-md-4">
                          <img src="./img/chat.svg" style="height: 60px; width: 60px" alt="">
                          <h3 class="pt-2 featurette">Online Writer Chat</h3>
                          <p class="pt-2 lead2">Get in touch with our friendly customer support at any time of the day or night. They are available online 24*7 and will be too glad to resolve queries about assignment help swiftly! Be it a query or a last-minute instruction, they are all ears for you!</p>
                      </div>
                  </div>
                  <div class="row justify-content-center container-fluid pt-3">
                      <div class="col-md-4">
                          <img src="./img/bargains.svg" style="height: 60px; width: 60px" alt="">
                          <h3 class="pt-2 featurette">100% private</h3>
                          <p class="pt-2 lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi autem, nam, a iste quia quos quidem provident magnam. Necessitatibus at ducimus odit amet mollitia facilis molestias iste pariatur atque.</p>
                      </div>
                      <div class="col-md-4">
                          <img src="./img/file.svg" style="height: 60px; width: 60px" alt="">
                          <h3 class="pt-2 featurette">Plagiarism Free Papers</h3>
                          <p class="pt-2 lead2">As promised all the work is done from scratch. Each piece is checked through with Plagiarism Checking Tools or Software. Students can ask for the reports if they want.</p>
                      </div>
                      <div class="col-md-4">
                          <img src="./img/coin.svg" style="height: 60px; width: 60px" alt="">
                          <h3 class="pt-2 featurette">Affordable Prices</h3>
                          <p class="pt-2 lead2">You get premium service at the best market price. The cost of our quality products does not make hole in your pockets. We are affordable and make sure that you get your money’s worth</p>
                      </div>
                  </div>
              </div>
              <div class="justify-content-center py-3">
                <div class="row justify-content-center">
                  <h1 class="featurette text-center px-4 pt-3">Your success is our business</h1>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    <h4 class="text-center display-4 px-5 featurette">24/7</h4>
                    <p class="text-center px-5 lead">The 24/7 writing support we offer helps us to be able to handle your work or orders at any time. As a student, you may have deadlines, and you have to look for the right services like the ‘write my essay overnight’ that we have in our system.</p>
                  </div>
                  <div class="col-md-6">
                    <h4 class="text-center display-4 px-5 featurette">100%</h4>
                    <p class="text-center px-5 lead">We always ensure that we provide how clients with 100% plagiarism free paper. When you place your trust in our services, we provide you with utmost satisfaction.</p>
                  </div>
                </div>
                <h4 class="featurette text-center px-5 pt-3">Let us take care of your order details while you enjoy your free time!</h4>
                <div class="center">
                  <a href="" class="btn btn-lg btn-success">Make An Order</a>
                </div>
                
              </div>
            </div>
             
             @include('includes.footer')
        </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
