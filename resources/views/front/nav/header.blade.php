<!--header start-->
<header id="masthead" class="header ttm-header-style-classic">
    <!-- ttm-topbar-wrapper -->
    <div class="ttm-topbar-wrapper ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
        <div class="container">
            <div class="ttm-topbar-content">
                <ul class="top-contact ttm-highlight-left text-left">
                    <li><i class="fa fa-envelope"></i><strong>info@successgroup.com</strong> </li>
                </ul>
                <div class="topbar-right text-right">
                    <ul class="top-contact">
                        <li><i class="fa fa-phone"></i><a href="tel:">(+225) 09-54-31-62</a></li>
                    </ul>
                    <div class="ttm-social-links-wrapper list-inline">
                        <ul class="social-icons">
                            <li><a target="_blank" href="https://web.facebook.com/MG-Immobilier-101298968365194"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a target="_blank" href="mailto:info@successgroup.com"><i class="fa fa-google"></i></a>
                            </li>
                            <li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ttm-header-wrap">
        <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
            <div id="site-header-menu" class="site-header-menu">
                <div class="site-header-menu-inner ttm-stickable-header">
                    <div class="container">
                        <div class="site-branding">
                            <a class="home-link" href="{{ route('accueil') }}" title="Fondex" rel="home">
                                <img id="logo-img" class="img-center" src="{{ asset('front/images/logo.png') }}" alt="logo-img">
                            </a>
                        </div>
                        <div id="site-navigation" class="site-navigation">
                            <div class="ttm-menu-toggle">
                                <input type="checkbox" id="menu-toggle-form" />
                                <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                    <span class="toggle-block toggle-blocks-1"></span>
                                    <span class="toggle-block toggle-blocks-2"></span>
                                    <span class="toggle-block toggle-blocks-3"></span>
                                </label>
                            </div>
                            <nav id="menu" class="menu">
                                <ul class="dropdown">
                                <li><a href="{{ route('accueil') }}">ACCUEIL</a></li>
                                 <li><a href="/modeles_de_maison">NOS MODELES DE MAISON</a>
                                </li>
                                <li><a href="/offres">NOS OFFRES</a></li>
                                <li><a href="{{ route('realisations') }}"> NOS REALISATIONS</a></li>
                                <li><a href="{{ route('contacts') }}">CONTACTS</a></li>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</header>
