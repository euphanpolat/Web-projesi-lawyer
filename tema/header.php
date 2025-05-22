<header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center justify-content-between no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="/#">
                                <img src="img/logo.png" alt="Logo" style="width: 180px; height: auto;">

                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-8">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="<?= $sayfa=="index" ? 'active':'' ?>" href="/">Ana Sayfa</a></li>
                                        <li><a class="<?= $sayfa=="hakkimda" ? 'active':'' ?>" href="/?sayfa=hakkimda">Hakkımızda</a></li>
                                        <li><a class="<?= $sayfa=="faaliyet_alanlari" ? 'active':'' ?>" href="/?sayfa=faaliyet_alanlari">Faaliyet Alanları</a></li>
                                        <li><a class="<?= $sayfa=="blog" ? 'active':'' ?>" href="/?sayfa=blog">Yazılarımız </a></li>
                                        <li><a class="<?= $sayfa=="iletisim" ? 'active':'' ?>" href="/?sayfa=iletisim">İletişim</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-2 d-none d-lg-block">
                            <div class="social_media_links">
                            <ul>
                            <li><a href="https://github.com/euphanpolat" target="_blank"><i class="fa fa-github"></i></a></li>
                            <li><a href="https://x.com/euphanpolatt" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/eyuphanpolat/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            </ul>

                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>