<header class="navbar-area">
    <nav class="navbar navbar-expand-lg">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <button class="menu toggle-btn d-block d-lg-none" data-target="#themefie_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-left"></span>
                    <span class="icon-right"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="themefie_main_menu">
                <ul class="navbar-nav menu-open">
                    <li class="current-menu-item menu-item-has-children">
                        <a href="{{route('index')}}">HOME</a>
                        <ul class="sub-menu ps-0">
                            <li><a href="{{route('index')}}">Home 01</a></li>
                            <li><a href="{{route('index2')}}">Home 02</a></li>
                        </ul>
                    </li>
                    <li class="current-menu-item menu-item-has-children">
                        <a href="#">PAGES</a>
                        <ul class="sub-menu ps-0">
                            <li><a href="{{route('about')}}">About</a></li>
                            <li><a href="{{route('blogs')}}">Blog</a></li>
                            <li><a href="{{route('blog.details')}}">Blog Details</a></li>
                            <li><a href="{{route('menu')}}">Menu</a></li>
                            <li><a href="{{route('menu.list')}}">Menu List</a></li>
                            <li><a href="{{route('shop')}}">Shop</a></li>
                            <li><a href="{{route('prodcut.details')}}">Shop Details</a></li>
                            <li><a href="{{route('cart')}}">Cart</a></li>
                            <li><a href="{{route('checkout')}}">Checkout</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('about')}}">ABOUT US</a>
                    </li>
                    <li>
                        <a href="{{route('contact')}}">CONTACTS</a>
                    </li>
                </ul>
            </div>
            <div class="logo">
                <a class="main-logo" href="{{route('index')}}"><img src="{{asset('/assets/img/logo-1.png')}}" alt="img"></a>
            </div>
            <div class="nav-right-part nav-right-part-mobile">
                <ul>
                    <li><a class="search" href="#"><i class="ri-search-line"></i></a>
                    </li>
                    <li class="phone-contact d-md-block d-none"><i class="ri-phone-fill float-start"></i>
                        +1 4693540346
                    </li>
                    <li class="menu-cart"><a href="{{route('cart')}}">CART <span>1</span></a></li>
                    <li>49.50 $</li>
                </ul>
            </div>
            <div class="nav-right-part nav-right-part-desktop">
                <ul>
                    <li><a class="search" href="#"><i class="ri-search-line"></i></a>
                    </li>
                    <li class="phone-contact"><i class="ri-phone-fill float-start"></i>
                        +14693540346
                    </li>
                    <li class="menu-cart"><a href="{{route('cart')}}">CART <span>1</span></a></li>
                    <li>49.50 $</li>
                </ul>
            </div>
        </div>
    </nav>
</header>
