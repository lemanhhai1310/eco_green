<nav class="tintuc1__navbar uk-navbar-container">
    <div class="uk-container">
        <div uk-navbar>

            <div class="nav-overlay uk-navbar-left">

                <ul class="uk-navbar-nav">
                    <li class="<?= (isset($tintuc1)) ? 'uk-active' : '' ?>"><a href="tintuc1.php">Tin tức mới nhất</a></li>
                    <li class=""><a href="">Tất cả các tin</a></li>
                </ul>

            </div>

            <div class="nav-overlay uk-navbar-right">
                <div class="uk-navbar-item uk-visible@m">
                    <form class="tintuc1__navbar__search uk-search uk-search-default">
                        <a href="" class="uk-search-icon-flip" uk-search-icon></a>
                        <input class="uk-search-input" type="search" placeholder="Search your topics" aria-label="Search your topics">
                    </form>
                </div>

                <a class="uk-navbar-toggle uk-hidden@m" uk-search-icon uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>

            </div>

            <div class="nav-overlay uk-navbar-left uk-flex-1" hidden>

                <div class="uk-navbar-item uk-width-expand">
                    <form class="uk-search uk-search-navbar uk-width-1-1">
                        <input class="uk-search-input" type="search" placeholder="Search your topics" aria-label="Search your topics" autofocus>
                    </form>
                </div>

                <a class="uk-navbar-toggle" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>

            </div>

        </div>
    </div>
</nav>