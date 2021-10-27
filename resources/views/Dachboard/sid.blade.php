<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('home') }}">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <i class="icon-head menu-icon"></i>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
      @guest
     <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li> 
      @if (Route::has('register'))
        <li class="nav-item"> <a  class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li> 
      @endif
  @else
      <span>{{ Auth::user()->name }}</span>

    <li class="nav-item"> <a href="{{ route('logout') }}" class="nav-link"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li> 
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
          {{ csrf_field() }}
      </form>
  @endguest
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
        <i class="icon-columns menu-icon"></i>
        <span class="menu-title">Transporteurs</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="{{ route('trans.index') }}">Liste des Transporteurs</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
        <i class="icon-bar-graph menu-icon"></i>
        <span class="menu-title">Gestion ds Bennes</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="charts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('benne.index') }}">Liste des Bennes </a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">Affectée Benne </span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('benne.benneAffecter') }}">Affectée Benne</a></li>
        </ul>
      </div>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('benne.benneNonAffecter') }}">Reste Benne</a></li>
        </ul>
      </div>
    </li>
    
  </ul>
</nav>