<header class="navBar">
  <img src={{ URL::asset('Logo.svg'); }} alt="DijaTourLogo" >
  <div  class="navBarRightContent_items">
    <div class="navBarRightContent_item">
      <div>Voyages</div>
      <img src={{ URL::asset('chevron-up.svg'); }} alt="chevron">
    </div>
    <div class="navBarRightContent_item">
      <div>Évènements</div>
      <img src={{ URL::asset('chevron-up.svg'); }} alt="chevron">
    </div>
    <div class="navBarRightContent_item">
      <div>Circuits</div>
      <img src={{ URL::asset('chevron-up.svg'); }} alt="chevron">
    </div>
    <div class="navBarRightContent_item">Hajj_Omra</div>
    <div class="navBarRightContent_item">Croisières</div>
    <div class="navBarRightContent_item">Qui sommes nous ?</div>
    <div class="navBarRightContent_item">Contact</div>
    @if (Route::has('login'))
     <div class="navBarRightContent_item navBarButton">
      @auth
        <a href="{{ url('/dashboard') }}" >Dashboard</a>
    @else
        <a href="{{ route('login') }}" >Log in</a>
        @if (Route::has('register'))
          <a href="{{ route('register') }}" >Register</a>
        @endif
      @endauth
      </div>
    @endif
  </div>
</header>