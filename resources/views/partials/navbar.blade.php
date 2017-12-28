<nav>
  <ul>
    <li class="{{ Request::is('/')?"active":"" }}"><a href="/"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
    <li class="{{ Request::is('about') ? "active":"" }}"><a href="/about"><i class="fa fa-user" aria-hidden="true"></i> About Me</a></li>
    <li id="sercive-right"class="{{ Request::is('services') ? "active":"" }}"><a href="/services">Services</a></li>
    <li class="{{ Request::is('contact') ? "active":"" }}"><a href="/contact"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Me</a></li>
  </ul>
</nav>
