{{-- <nav>
  <ul>
    <li class="{{ Request::is('/')?"active":"" }}"><a href="/"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
    <li class="{{ Request::is('about') ? "active":"" }}"><a href="/about"><i class="fa fa-user" aria-hidden="true"></i> About Me</a></li>
    <li id="sercive-right"class="{{ Request::is('services') ? "active":"" }}"><a href="/services">Services</a></li>
    <li class="{{ Request::is('contact') ? "active":"" }}"><a href="/contact"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Me</a></li>
  </ul>
</nav> --}}
<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <a class="navbar-brand" href="#" style="margin-top: 10px">Lodrick's Site</a>
  <!-- As a heading -->
{{-- <nav class="navbar navbar-light bg-white">
  <span class="navbar-brand mb-0 h1">Navbar</span>
</nav> --}}
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ Request::is('/')?"active":"" }}">
        <a class="nav-link" href="/"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{ Request::is('about') ? "active":"" }}">
        <a class="nav-link" href="/about"><i class="fa fa-user" aria-hidden="true"></i> About Me</a>
      </li>
      <li class="nav-item {{ Request::is('contact') ? "active":"" }}" >
        <a class="nav-link" href="/contact"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Me</a>
      </li>
      <li class="nav-item {{ Request::is('services') ? "active":"" }}" >
        <a class="nav-link" href="/services"><i class="fa fa-terminal" aria-hidden="true"></i> Services</a>
      </li>
      {{-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> --}}

    </ul>
    {{-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> --}}
  </div>
</nav>
