<header class="header_section long_section px-0">
    <nav class="navbar navbar-expand-lg custom_nav-container ">
      <a class="d-flex justify-content-center align-items-center" href="{{route('customers.index')}}">
          <img src="{{asset('images/logo_project.jpg')}}" alt="logo" class="w-50">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=""> </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('customers.index')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('customers.about')}}"> About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('customers.furniture')}}">Furnitures</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('customers.blog')}}">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('customers.contact')}}">Contact Us</a>
            </li>
          </ul>
        </div>
        <div class="quote_btn-container">
          @if (!Auth::guard('web')->check())
            <a href="{{route('login')}}">
              <span>
                Login
              </span>
              <i class="fa fa-user" aria-hidden="true"></i>
            </a>
          @else
            <div class="dropdown">
              <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{Auth::user()->name}}
              </button>
              <ul class="dropdown-menu">
                <li>
                    <form action="{{route('logout')}}" method="POST" class=" dropdown-item">
                      @csrf
                      <button type="submit" class=" btn"><p class="text-danger">Log Out</p></button>
                    </form>
                </li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
              </ul>
            </div>
          @endif
          <form class="form-inline">
            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
              <i class="fa fa-search" aria-hidden="true"></i>
            </button>
          </form>
        </div>
      </div>
    </nav>
  </header>
