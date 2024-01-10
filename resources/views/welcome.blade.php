<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src={{ URL::asset('https://code.jquery.com/jquery-3.2.1.min.js'); }} integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <link rel="preconnect" href={{ URL::asset('https://fonts.googleapis.com'); }}>
    <script src={{ URL::asset('Landing.js'); }}></script>
    <link rel="stylesheet" type="text/css" href={{ asset('Landing.css'); }} />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href={{ URL::asset('https://fonts.googleapis.com/css2?family=Inter:wght@400;450;500;600;700;800&display=swap'); }} rel="stylesheet">
    <title>Landing</title>
</head>
    <body class="antialiased">
        <x-header></x-header>
        <main>
            <div class="mainHeader">
              <div class="mainHeader_Texts">
                <div>Agence de voyage</div>
                <div>Le monde selon vos envies.</div>
              </div>
             
            </div>
            
            <div class="mainHeader_searchBox">
              <x-iframe-body></x-iframe-body>
            </div>
            <div class="sectionsContainer">
              <section class="firstSection">
              <div class="firstSection_firstContents">
                <div class="firstSection__firstContent_texts">
                  <div>Prêt pour une nouvelle aventure?</div>
                  <div>Trouvez votre prochaine destination.</div>
                </div>
                <div class="firstSection__firstContent_buttons">
                  <img src={{ URL::asset('leftButton.svg'); }} id="leftButton" alt="leftButton">
                  <img src={{ URL::asset('rightButton.svg'); }} id="rightButton" alt="rightButton">
                </div>
              </div>
              <div class="firstSection_secondContents">
                <div id="firstSection_carouselContainer">
                  <div id="firstSection_carousel">
                    <div class="firstSection_carouselItems">
                      <img src={{ URL::asset('asia.svg'); }} alt="Image 1" class="sfg">
                      <div class="text-overlay">Text 1</div>
                    </div>
                    <div class="firstSection_carouselItems">
                      <img src={{ URL::asset('asia.svg'); }} alt="Image 1">
                      <div class="text-overlay">Text 1</div>
                    </div>
                    <div class="firstSection_carouselItems">
                      <img src={{ URL::asset('asia.svg'); }} alt="Image 1">
                      <div class="text-overlay">Text 1</div>
                    </div>
                    <div class="firstSection_carouselItems">
                      <img src={{ URL::asset('asia.svg'); }} alt="Image 1">
                      <div class="text-overlay">Text 1</div>
                    </div>
                    <div class="firstSection_carouselItems">
                      <img src={{ URL::asset('asia.svg'); }} alt="Image 1">
                      <div class="text-overlay">Text 1</div>
                    </div>
                    <div class="firstSection_carouselItems">
                      <img src={{ URL::asset('asia.svg'); }} alt="Image 1">
                      <div class="text-overlay">Text 1</div>
                    </div>
                  </div>
                </div>
      
              </div>
              </section>
              <section class="secondSection">
                  <img src={{ URL::asset('scndSectionLeft.svg'); }} alt="travelImage" id="scndSectionImage">
                  <div class="secondSection_rightContent">
                    <div class="secondSection_rightContent_Texts">
                      <div>Who we're for & what we do</div>
                      <p>Our group trips are so much more than your average holiday. Carefully crafted for young, intrepid travellers in their 20s & 30s our tours offer real adventure, real people, and real travel without compromise.</p>
                    </div>
                    <div class="secondSection_rightContent_button">Learn more</div>
                  </div>
              </section>
              <section class="thirdSection">
                <div class="thirdSection_firstOne">
                  <div class="thirdSection_firstOne_Texts">
                    <div>nos bon plans</div>
                    <div>Découvrez nos meilleures voyage organisé</div>
                  </div>
                  <div class="thirdSection_firstOne_Cards">
                    <div class="thirdSection_firstOne_Card">
                     <img src={{ URL::asset('cardFirstImage.svg'); }} alt="" >
                     <div class="thirdSection_firstOne_CardContents">
                       <div class="thirdSection_firstOne_CardContents_texts">
                         <div>Spirit of Central America</div>
                         <div>Trouvez votre fraîcheur caribéenne avec 10 jours d'exploration des plages éblouissantes, des sites antiques et des villes coloniales du Mexique, du Belize et du Guatemala.</div>
                       </div>
                       <div class="thirdSection_firstOne_CardContents_button">10 jours à MAD 3,123</div>
                     </div>
                    </div>
                    <div class="thirdSection_firstOne_Card">
                     <img src={{ URL::asset('cardFirstImage.svg'); }} alt="">
                     <div class="thirdSection_firstOne_CardContents">
                       <div class="thirdSection_firstOne_CardContents_texts">
                         <div>Spirit of Central America</div>
                         <div>Trouvez votre fraîcheur caribéenne avec 10 jours d'exploration des plages éblouissantes, des sites antiques et des villes coloniales du Mexique, du Belize et du Guatemala.</div>
                       </div>
                       <div class="thirdSection_firstOne_CardContents_button">10 jours à MAD 3,123</div>
                     </div>
                    </div>
                    <div class="thirdSection_firstOne_Card">
                     <img src={{ URL::asset('cardFirstImage.svg'); }} alt="">
                     <div class="thirdSection_firstOne_CardContents">
                       <div class="thirdSection_firstOne_CardContents_texts">
                         <div>Spirit of Central America</div>
                         <div>Trouvez votre fraîcheur caribéenne avec 10 jours d'exploration des plages éblouissantes, des sites antiques et des villes coloniales du Mexique, du Belize et du Guatemala.</div>
                       </div>
                       <div class="thirdSection_firstOne_CardContents_button">10 jours à MAD 3,123</div>
                     </div>
                    </div>
                  </div>
                </div>
                <div class="thirdSection_SecondOne">
                  <div>
                    <img src={{ URL::asset('marriottLogo.svg'); }} alt="" >
                  </div>
                  <div>
                    <img src={{ URL::asset('sofitelLogo.svg'); }} alt="">
                  </div>
                  <div>
                    <img src={{ URL::asset('onomoLogo.svg'); }} alt="">
                  </div>
                  <div>
                    <img src={{ URL::asset('goldentulipLogo.svg'); }} alt="">
                  </div>
                </div>         
              </section>
              <section class="fourthSection">
                <div class="fourthSection_texts">
                  <div>Dive headfirst into one of our last minute trips.</div>
                  <div>Don’t wait for your next adventure</div>
                </div>
                <div class="fourthSection_cards">
                  <div class="fourthSection_card">
                    <img src={{ URL::asset('fourthCardFirstImage.svg'); }} alt="Caribbean">
                    <div class="fourthSection_card_rightContents">
                      <div class="fourthSection_card_texts">
                        <div>Spirit of Central America</div>
                        <div>Find your Caribbean cool with 10 days exploring the dazzling beaches</div>
                      </div>
                      <div class="fourthSection_card_button">7 jours à MAD 1,500</div>
                    </div>
                  </div>
                  <div class="fourthSection_card">
                    <img src={{ URL::asset('fourthCardSecondImage.svg'); }} alt="Caribbean">
                    <div class="fourthSection_card_rightContents">
                      <div class="fourthSection_card_texts">
                        <div>Spirit of Central America</div>
                        <div>Find your Caribbean cool with 10 days exploring the dazzling beaches</div>
                      </div>
                      <div class="fourthSection_card_button">7 jours à MAD 1,500</div>
                    </div>
                  </div>
                  <div class="fourthSection_card">
                    <img src={{ URL::asset('fourthCardSecondImage.svg'); }} alt="Caribbean">
                    <div class="fourthSection_card_rightContents">
                      <div class="fourthSection_card_texts">
                        <div>Spirit of Central America</div>
                        <div>Find your Caribbean cool with 10 days exploring the dazzling beaches</div>
                      </div>
                      <div class="fourthSection_card_button">7 jours à MAD 1,500</div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            <section class="fifthSection">
              <div class="fifthSection_leftContents">
                  <div class="fifthSection_leftContents_texts">
                    <div>Obtenez de l'aide auprès de véritables experts en voyage</div>
                    <div>Our group trips are so much more than your average holiday. Carefully crafted for young, intrepid travellers in their 20s & 30s.</div>
                  </div>
                  <div class="fifthSection_leftContents_button">Learn more</div>
              </div>
              <div class="fifthSection_rightContent">
                <img src={{ URL::asset('DjTrFifthLogo.svg'); }} alt="Dija tour logo" >
              </div>
            </section>   
          </main>
        {{-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

          
        </div> --}}
        <x-footer></x-footer> 
          
    </body>
</html>
