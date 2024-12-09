<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== FAVICON ===============-->
      <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">

      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">

      <!--=============== SWIPER CSS ===============-->
      <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">

      <title>Responsive chips website</title>
   </head>
   <body>
      <!--==================== HEADER ====================-->
      <header class="header" id="header">
         <nav class="nav container">
            <a href="#" class="nav__logo">CHICU</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li>
                        <a href="#home" class="nav__link">Home</a>
                    </li>

                    <li>
                        <a href="#favorites" class="nav__link">Favorite</a>
                    </li>

                    <li>
                        <a href="#care" class="nav__link">Care</a>
                    </li>

                    <li>
                        <a href="#products" class="nav__link">Products</a>
                    </li>

                    <li>
                        <a href="#contact" class="nav__link">Contact</a>
                    </li>
                </ul>   

                <!-- Close button -->
                 <div class="nav__close" id="nav-close">
                    <i class="ri-close-large-line"></i>
                 </div>

                 <div class="nav__social">
                    <a href="https://www.facebook.com/" target="_blank" class="nav__social-link">
                        <i class="ri-facebook-circle-line"></i>
                    </a>

                    <a href="https://www.instagram.com/" target="_blank" class="nav__social-link">
                        <i class="ri-instagram-line"></i>
                    </a>

                    <a href="https://twitter.com/" target="_blank" class="nav__social-link">
                        <i class="ri-twitter-line"></i>
                    </a>
                 </div>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-apps-2-line"></i>
            </div>
         </nav>
      </header>

      <!--==================== MAIN ====================-->
      <main class="main">
         <!--==================== HOME ====================-->
         <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__data">
                    <h1 class="home__title">CHICU <br> WITH NO <br> LIMITS</h1>

                    <p class="home__description">
                        When you are hungry and don't have time 
                        to cook, snacks are the perfect solution, 
                        always prepare for midday hunger.
                    </p>

                    <img src="{{ asset('img/meat.png') }}" alt="image" class="home__meat">

                    <div class="home__buttons">
                        <a href="" class="button">Snack Now</a>
                        <a href="" class="button button__ghost">Buy Now</a>
                    </div>
                </div>

                <div class="home__images">
                    <div class="home__circle">
                        <div class="home__subcircle"></div>
                    </div>

                    <img src="{{ asset('img/home-chips.png') }}" alt="image" class="home__img">

                    <img src="{{ asset('img/chips-1.png') }}" alt="image" class="home__chips-1">
                    <img src="{{ asset('img/chips-2.png') }}" alt="image" class="home__chips-2">
                    <img src="{{ asset('img/chips-3.png') }}" alt="image" class="home__chips-3">
                    <img src="{{ asset('img/tomato-1.png') }}" alt="image" class="home__tomato-1">
                    <img src="{{ asset('img/tomato-2.png') }}" alt="image" class="home__tomato-2">
                    <img src="{{ asset('img/leaf-3.png') }}" alt="image" class="home__leaf">
                </div>
            </div>
         </section>

         <!--==================== FAVORITES ====================-->
         <section class="favorite section" id="favorites">
            <div class="favorites__container container grid">
                <div class="favorites__data">
                    <h2 class="section__title">DISCOVER YOUR <br> FAVORITE FLAVORS</h2>

                    <p class="favorites__description">
                        Try some exotic flavors or delicious 
                        toppings. We have collected some delicious 
                        snack recipes from around the world for you.
                    </p>

                    <img src="{{ asset('img/cheese.png') }}" alt="image" class="favorites__cheese-1">
                    <img src="{{ asset('img/cheese.png') }}" alt="image" class="favorites__cheese-2">
                    
                </div>

                <div class="favorites__swiper swiper">
                    <div class="swiper-wrapper">
                        <article class="favorites__article swiper-slide">
                            <img src="{{ asset('img/favorite-chips-1.png') }}" alt="image" class="favorites__img">

                            <img src="{{ asset('img/leaf-1.png') }}" alt="image" class="favorites__leaf-1">
                            <img src="{{ asset('img/leaf-2.png') }}" alt="image" class="favorites__leaf-2">
                        </article>

                        <article class="favorites__article swiper-slide">
                            <img src="{{ asset('img/favorite-chips-2.png') }}" alt="image" class="favorites__img">

                            <img src="{{ asset('img/leaf-1.png') }}" alt="image" class="favorites__leaf-1">
                            <img src="{{ asset('img/leaf-2.png') }}" alt="image" class="favorites__leaf-2">
                        </article>

                        <article class="favorites__article swiper-slide">
                            <img src="{{ asset('img/favorite-chips-3.png') }}" alt="image" class="favorites__img">

                            <img src="{{ asset('img/leaf-1.png') }}" alt="image" class="favorites__leaf-1">
                            <img src="{{ asset('img/leaf-2.png') }}" alt="image" class="favorites__leaf-2">
                        </article>
                    </div>
                </div>

            </div>
         </section>

         <!--==================== CARE ====================-->
         <section class="care section" id="care">
            <h2 class="section__title">ENJOY AND TAKE <br> CARE OF YOUR HEALTH</h2>

            <div class="care__container container grid">
                <ul class="care__list">
                    <li class="care__item">
                        <i class="ri-plant-line"></i>
                        <p>
                            The potatoes that are made into 
                            snacks are grown and harvested and 
                            are 100% organic.
                        </p>
                    </li>

                    <li class="care__item">
                        <i class="ri-fire-line"></i>
                        <p>
                            We fry the fries with vegetable and 
                            natural oil for good care.
                        </p>
                    </li>

                    <li class="care__item">
                        <i class="ri-heart-pulse-line"></i>
                        <p>
                            The potatoes are not processed, once 
                            cleaned they are cooked without 
                            preservatives.
                        </p>
                    </li>

                    <li class="care__item">
                        <i class="ri-hand-heart-line"></i>
                        <p>
                            They contain fewer calories and less 
                            fat for good health.
                        </p>
                    </li>
                </ul>
                <img src="{{ asset('img/care-chips.png') }}" alt="images" class="class__img">
            </div>
         </section>

         <!--==================== BANNER ====================-->
         <section class="banner">
            <div class="banner__container">
                <ul class="banner__list">
                    <li class="banner__item">
                        <i class="ri-leaf-line"></i>
                        <span>GOOD FOR NATURE</span>
                    </li>

                    <li class="banner__item">
                        <i class="ri-heart-pulse-line"></i>
                        <span>LOW CALORIES</span>
                    </li>
                </ul>
            </div>
         </section>

         <!--==================== PRODUCTS ====================-->
         <section class="products section" id="products">
            <h2 class="section__title">BEST SELLING <br> PRODUCT</h2>
            <div class="products__container container">
                <div class="products__content grid">
                    
                    @foreach($snack as $row)
                    <article class="products__card">
                        <img src="storage/{{$row->picture}}" alt="image" class="products__img">

                        <span class="products__subtitle">{{$row->title}}</span>
                        <h2 class="products__title">{{$row->name}}</h2>

                        <span class="products__price">$8</span>

                        <button class="products__button">
                            <i class="ri-shopping-bag-3-line"></i>
                        </button>

                    </article>
                    @endforeach
                </div>

                <img src="{{ asset('img/crab.png') }}" alt="image" class="products__crab">
                <img src="{{ asset('img/hamburger.png') }}" alt="image" class="products__hamburger">
                <img src="{{ asset('img/cheese.png') }}" alt="image" class="products__cheese">
            </div>
         </section>

         <!--==================== CONTACT ====================-->
         <section class="contact section" id="contact">
            <div class="contact__container container">
                <h2 class="section__title">CONTACT US TO <br> EAT CHIPS</h2>

                <div class="contact__content grid">
                    <div class="contact__data grid">
                        <div>
                            <h3 class="contact__title">Write to us</h3>

                            <div class="contact__social">
                                <a href="https://api.whatsapp.com/send?phone=51123456789&text=Hello, more information!" target="_blank">
                                    <i class="ri-whatsapp-fill"></i>
                                </a>

                                <a href="https://m.me/bedimcode" target="_blank">
                                    <i class="ri-messenger-fill"></i>

                                </a>
                                    
                                <a href="mailto:examplemail@correo.com" target="_blank">
                                    <i class="ri-mail-fill"></i>
                                </a>
                            </div>
                        </div>

                        <div>
                            <h3 class="contact__title">Call Us</h3>

                            <address class="contact__info">
                                +00-987-7654-321 <br>
                                +11-012345
                            </address>
                        </div>

                        <div>
                            <h3 class="contact__title">Find us here</h3>

                            <address class="contact__info">
                                Lima - Sun City - Peru <br>
                                Av. Moon #4321
                            </address>
                        </div>

                    </div>

                    <img src="{{ asset('img/contact-man.png') }}" alt="image" class="contact__img">
                </div>

                <img src="{{ asset('img/shrimp.png') }}" alt="image" class="contact__shrimp">
                <img src="{{ asset('img/crab.png') }}" alt="image" class="contact__crab">
                <img src="{{ asset('img/meat.png') }}" alt="image" class="contact__meat">
            </div>
         </section>
      </main>

      <!--==================== FOOTER ====================-->
      <footer class="footer">
         <div class="footer__container container grid">
            <a href="#" class="footer__logo">CHIPS</a>

            <div class="footer__content grid">
                <a href="#" class="footer__link">Terms & Agreements</a>
                <a href="#" class="footer__link">Privacy Policy</a>

                <span class="footer__copy">
                    &#169; All Rights Reserved By Chicu
                </span>
            </div>
         </div>
      </footer>

      <!--========== SCROLL UP ==========-->
       <a href="#" class="scrollup" id="scroll-up">
         <i class="ri-arrow-up-line"></i>
       </a>

      <!--=============== SCROLLREVEAL ===============-->
      <script src="{{ asset('js/scrollreveal.min.js') }}"></script>

      <!--=============== SWIPER JS ===============-->
      <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>

      <!--=============== MAIN JS ===============-->
      <script src="{{ asset('js/apps.js') }}"></script>
   </body>
</html>