@include('header')


<header>
    <!-- Intro settings -->
    <style>
      /* Default height for small devices */
      #intro-example {
        height: 400px;
      }
  
      /* Height for devices larger than 992px */
      @media (min-width: 992px) {
        #intro-example {
          height: 600px;
        }
      }
    </style>
  
    <!-- Navbar -->
    @if (Route::has('login'))
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent text-body">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
            <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5m0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78zM5.048 3.967l-.087.065zm-.431.355A4.98 4.98 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8zm.344 7.646.087.065z"/>
          </svg></a>
          <button
            data-mdb-collapse-init
            class="navbar-toggler"
            type="button"
            data-mdb-target="#navbarText"
            aria-controls="navbarText"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><h3>ToolHub</h3></a>
              </li>
              
            </ul>
            
            <span class="navbar-text">
                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
            </span>
          </div>
        </div>
      </nav>
      @endif
    <!-- Navbar -->
  
    <!-- Background image -->
    <div class="container p-5">
    <div
      id="intro-example"
      class="p-5 text-center bg-image"
      style="background-image: url('{{url('img/bacground.jpg')}}');"
    >
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="text-white">
            <h1 class="mb-3">
              ToolHub</h1><br><br>
              <marquee>
            <h5 class="mb-4">"Rent-A-Tool: Your One-Stop Shop for Professional Equipment Rentals"<br>
            </h5></marquee><br><br>
            
            <h5 class="mb-4">
              "Welcome to ToolHub, your premier destination for tool rentals. Whether you're a DIY enthusiast or a professional, we offer a vast selection of high-quality 
              tools to meet your needs. From power tools to hand tools, rent with ease and enjoy flexible terms, affordable rates, and exceptional customer service. 
              Get started today!"
            </h5>
            <br><br>
            
            
            
            <a
              data-mdb-ripple-init
              class="btn btn-outline-light btn-lg m-2"
              href="{{ route('register') }}"
              role="button"
              rel="nofollow"
            >Register</a>

            <a
              data-mdb-ripple-init
              class="btn btn-outline-light btn-lg m-2"
              href="{{ route('login') }}"
              role="button"
            >Log-In</a><br>

            <br><br>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-diamond" viewBox="0 0 16 16">
              <path d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.48 1.48 0 0 1 0-2.098zm1.4.7a.495.495 0 0 0-.7 0L1.134 7.65a.495.495 0 0 0 0 .7l6.516 6.516a.495.495 0 0 0 .7 0l6.516-6.516a.495.495 0 0 0 0-.7L8.35 1.134z"/>
              <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"/>
            </svg>
            <i class="bi bi-exclamation-diamond"> You must Log-in for Rent Products.</i><br><br><br>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!-- Background image -->
    <br><br>
    <center>
    <hr width="75%"><br>
    <h1 class="display-3">Here the products we have !</h1><br><br>
    <hr width="75%">
    <center>
      <br><br>

    <div class="container text-center">
      <div class="row">
        
        <div class="col">
          <div class="card" style="width: 18rem;">
          <img src="{{url('img/drill.jpg')}}" width="300" height="300" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="h4">Drilling Tools</p>
          </div>
        </div>
      </div>

        <div class="col">

          <div class="card" style="width: 18rem;">
            <img src="{{url('img/grind.jpg')}}" width="300" height="300" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="h4">Grinding Tools</p>
            </div>
          </div>

        </div>


        <div class="col">

        <div class="card" style="width: 18rem;">
          <img src="{{url('img/cut.jpg')}}" width="300" height="300" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="h4">Cutting Tools</p>
          </div>
        </div>
      </div>

        <div class="col">

          <div class="card" style="width: 18rem;">
            <img src="{{url('img/saw.jpg')}}" width="300" height="300" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="h4">sawing Tools</p>
            </div>
          </div>

        </div>
      </div>
      <br><br>
      
      <center>
        <hr><br>
      <center>

      <div class="row">
        <div class="col-8">
          <br><br>
          <p class="h5">At ToolRents, we understand the value of having the right tools for the job. Whether you're a DIY enthusiast, a professional contractor, or a weekend warrior, we've got you covered with a wide range of high-quality tools and equipment available for rent.</p>
        </div>
        <div class="col-4"><img src="{{url('img/home1.jpg')}}" width="200" height="200" class="img-thumbnail" alt="..."></div>
      </div>
      
      <center>
        <hr><br>
      <center>
      
        <div class="row">
        <div class="col-4"><img src="{{url('img/home2.jpg')}}" width="200" height="200" class="img-thumbnail" alt="..."></div>

        <div class="col-8">
          <br><br>
          <p class="h5">With our user-friendly online platform, you can easily browse our inventory, check availability, and make reservations from the comfort of your home. Our convenient rental process and flexible rental periods make it easy for you to get the tools you need for your project, without breaking the bank.</p>
        </div>
    </div>
    </div>
    <br><br>
    <center>
      <hr width="75%"><br>
      <center>
<!-- Footer -->

  </header>
  @include('footer')