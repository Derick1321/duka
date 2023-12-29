<div>
    <!-- Well begun is half done. - Aristotle -->
       <!-- header-start -->
       <header class="header d-blue-bg">
        <div class="header-top">
            <div class="container custom-conatiner">
                <div class="header-inner">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-7">
                            <div class="header-inner-start">
                                <div class="header__currency border-right">
                                    <div class="s-name">
                                        <span>Language: </span>
                                    </div>
                                    <select>
                                        <option>English</option>
                                        <option>Deutsch</option>
                                        <option>Français</option>
                                        <option>Espanol</option>
                                    </select>
                                </div>
                                <div class="header__lang border-right">
                                    <div class="s-name">
                                        <span>Currency: </span>
                                    </div>
                                    <select>
                                        <option> USD</option>
                                        <option>EUR</option>
                                        <option>INR</option>
                                        <option>BDT</option>
                                        <option>BGD</option>
                                    </select>
                                </div>
                                <div class="support d-none d-sm-block">
                                    <p>Need Help? <a href="tel:+001123456789">+255 123 456 789</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 d-none d-lg-block">
                            <div class="header-inner-end text-md-end">
                                    @if (Route::has('login'))
                                <div class="ovic-menu-wrapper ovic-menu-wrapper-2">
                                    <ul>
                                    @auth
                                        <li><a href="{{ url('/home') }}">Home</a></li>
                                    @else    
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                    @if (Route::has('register'))    
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                    @endif
                                    @endauth
                                    </ul>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-mid">
            <div class="container custom-conatiner">
                <div class="heade-mid-inner">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                            <div class="header__info">
                                <div class="logo">
                                    <a href="/" class="logo-image"><img src="{{ asset('web/img/logo/logo1.svg')}}" alt="logo"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                            <div class="header__search">
                                <form action="#">
                                    <div class="header__search-box">
                                        <input class="search-input search-input-2" type="text" placeholder="I'm shopping for...">
                                        <button class="button button-2" type="submit"><i class="far fa-search"></i></button>
                                    </div>
                                    <div class="header__search-cat">
                                        <select>
                                            <option>All Categories</option>
                                            <option>Best Seller Products</option>
                                            <option>Top 10 Offers</option>
                                            <option>New Arrivals</option>
                                            <option>Phones &amp; Tablets</option>
                                            <option>Electronics &amp; Digital</option>
                                            <option>Fashion &amp; Clothings</option>
                                            <option>Jewelry &amp; Watches</option>
                                            <option>Health &amp; Beauty</option>
                                            <option>Sound &amp; Speakers</option>
                                            <option>TV &amp; Audio</option>
                                            <option>Computers</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-8 col-sm-8">
                            <div class="header-action">
                                <div class="block-userlink">
                                    <a class="icon-link icon-link-2" href="my-account.html">
                                    <i class="flaticon-user"></i>
                                    <span class="text">
                                    <span class="sub">Login </span>
                                    My Account </span>
                                    </a>
                                </div>
                                <div class="block-wishlist action">
                                    <a class="icon-link icon-link-2" href="wishlist.html">
                                    <i class="flaticon-heart"></i>
                                    <span class="count count-2">0</span>
                                    <span class="text">
                                    <span class="sub">Favorite</span>
                                    My Wishlist </span>
                                    </a>
                                </div>
                                <div class="block-cart action">
                                    <a class="icon-link icon-link-2" href="/cart">
                                    <i class="flaticon-shopping-bag"></i>
                                    <span class="count count-2">1</span>
                                    <span class="text">
                                    <span class="sub">Your Cart:</span>
                                    $00.00 </span>
                                    </a>
                                    <div class="cart">
                                        <div class="cart__mini">
                                            <ul>
                                                <li>
                                                  <div class="cart__title">
                                                    <h4>Your Cart</h4>
                                                    <span>(1 Item in Cart)</span>
                                                  </div>
                                                </li>
                                                <li>
                                                  <div class="cart__item d-flex justify-content-between align-items-center">
                                                    <div class="cart__inner d-flex">
                                                      <div class="cart__thumb">
                                                        <a href="/product-details">
                                                          <img src="{{ asset('ssets/img/cart/20.jpg')}}" alt="">
                                                        </a>
                                                      </div>
                                                      <div class="cart__details">
                                                        <h6><a href="/product-details"> Samsung C49J89: £875, Debenhams Plus  </a></h6>
                                                        <div class="cart__price">
                                                          <span>$255.00</span>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="cart__del">
                                                        <a href="/product-details"><i class="fal fa-times"></i></a>
                                                    </div>
                                                  </div>
                                                </li>
                                                <li>
                                                  <div class="cart__sub d-flex justify-content-between align-items-center">
                                                    <h6>Subtotal</h6>
                                                    <span class="cart__sub-total">$255.00</span>
                                                  </div>
                                                </li>
                                                <li>
                                                    <a href="/cart" class="wc-cart mb-10">View cart</a>
                                                    <a href="/checkout" class="wc-checkout">Checkout</a>
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
        <div class="header__bottom">
            <div class="container custom-conatiner">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-3">                        
                        <div class="cat__menu-wrapper side-border d-none d-lg-block">
                            <div class="cat-toggle">
                                <button type="button" class="cat-toggle-btn cat-toggle-btn-1"><i class="fal fa-bars"></i> Shop by department</button>
                                <div class="cat__menu-2 cat__menu">
                                    <nav id="mobile-menu" style="display: block;">
                                        <ul>
                                            <li>
                                                <a href="product.html">All Categories <i class="far fa-angle-down"></i></a>
                                                <ul class="mega-menu">
                                                    <li><a href="product.html">Shop Pages</a>
                                                        <ul class="mega-item">
                                                            <li><a href="/product-details">Standard SHop Page</a></li>
                                                            <li><a href="/product-details">Shop Right Sidebar</a></li>
                                                            <li><a href="/product-details">Shop Left Sidebar</a></li>
                                                            <li><a href="/product-details">Shop 3 Column</a></li>
                                                            <li><a href="/product-details">Shop 4 Column</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="product.html">Product Pages</a>
                                                        <ul class="mega-item">
                                                            <li><a href="/product-details">Product Details</a></li>
                                                            <li><a href="/product-details">Product V2</a></li>
                                                            <li><a href="/product-details">Product V3</a></li>
                                                            <li><a href="/product-details">Varriable Product</a></li>
                                                            <li><a href="/product-details">External Product</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="product.html">Other Pages</a>
                                                        <ul class="mega-item">
                                                            <li><a href="/product-details">wishlist</a></li>
                                                            <li><a href="/product-details">Shopping Cart</a></li>
                                                            <li><a href="/product-details">Checkout</a></li>
                                                            <li><a href="/product-details">Login</a></li>
                                                            <li><a href="/product-details">Register</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="product.html">Phone &amp; Tablets</a>
                                                        <ul class="mega-item">
                                                            <li><a href="/product-details">Catagory 1</a></li>
                                                            <li><a href="/product-details">Catagory 2</a></li>
                                                            <li><a href="/product-details">Catagory 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="product.html">Phone &amp; Tablets</a>
                                                        <ul class="mega-item">
                                                            <li><a href="/product-details">Catagory 1</a></li>
                                                            <li><a href="/product-details">Catagory 2</a></li>
                                                            <li><a href="/product-details">Catagory 3</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="product.html">Phone and Electronics <i class="far fa-angle-down"></i></a>
                                                <ul class="mega-menu mega-menu-2">
                                                    <li><a href="product.html">Shop Pages</a>
                                                        <ul class="mega-item">
                                                            <li><a href="/product-details">Standard SHop Page</a></li>
                                                            <li><a href="/product-details">Shop Right Sidebar</a></li>
                                                            <li><a href="/product-details">Shop Left Sidebar</a></li>
                                                            <li><a href="/product-details">Shop 3 Column</a></li>
                                                            <li><a href="/product-details">Shop 4 Column</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="product.html">Product Pages</a>
                                                        <ul class="mega-item">
                                                            <li><a href="/product-details">Product Details</a></li>
                                                            <li><a href="/product-details">Product V2</a></li>
                                                            <li><a href="/product-details">Product V3</a></li>
                                                            <li><a href="/product-details">Varriable Product</a></li>
                                                            <li><a href="/product-details">External Product</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="product.html">Other Pages</a>
                                                        <ul class="mega-item">
                                                            <li><a href="/product-details">wishlist</a></li>
                                                            <li><a href="/product-details">Shopping Cart</a></li>
                                                            <li><a href="/product-details">Checkout</a></li>
                                                            <li><a href="/product-details">Login</a></li>
                                                            <li><a href="/product-details">Register</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="product.html">Phone &amp; Tablets</a>
                                                        <ul class="mega-item">
                                                            <li><a href="/product-details">Catagory 1</a></li>
                                                            <li><a href="/product-details">Catagory 2</a></li>
                                                            <li><a href="/product-details">Catagory 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="product.html">Phone &amp; Tablets</a>
                                                        <ul class="mega-item">
                                                            <li><a href="/product-details">Catagory 1</a></li>
                                                            <li><a href="/product-details">Catagory 2</a></li>
                                                            <li><a href="/product-details">Catagory 3</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="product.html">Best Seller Products
                                                    <span class="cat-label">hot!</span>
                                                    <i class="far fa-angle-down"></i>
                                                </a>
                                                <ul class="mega-menu">
                                                    <li><a href="product.html">Shop Pages</a>
                                                        <ul class="mega-item">
                                                            <li><a href="/product-details">Standard SHop Page</a></li>
                                                            <li><a href="/product-details">Shop Right Sidebar</a></li>
                                                            <li><a href="/product-details">Shop Left Sidebar</a></li>
                                                            <li><a href="/product-details">Shop 3 Column</a></li>
                                                            <li><a href="/product-details">Shop 4 Column</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="product.html">Product Pages</a>
                                                        <ul class="mega-item">
                                                            <li><a href="/product-details">Product Details</a></li>
                                                            <li><a href="/product-details">Product V2</a></li>
                                                            <li><a href="/product-details">Product V3</a></li>
                                                            <li><a href="/product-details">Varriable Product</a></li>
                                                            <li><a href="/product-details">External Product</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="product.html">Other Pages</a>
                                                        <ul class="mega-item">
                                                            <li><a href="/product-details">wishlist</a></li>
                                                            <li><a href="/product-details">Shopping Cart</a></li>
                                                            <li><a href="/product-details">Checkout</a></li>
                                                            <li><a href="/product-details">Login</a></li>
                                                            <li><a href="/product-details">Register</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="product.html">Phone &amp; Tablets</a>
                                                        <ul class="mega-item">
                                                            <li><a href="/product-details">Catagory 1</a></li>
                                                            <li><a href="/product-details">Catagory 2</a></li>
                                                            <li><a href="/product-details">Catagory 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="product.html">Phone &amp; Tablets</a>
                                                        <ul class="mega-item">
                                                            <li><a href="/product-details">Catagory 1</a></li>
                                                            <li><a href="/product-details">Catagory 2</a></li>
                                                            <li><a href="/product-details">Catagory 3</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="product.html">Top 10 Offers
                                                    <span class="cat-label green">new!</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="product.html">New Arrivals <i class="far fa-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="product.html">Home Appliances</a></li>
                                                    <li><a href="product.html">Technology</a>
                                                        <ul class="submenu">
                                                            <li><a href="product.html">Storage Devices</a></li>
                                                            <li><a href="product.html">Monitors</a></li>
                                                            <li><a href="product.html">Laptops</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="product.html">Office Equipments</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="product.html">TV &amp; Audio</a></li>
                                            <li><a href="product.html">Electronics &amp; Digital</a></li>
                                            <li class="d-laptop-none"><a href="product.html">Fashion &amp; Clothings</a></li>
                                            <li class="d-laptop-none"><a href="product.html">Jewelry &amp; Watches</a></li>
                                            <li><a href="product.html">Health &amp; Beauty</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-3">
                      <div class="header__bottom-left d-flex d-xl-block align-items-center">
                        <div class="side-menu d-lg-none mr-20">
                          <button type="button" class="side-menu-btn offcanvas-toggle-btn"><i class="fas fa-bars"></i></button>
                        </div>
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="#">Shop</a></li>
                                    <li><a href="#">About Us</a></li>
                                </ul>
                            </nav>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-9">
                        <div class="shopeing-text text-sm-end">
                            <p>Spend $120 more and get free shipping!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </header>
       <!-- header-end -->
       <!-- offcanvas area start -->
        <div class="offcanvas__area">
            <div class="offcanvas__wrapper">
            <div class="offcanvas__close">
                <button class="offcanvas__close-btn" id="offcanvas__close-btn">
                    <i class="fal fa-times"></i>
                </button>
            </div>
            <div class="offcanvas__content">
                <div class="offcanvas__logo mb-40">
                    <a href="/">
                    <img src="asset/img/logo/logo-white.png" alt="logo">
                    </a>
                </div>
                <div class="offcanvas__search mb-25">
                    <form action="#">
                        <input type="text" placeholder="What are you searching for?">
                        <button type="submit" ><i class="far fa-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu fix"></div>
                <div class="offcanvas__action">

                </div>
            </div>
            </div>
        </div>
        <!-- offcanvas area end -->      
        <div class="body-overlay"></div>
        <!-- offcanvas area end -->
</div>