@extends('frontend.main_page')
@section('home_page')
<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>  
            
            <nav class="menu-box">
                <div class="nav-logo"><a href=""><img src="{{ asset('frontend/assets/images/logo.png') }}" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>1710 W Riverstone Dr, Marion, USA</li>
                        <li><a href="tel:+1208-5848-XXXX">+1 208-5848-XXXX</a></li>
                        <li><a href="mailto:support@example.com">support@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index-2.html"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li><a href="index-2.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index-2.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index-2.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index-2.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->

        
        <!-- hidden-sidebar -->
        <section class="hidden-sidebar side-navigation">
            <span class="close-button side-navigation-close-btn icofont-close"></span><!-- /.close-button -->
            <div class="sidebar-content">
                <div class="nav-logo"><a href=""><img src="{{ asset('frontend/assets/images/logo.png') }}" alt="" title=""></a></div>
            </div>
            <div class="sidebar-text">
                <h4>About Us</h4>
                <p>Indulge in delicious, freshly prepared meals at Rave. From savory bites to sweet treats, experience exceptional flavors in a cozy, welcoming atmosphere. Taste the difference today!</p>
            </div>
            <div class="sidebar-from">
                <h4>Get a free quote</h4>
                <form method="POST" action="https://megamindlab.com/html/rave/bookatable.php" id="contact-form"> 
                    <input type="hidden" name="form_type" value="quote_form">
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group p-0">
                        <input type="text" name="username" placeholder="Your Name" required="">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group p-0">
                        <input type="email" name="email" placeholder="Your email" required="">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group p-0">
                        <textarea name="message" placeholder="Message"></textarea>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn p-0">
                        <div class="submit more__button button__three"> 
                            <button class="theme-btn-three style1" type="submit" name="submit-form">Send Message </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="sidebar-social-network">
                <div class="title__social">
                    <h6>Social Network:</h6>
                </div>
                <div class="sidebar__media">
                    <ul class="social____media">
                        <li class="sidebar__media__icon"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="sidebar__media__icon"><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li class="sidebar__media__icon"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- hidden-sidebar end -->

         <!-- banner one -->
         <section class="banner-section banner-section--update style-one">
            <div class="banner-carousel owl-theme owl-carousel owl-dots-none nav-style-one">
                <div class="slide-item" data-dot="<button role='button' class='owl-dot'>1</button>">
                    <div class="auto-container">
                        <div class="anim-icon">
                            <div class="icon icons-1 " data-parallax='{"x": 500}' style="background-image: url({{ asset('frontend/assets/images/banner/banner-twig.png') }}); z-index: 1;"></div>
                        </div>
                        <div class="banner__top__text">
                            <h1 class="heading-primary">RAVE</h1>
                        </div>
                        <div class="content-inner">
                            <div class="content-box">
                                <div class="sub____title">
                                    <span>Welcome To Rave</span>
                                </div>
                                <h2 class="heading-primary">A Timeless <span>Taste</span></h2>
                                <p>Us percipit urbanitas referrentur ea. Mei at numquam molestiae intellegam. <br> Ansed dictas accumsan. Nam sint atqui voluptatibus an, pro ne malis semper perpetua, <br>vim nulla exerci prompta no. Nam eirmod maluisset ad. </p>
                                <div class="btn-box">
                                    <a href="index-2.html" class="theme-btn-three style1">View More</a>
                                </div>
                            </div>
                            <figure class="image-box style-one">
                                <img src="{{ asset('frontend/assets/images/banner/banner-item-3.jpg') }}" alt="">
                            </figure>
                        </div>  
                    </div>
                </div>
                <div class="slide-item" data-dot="<button role='button' class='owl-dot'>2</button>">
                    <div class="auto-container">
                        <div class="anim-icon">
                            <div class="icon icons-1 " data-parallax='{"x": 500}' style="background-image: url({{ asset('frontend/assets/images/banner/banner-twig.png') }});"></div>
                        </div>
                        <div class="banner__top__text">
                            <h1 class="heading-primary">RAVE</h1>
                        </div>
                        <div class="content-inner">
                            <div class="content-box">
                                <div class="sub____title">
                                    <span>Welcome To Rave</span>
                                </div>
                                <h2 class="heading-primary">A Timeless <span>Taste</span></h2>
                                <p>Us percipit urbanitas referrentur ea. Mei at numquam molestiae intellegam. <br> Ansed dictas accumsan. Nam sint atqui voluptatibus an, pro ne malis semper perpetua, <br>vim nulla exerci prompta no. Nam eirmod maluisset ad. </p>
                                <div class="btn-box">
                                    <a href="index-2.html" class="theme-btn-three style1">View More</a>
                                </div>
                            </div>
                            <figure class="image-box style-one">
                                <img src="{{ asset('frontend/assets/images/banner/banner-item-2.jpg') }}" alt="">
                            </figure>
                        </div>  
                    </div>
                </div>
                <div class="slide-item" data-dot="<button role='button' class='owl-dot'>3</button>">
                    <div class="auto-container">
                        <div class="anim-icon" >
                            <div class="icon icons-1 " data-parallax='{"x": 500}' style="background-image: url({{ asset('frontend/assets/images/banner/banner-twig.png') }});"></div>
                        </div>
                        <div class="banner__top__text">
                            <h1 class="heading-primary">RAVE</h1>
                        </div>
                        <div class="content-inner">
                            <div class="content-box">
                                <div class="sub____title">
                                    <span>Welcome To Rave</span>
                                </div>
                                <h2 class="heading-primary">A Timeless <span>Taste</span></h2>
                                <p>Us percipit urbanitas referrentur ea. Mei at numquam molestiae intellegam. <br> Ansed dictas accumsan. Nam sint atqui voluptatibus an, pro ne malis semper perpetua, <br>vim nulla exerci prompta no. Nam eirmod maluisset ad. </p>
                                <div class="btn-box">
                                    <a href="index-2.html" class="theme-btn-three style1">View More</a>
                                </div>
                            </div>
                            <figure class="image-box style-one">
                                <img src="{{ asset('frontend/assets/images/banner/banner-item-1.jpg') }}" alt="">
                            </figure>
                        </div>  
                    </div>
                </div>
            </div>
        </section>
         <!-- banner one end-->

        <!-- about-us --> 
        <section class="about__us about__us--wrapper see__pad p_relative">
            <div class="anim-icon" >
                <div class="icon icons-1 " data-parallax='{"x": 50}'></div>
                <div class="icon icons-2 " style="background-image: url({{ asset('frontend/assets/images/shape/shape-02.png)') }};"></div>
            </div>
             <div class="about__us__content">
                <div class="medium-container">
                    <div class="row">
                        <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                            <div class="title__section">
                                <div class="sub____title">
                                    <span>About Us</span>
                                </div>
                                <div class="main____title">
                                    <h2 class="heading-primary">Heaven and Earth exist in <br>
                                        relation <span> to one another.</span></h2>
                                </div>
                            </div>
                            <div class="normal__text">
                                <p>Lorem ipsum dolor sit amet porta tincidunt. Duis vehicula est tempus cursus, consequat varius lorem rutrum. Ut convallis , id consectetur orci faucibus eu. Proin aliquet maximus elit ut volutpat. Mauris eget nisl nisl, pharetra ut risus vel, blandit sodales libero. Quisque ultricies, erat id semper fringilla, purus ante dictum metus, ac scelerisque justo metus et eros. </p> <br>
                                <p> Nullam consequat elit libero nec accumsan. Vestibulum finibus nulla quis tristique pulvinar.</p>
                            </div>
                            <div class="btn-box mt-35">
                                <a href="about.html" class="theme-btn-three style1">View More</a>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-6 col-md-12 col-sm-12 p_relative image-column">
                            <div class="about__right__img ">
                                <div class="about__right__img__one p_absolute">
                                    <figure>
                                        <img class="rotate-me" src="{{ asset('frontend/assets/images/resource/image-3.png') }}" alt="">
                                    </figure>
                                </div>
                                <div class="about__right__img__two wow slideInRight animated animated" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: slideInRight;">
                                    <figure>
                                        <img src="{{ asset('frontend/assets/images/resource/about-home.png') }}" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
         </section>
         <!-- about-us end-->

         <section class="product__section product__section_one product__section--update see__pad front-pad">
            <div class="medium-container">
                <div class="food__left__content">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="food__section__block__one  wow slideInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInUp;">
                                <div class="food___img___block">
                                    <div class="img__block">
                                        <figure>
                                            <img src="{{ asset('frontend/assets/images/resource/k-food-01.png') }}" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <div class="food___text">
                                    <h6>Hygienic Food</h6>
                                    <p>Himenaeos cubilia integer rutrum<br> bibendum litora  Integer aliquam nisi sit amet magna suscipit, fermentum mattis erat libero lectus.</p> 
                                    <div class="more__button">
                                        <a href="#">More View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="food__section__block__one  wow slideInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInUp;">
                                <div class="food___img___block">
                                    <div class="img__block">
                                        <figure>
                                            <img src="{{ asset('frontend/assets/images/resource/k-food-02.png') }}" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <div class="food___text">
                                    <h6>Fresh Environment</h6>
                                    <p>Himenaeos cubilia integer rutrum<br> bibendum litora  Integer aliquam nisi sit amet magna suscipit, fermentum mattis erat libero lectus.</p>
                                    <div class="more__button">
                                        <a href="index-2.html">More View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="food__section__block__one  wow slideInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInUp;">
                                <div class="food___img___block">
                                    <div class="img__block">
                                        <figure>
                                            <img src="{{ asset('frontend/assets/images/resource/k-food-03.png') }}" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <div class="food___text">
                                    <h6>Skilled Chefs</h6>
                                    <p>Himenaeos cubilia integer rutrum<br> bibendum litora  Integer aliquam nisi sit amet magna suscipit, fermentum mattis erat libero lectus.</p>
                                    <div class="more__button">
                                        <a href="index-2.html">More View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="food__section__block__one  wow slideInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInUp;">
                                <div class="food___img___block">
                                    <div class="img__block">
                                        <figure>
                                            <img src="{{ asset('frontend/assets/images/resource/k-food-04.png') }}" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <div class="food___text">
                                    <h6>Event & Party</h6>
                                    <p>Himenaeos cubilia integer rutrum<br> bibendum litora  Integer aliquam nisi sit amet magna suscipit, fermentum mattis erat libero lectus.</p>
                                    <div class="more__button">
                                        <a href="index-2.html">More View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <!-- kind-of-food end --> 

        <!-- our-choice-section --> 
        <section class="our__choice__section menu__from__section menu__from__section--update four see__pad p_relative">
            <div class="anim-icon" >
                <div class="icon icons-1" data-parallax='{"y": -100}' style="background-image: url({{ asset('frontend/assets/images/shape/shape-03.png') }});"></div>
                <div class="icon icons-2"  data-parallax='{"y": -100}' style="background-image: url({{ asset('frontend/assets/images/shape/shape-04.png') }});"></div>
                <div class="icon icons-3" data-parallax='{"y": -50}' style="background-image: url({{ asset('frontend/assets/images/shape/shape-05.png') }});"></div>
            </div>
            <div class="auto-container">
                <div class="center__title">
                    <div class="title__section">
                        <div class="sub____title">
                            <span>Special selection</span>
                        </div>
                        <div class="main____title p_relative">
                            <h2 class="heading-primary">From <span> Our Menu</span></h2>
                        </div>
                        <div class="divider wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"><div></div></div>
                    </div>
                </div>
            </div>
            <div class="medium-container">
                <div class="tabs-box">
                    <div class="tab-btn-box p_relative d_block mb_60 centred">
                        <ul class="tab-btns tab-buttons clearfix">
                            <li class="tab-btn" data-tab="#tab-1">                                             
                                <div class="tab___all">
                                    <div class="tab___img">
                                        <div class="img___one">
                                            <img src="{{ asset('frontend/assets/images/menu-item/appetizer_1.png') }}" alt="">
                                        </div>
                                        <div class="img___two d-none">
                                            <img src="{{ asset('frontend/assets/images/menu-item/appetizer_bg_1.png') }}" alt="">
                                        </div>
                                    </div>
                                    <h6>Appetizers </h6>
                                </div>
                            </li>
                            <li class="tab-btn active-btn" data-tab="#tab-2">
                                <div class="tab___all">
                                    <div class="tab___img">
                                        <div class="img___one">
                                            <img src="{{ asset('frontend/assets/images/menu-item/salads_1.png') }}" alt="">
                                        </div>
                                        <div class="img___two d-none">
                                            <img src="{{ asset('frontend/assets/images/menu-item/salads_bg_1.png') }}" alt="">
                                        </div>
                                    </div>
                                    <h6>Mains</h6>
                                </div>
                            </li>
                            <li class="tab-btn" data-tab="#tab-4">
                                <div class="tab___all">
                                    <div class="tab___img">
                                        <div class="img___one">
                                            <img src="{{ asset('frontend/assets/images/menu-item/dessert_4.png') }}" alt="">
                                        </div>
                                        <div class="img___two d-none">
                                            <img src="{{ asset('frontend/assets/images/menu-item/dessert_bg_4.png') }}" alt="">
                                        </div>
                                    </div>
                                    <h6>Dessert</h6>
                                </div>  
                            </li>
                        </ul>
                    </div>
                    <div class="tabs-content wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="3000ms">
                        <div class="tab" id="tab-1">
                            <div class="inner-box">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="menu__from__block two ">
                                            <div class="menu__text__block">
                                                <div class="menu__list">
                                                    <ul class="name__price__shrtd body__one two">
                                                        <li>
                                                            <div class="menu__content__block">
                                                                <div class="menu__item__img">
                                                                    <figure>
                                                                        <img src="{{ asset('frontend/assets/images/menu-item/starters-1.png') }}" alt="">
                                                                    </figure>
                                                                </div>
                                                                <div class="menu__content">
                                                                    <ul class="name__price">
                                                                        <li>Spring Rolls</li>
                                                                        <li>$5.95</li>
                                                                    </ul>
                                                                    <p>Crispy rolls filled with vegetables.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="menu__content__block">
                                                                <div class="menu__item__img">
                                                                    <figure>
                                                                        <img src="{{ asset('frontend/assets/images/menu-item/starters-3.png') }}" alt="">
                                                                    </figure>
                                                                </div>
                                                                <div class="menu__content">
                                                                    <ul class="name__price">
                                                                        <li>Paneer Tikka</li>
                                                                        <li>$29</li>
                                                                    </ul>
                                                                    <p>Grilled paneer cubes, spiced.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="menu__content__block">
                                                                <div class="menu__item__img">
                                                                    <figure>
                                                                        <img src="{{ asset('frontend/assets/images/menu-item/starters-5.png') }}" alt="">
                                                                    </figure>
                                                                </div>
                                                                <div class="menu__content">
                                                                    <ul class="name__price">
                                                                        <li>Chili Mushrooms</li>
                                                                        <li>$18</li>
                                                                    </ul>
                                                                    <p>Crispy mushrooms with a tangy twist.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="menu__from__block two ">
                                            <div class="menu__text__block">
                                                <div class="menu__list">
                                                    <ul class="name__price__shrtd body__one">
                                                        <li>
                                                            <div class="menu__content__block">
                                                                <div class="menu__item__img">
                                                                    <figure>
                                                                        <img src="{{ asset('frontend/assets/images/menu-item/starters-2.png') }}" alt="">
                                                                    </figure>
                                                                </div>
                                                                <div class="menu__content">
                                                                    <ul class="name__price">
                                                                        <li>Aloo Tikki</li>
                                                                        <li>$29</li>
                                                                    </ul>
                                                                    <p>Golden potato patties served.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="menu__content__block">
                                                                <div class="menu__item__img">
                                                                    <figure>
                                                                        <img src="{{ asset('frontend/assets/images/menu-item/starters-4.png') }}" alt="">
                                                                    </figure>
                                                                </div>
                                                                <div class="menu__content">
                                                                    <ul class="name__price">
                                                                        <li>Hara Kebab</li>
                                                                        <li>$59</li>
                                                                    </ul>
                                                                    <p>Green vegetable and kebabs.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="menu__content__block">
                                                                <div class="menu__item__img">
                                                                    <figure>
                                                                        <img src="{{ asset('frontend/assets/images/menu-item/starters-6.png') }}" alt="">
                                                                    </figure>
                                                                </div>
                                                                <div class="menu__content">
                                                                    <ul class="name__price">
                                                                        <li>Veg Pakoras</li>
                                                                        <li>$59</li>
                                                                    </ul>
                                                                    <p>Crispy vegetable fritter.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab active-tab" id="tab-2">
                            <div class="inner-box">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="menu__from__block two ">
                                            <div class="menu__text__block">
                                                <div class="menu__list">
                                                    <ul class="name__price__shrtd body__one two">
                                                        <li>
                                                            <div class="menu__content__block">
                                                                <div class="menu__item__img">
                                                                    <figure>
                                                                        <img src="{{ asset('frontend/assets/images/menu-item/vegetables-1.png') }}" alt="">
                                                                    </figure>
                                                                </div>
                                                                <div class="menu__content">
                                                                    <ul class="name__price">
                                                                        <li>Veg Biryani</li>
                                                                        <li>$29</li>
                                                                    </ul>
                                                                    <p>Octopus Fennel pairs tender.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="menu__content__block">
                                                                <div class="menu__item__img">
                                                                    <figure>
                                                                        <img src="{{ asset('frontend/assets/images/menu-item/starters-3.png') }}" alt="">
                                                                    </figure>
                                                                </div>
                                                                <div class="menu__content">
                                                                    <ul class="name__price">
                                                                        <li>Paneer Butter</li>
                                                                        <li>$18</li>
                                                                    </ul>
                                                                    <p>Corn Tostada offers a crunchy.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="menu__content__block">
                                                                <div class="menu__item__img">
                                                                    <figure>
                                                                        <img src="{{ asset('frontend/assets/images/menu-item/vegetables-5.png') }}" alt="">
                                                                    </figure>
                                                                </div>
                                                                <div class="menu__content">
                                                                    <ul class="name__price">
                                                                        <li>Aloo Gobi</li>
                                                                        <li>$29</li>
                                                                    </ul>
                                                                    <p>Spicy Bites features crispy.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="menu__from__block two ">
                                            <div class="menu__text__block">
                                                <div class="menu__list">
                                                    <ul class="name__price__shrtd body__one">
                                                        <li>
                                                            <div class="menu__content__block">
                                                                <div class="menu__item__img">
                                                                    <figure>
                                                                        <img src="{{ asset('frontend/assets/images/menu-item/vegetables-2.png') }}" alt="">
                                                                    </figure>
                                                                </div>
                                                                <div class="menu__content">
                                                                    <ul class="name__price">
                                                                        <li>Baingan Bharta</li>
                                                                        <li>$59</li>
                                                                    </ul>
                                                                    <p>Crispy, freshly made chips.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="menu__content__block">
                                                                <div class="menu__item__img">
                                                                    <figure>
                                                                        <img src="{{ asset('frontend/assets/images/menu-item/vegetables-4.png') }}" alt="">
                                                                    </figure>
                                                                </div>
                                                                <div class="menu__content">
                                                                    <ul class="name__price">
                                                                        <li>Palak Paneer</li>
                                                                        <li>$5.95</li>
                                                                    </ul>
                                                                    <p>Esty Rolls are filled.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="menu__content__block">
                                                                <div class="menu__item__img">
                                                                    <figure>
                                                                        <img src="{{ asset('frontend/assets/images/menu-item/starters-6.png') }}" alt="">
                                                                    </figure>
                                                                </div>
                                                                <div class="menu__content">
                                                                    <ul class="name__price">
                                                                        <li>Veg. Curry</li>
                                                                        <li>$29</li>
                                                                    </ul>
                                                                    <p>Fire Grill offers perfectly.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-4">
                            <div class="inner-box">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="menu__from__block two ">
                                            <div class="menu__text__block">
                                                <div class="menu__list">
                                                    <ul class="name__price__shrtd body__one two">
                                                        <li>
                                                            <div class="menu__content__block">
                                                                <div class="menu__item__img">
                                                                    <figure>
                                                                        <img src="{{ asset('frontend/assets/images/menu-item/desserts-1.png') }}" alt="">
                                                                    </figure>
                                                                </div>
                                                                <div class="menu__content">
                                                                    <ul class="name__price">
                                                                        <li>Choco Lava Cake</li>
                                                                        <li>$18</li>
                                                                    </ul>
                                                                    <p>Warm, gooey chocolate cake.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="menu__content__block">
                                                                <div class="menu__item__img">
                                                                    <figure>
                                                                        <img src="{{ asset('frontend/assets/images/menu-item/desserts-3.png') }}" alt="">
                                                                    </figure>
                                                                </div>
                                                                <div class="menu__content">
                                                                    <ul class="name__price">
                                                                        <li>Tiramisu</li>
                                                                        <li>$59</li>
                                                                    </ul>
                                                                    <p>A creamy, coffee-flavored.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="menu__content__block">
                                                                <div class="menu__item__img">
                                                                    <figure>
                                                                        <img src="{{ asset('frontend/assets/images/menu-item/desserts-5.png') }}" alt="">
                                                                    </figure>
                                                                </div>
                                                                <div class="menu__content">
                                                                    <ul class="name__price">
                                                                        <li>Berry Cake</li>
                                                                        <li>$29</li>
                                                                    </ul>
                                                                    <p>Smooth cheesecake topped.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="menu__from__block two ">
                                            <div class="menu__text__block">
                                                <div class="menu__list">
                                                    <ul class="name__price__shrtd body__one">
                                                        <li>
                                                            <div class="menu__content__block">
                                                                <div class="menu__item__img">
                                                                    <figure>
                                                                        <img src="{{ asset('frontend/assets/images/menu-item/desserts-2.png') }}" alt="">
                                                                    </figure>
                                                                </div>
                                                                <div class="menu__content">
                                                                    <ul class="name__price">
                                                                        <li>Gulab Jamun</li>
                                                                        <li>$59</li>
                                                                    </ul>
                                                                    <p>Soft, syrup-soaked Indian.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="menu__content__block">
                                                                <div class="menu__item__img">
                                                                    <figure>
                                                                        <img src="{{ asset('frontend/assets/images/menu-item/desserts-4.png') }}" alt="">
                                                                    </figure>
                                                                </div>
                                                                <div class="menu__content">
                                                                    <ul class="name__price">
                                                                        <li>Vanilla Panna</li>
                                                                        <li>$59</li>
                                                                    </ul>
                                                                    <p>Creamy, silky dessert.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="menu__content__block">
                                                                <div class="menu__item__img">
                                                                    <figure>
                                                                        <img src="{{ asset('frontend/assets/images/menu-item/desserts-6.png') }}" alt="">
                                                                    </figure>
                                                                </div>
                                                                <div class="menu__content">
                                                                    <ul class="name__price">
                                                                        <li>Apple Pie</li>
                                                                        <li>$18</li>
                                                                    </ul>
                                                                    <p>Warm, spiced apple fill.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- our-choice-section-end -->

         <!-- video-section --> 
         <section class="video__section video__section--update p_relative">
            <div class="anim-icon" >
                <div class="icon icons-3" style="background-image: url({{ asset('frontend/assets/images/shape/shape-05.png') }});"></div>
            </div>
            <div class="video__section__one">
                <div class="video__section__bg" style="background-image: url({{ asset('frontend/assets/images/background/banner-2.jpg') }});">
                    <div class="food__right__img_feature_image">
                        <img class="d-block d-lg-none" src="{{ asset('frontend/assets/images/background/banner-2.jpg') }}" alt="">
                    </div>
                    <div class="row">
                        <div class="col-lg-7 left-column">
                            <div class="video___block">
                                <div class="video__btn">
                                    <a href="https://youtu.be/lcU3pruVyUw?si=N6VAQDKPAmH7219O" class="lightbox-image video-btn p_relative d_iblock w_80 h_80 lh_85 text-center b_radius_50" data-caption=""><span class="icon-video"></span></a>
                                </div>
                                <div class="video__text">
                                    <h4>We create delightful experiences.</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 right-column">
                            <div class="right__tab__section p_relative">
                                <div class="anim-icon" >
                                    <div class="icon icons-4"  data-parallax='{"y": 200}' style="background-image: url({{ asset('frontend/assets/images/shape/shape-07.png') }});"></div>
                                </div>
                                <div class="title__section">
                                    <div class="sub____title">
                                        <span>Reservations</span>
                                    </div>
                                    <div class="main____title p_relative">
                                        <h2 class="heading-primary">Just a Sip Away <span> from Perfection.</span></h2>
                                    </div>
                                    <div class="divider wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"><div></div></div>
                                </div>
                                <div class="tab__section">
                                    <p class="body__four">The proper way to hold a wineglass is to position it so that the wine goes your mouth. intelligently sip a glass.</p>
                                    <div class="accordian-boxed">
                                        <!--Accordian Box-->
                                        <ul class="accordion-box alt">                            
                                            <!--Block-->
                                            <li class="accordion block active-block">
                                                <div class="acc-btn active">
                                                    <div class="icon-outer">
                                                        <span class="icon-plus"></span>
                                                         <span class="icon-close"></span>
                                                    </div>
                                                  <span class="body__one">Classic Cocktails</span>  
                                                </div>
                                                <div class="acc-content" style="display: block;">
                                                    <div class="content">
                                                        <ul>  
                                                            <li><span class="name">Coco spice </span> <span class="price">$9.50</span></li>
                                                            <li><span class="name">Tequila sunrise </span> <span class="price">$9.50</span></li>
                                                            <li><span class="name">Cuba libre </span> <span class="price">$9.50</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <!--Block-->
                                            <li class="accordion block">
                                                <div class="acc-btn">
                                                    <div class="icon-outer">
                                                        <span class="icon-plus"></span> 
                                                        <span class="icon-close"></span>
                                                    </div>
                                                   <span class="body__one">Reds & whites Wine</span> 	
                                                </div>
                                                <div class="acc-content" style="display: none;">
                                                    <div class="content">
                                                        <ul>  
                                                            <li><span class="name">Chardonnay hand </span> <span class="price">$9.50</span></li>
                                                            <li><span class="name">Moscato Cavit </span> <span class="price">$9.50</span></li>
                                                            <li><span class="name">Riesling michelle </span> <span class="price">$9.50</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>                            
                                            <!--Block-->
                                            <li class="accordion block">
                                                <div class="acc-btn">
                                                    <div class="icon-outer">
                                                        <span class="icon-plus"></span> 
                                                        <span class="icon-close"></span>
                                                    </div>
                                                   <span class="body__one">Craft & lager Beer</span> 	
                                                </div>
                                                <div class="acc-content current" style="display: none;">
                                                    <div class="content">
                                                        <ul>  
                                                            <li><span class="name">Yuengling lager </span> <span class="price">$9.50</span></li>
                                                            <li><span class="name">Southern tier </span> <span class="price">$9.50</span></li>
                                                            <li><span class="name">Green flash </span> <span class="price">$9.50</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!-- video-section-end --> 

         <!-- better-food-section --> 
         <section class="batter__food see__pad p_relative">
            <div class="anim-icon" >
                <div class="icon icons-1 " data-parallax='{"x": 100}' style="background-image: url({{ asset('frontend/assets/images/shape/shape-06.png') }});"></div>
            </div>
            <div class="medium-container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 wow slideInLeft animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInLeft;"> 
                        <div class="batter__food__left" style="background-image: url({{ asset('frontend/assets/images/products/welcome-1.jpg') }});">
                            <div class="food__right__img_feature_image">
                                <img class="d-block d-lg-none" src="{{ asset('frontend/assets/images/products/welcome-1.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 wow slideInRight animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInRight;">
                        <div class="batter__food__right">
                            <div class="title__section two">
                                <div class="sub____title">
                                    <span>Reservations</span>
                                </div>
                                <div class="main____title">
                                    <h2 class="heading-primary">Better food <span>forever</span></h2>
                                </div>
                                <div class="divider wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;"><div></div></div>
                            </div>
                            <div class="normal__text two">
                                <p> Rotten sémillon grapes are the secret to Sauternes. The host of a <br>dinner should take the first sip of wine to assure it is not poisoned.</p>
                            </div>
                            <div class="tab___secrtion">
                                <div class="tabs-box">
                                    <div class="tab-btn-box p_relative">
                                        <ul class="tab-btns tab-buttons clearfix">
                                            <li class="tab-btn theme-btn-three booking-tab style1" data-tab="#tab-5">
                                                <span class="tab___all body__four"> Book a Table </span>
                                            </li>
                                            <li class="tab-btn active-btn theme-btn-three booking-tab style1" data-tab="#tab-6">
                                                <span class="tab___all body__four"> Spacial Request </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tabs-content wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="tab tab-form" id="tab-5">
                                            <div class="inner-box row">
                                                <div class="tab___left__data col-lg-4 col-md-12 col-sm-12">
                                                    <h2 class="mb-10">Book a <br> <span>Table</span></h2>
                                                    <p class="mb-10">Rotten sémillon grapes are the secret to Sauternes.</p>
                                                </div>
                                                <div class="booking__form col-lg-8 col-md-12 col-sm-12">
                                                    <form action="https://megamindlab.com/html/rave/bookatable.php" method="POST" class="reserve-form">
                                                        <input type="hidden" name="form_type" value="regular_booking_form">
                                                        <div class=" form-group clearfix">
                                                            <span class="icon-user"></span>
                                                            <input type="text" name="personName" placeholder="Your Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <span class="far fa-clock"></span>
                                                            <input type="text" name="time" placeholder="Time">
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <span class="icon-date"></span>
                                                            <input type="text" name="date" placeholder="Apri 17">
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <span class="fal fa-envelope"></span>
                                                            <input type="text" name="email" placeholder="Email">
                                                        </div>
                                                        <div class=" form-group message-btn centred">
                                                            <button type="submit" class="theme-btn-three style1">Find a Table</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab active-tab tab-form" id="tab-6">
                                            <div class="inner-box row">
                                                <div class="tab___left__data col-lg-4 col-md-12 col-sm-12">
                                                    <h2 class="mb-10">Spacial <br> <span> Request</span></h2>
                                                    <p class="mb-10">Rotten sémillon grapes are the secret to Sauternes.</p>
                                                </div>
                                                <div class="booking__form col-lg-8 col-md-12 col-sm-12">
                                                    <form action="https://megamindlab.com/html/rave/bookatable.php" method="POST" class="reserve-form">
                                                        <input type="hidden" name="form_type" value="spacial_request_form">
                                                        <div class=" form-group clearfix">
                                                            <span class="icon-user"></span>
                                                            <input type="text" name="personName" placeholder="Your Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <span class="far fa-clock"></span>
                                                            <input type="text" name="time" placeholder="Time">
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <span class="icon-date"></span>
                                                            <input type="text" name="date" placeholder="April 17">
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <span class="fal fa-envelope"></span>
                                                            <input type="text" name="email" placeholder="Email">
                                                        </div>
                                                        <div class="message-btn one">
                                                            <button type="submit" class="theme-btn-three style1">Find a Table</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!-- better-food-section -end --> 

        <!-- team-section --> 
        <section class="team-section team-section--one p_relative see__pad">
            <div class="medium-container">
                <div class="title__section two">
                    <div class="sub____title">
                        <span>Crew</span>
                    </div>
                    <div class="main____title">
                        <h1>Our Skilled  <span> Culinary Master</span></h1>
                    </div>
                    <div class="divider wow fadeInUp animated animated animated" style="visibility: visible; animation-name: fadeInUp;"><div></div></div>
                </div>
                <div class="normal__text two">
                    <p>Lorem ipsum purus et porta tincidunt. Nulla facilisi eros sit amet <br> magna suscipit,</p>
                </div>
                <div class="team__content">
                    <div class="about-team-carousel owl-carousel owl-theme owl-dots-none nav-style-one ">
                        <div class="team-block-one ">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{ asset('frontend/assets/images/team/team-1') }}.jpg" alt="">
                                </figure>
                                <div class="lower-content">
                                    <div class="team__block__bottom">
                                        <h5>Gourmet Guilherme</h5>
                                        <span>Senior Chef</span>
                                        <div class="social__media">
                                            <ul>
                                                <li><a href="#"><span class="icon-facebook"></span></a></li>
                                                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-block-one">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{ asset('frontend/assets/images/team/team-2') }}.jpg" alt="">
                                </figure>
                                <div class="lower-content">
                                    <div class="team__block__bottom">
                                        <h5>Alberto Marcolongo</h5>
                                        <span>Junior Chef</span>
                                        <div class="social__media">
                                            <ul>
                                                <li><a href="#"><span class="icon-facebook"></span></a></li>
                                                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-block-one">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{ asset('frontend/assets/images/team/team-3') }}.jpg" alt="">
                                </figure>
                                <div class="lower-content">
                                    <div class="team__block__bottom">
                                        <h5>Gabriel Kreuther</h5>
                                        <span>Junior Chef</span>
                                        <div class="social__media">
                                            <ul>
                                                <li><a href="#"><span class="icon-facebook"></span></a></li>
                                                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-section --> 

         <!-- customer-section --> 
         <section class="customer__section see__pad">
            <div class="medium-container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="customer___left wow slideInLeft animated animated animated" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: slideInLeft;">
                            <figure>
                                <img src="{{ asset('frontend/assets/images/resource/steak.jpg') }}" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="customer___right wow slideInRight animated animated animated" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: slideInRight;">
                            <div class="title__section two">
                                <div class="sub____title">
                                    <span>Client Feedhack</span>
                                </div>
                                <div class="main____title">
                                    <h2 class="heading-primary">What believe <span> our customers</span></h2>
                                </div>
                                <div class="divider wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;"><div></div></div>
                            </div>
                            <div class="normal__text two">
                                <p> During racking, a wine is moved to a new barrel and separated from<br> sediment in the old one.</p>
                            </div>
                            <div class="client-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                                <div class="client_block_one">
                                    <div class="inner__box__left">
                                       <figure>
                                           <img src="{{ asset('frontend/assets/images/resource/customer.jpg') }}" alt="">
                                       </figure>
                                    </div>
                                    <div class="inner__box__right">
                                       <h5>Wade Warren</h5>
                                       <span>CEO</span>
                                       <div class="client__des">
                                           <p>Sed gravida nisl a porta tincidunt. Integer aliquam <br> nisi sit amet magna suscipit, fermentum mattis erat <br> rutrum. Sed suscipit libero lectus, at ullamcorper <br> erat feugiat eu. </p>
                                       </div>
                                    </div>
                                </div>
                                <div class="client_block_one">
                                    <div class="inner__box__left">
                                       <figure>
                                           <img src="{{ asset('frontend/assets/images/resource/customer-2.jpg') }}" alt="">
                                       </figure>
                                    </div>
                                    <div class="inner__box__right">
                                       <h5>Jon Hafiz</h5>
                                       <span>CTO</span>
                                       <div class="client__des">
                                           <p>Sed gravida nisl a porta tincidunt. Integer aliquam <br> nisi sit amet magna suscipit, fermentum mattis erat <br> rutrum. Sed suscipit libero lectus, at ullamcorper <br> erat feugiat eu. </p>
                                       </div>
                                    </div>
                                </div>
                                <div class="client_block_one">
                                    <div class="inner__box__left">
                                       <figure>
                                           <img src="{{ asset('frontend/assets/images/resource/customer-3.jpg') }}" alt="">
                                       </figure>
                                    </div>
                                    <div class="inner__box__right">
                                       <h5>Dev Uddin</h5>
                                       <span>Sr Shape</span>
                                       <div class="client__des">
                                           <p>Sed gravida nisl a porta tincidunt. Integer aliquam <br> nisi sit amet magna suscipit, fermentum mattis erat <br> rutrum. Sed suscipit libero lectus, at ullamcorper <br> erat feugiat eu. </p>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!-- customer-section end -->
@endsection