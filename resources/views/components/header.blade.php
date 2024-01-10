<header class="navBar">
    <a href="{{ url('/') }}"> 
      <img src={{ URL::asset('Logo.svg'); }} alt="DijaTourLogo">
    </a>
    <div  class="navBarRightContent_items">
      <a class="navBarRightContent_item">
        <div>Voyages</div>
        <img src={{ URL::asset('chevron-up.svg');}} alt="chevron">
      </a>
      <div class="navBarRightContent_item">
        <div>Évènements</div>
        <img src={{ URL::asset('chevron-up.svg');}} alt="chevron">
      </div>
      <div class="navBarRightContent_item">
        <div>Circuits</div>
        <img src={{ URL::asset('chevron-up.svg');}} alt="chevron">
      </div>
      <div class="navBarRightContent_item">
        Hajj & Omra
      </div>
      <div class="navBarRightContent_item">Croisières</div>
      <div class="navBarRightContent_item">Qui sommes nous ?</div>
      <div class="navBarRightContent_item">Contact</div>
      @if (Route::has('login'))
      <div class="rightBtnGap">
        @auth
       <div class="navBarRightContent_item navBarButton">
          <a href="{{ url('/dashboard') }}" >Dashboard</a>
       </div>
          @else
          <div class="navBarRightContent_item navBarButton">
            <a href="{{ route('login') }}" >Log in</a>
          </div>
          @if (Route::has('register'))
          <div class="navBarRightContent_item navBarButton">
            <a href="{{ route('register') }}" >Register</a>
          </div>
            @endif
        @endauth
      
      @endif
      </div>
       
    </div>
</header>