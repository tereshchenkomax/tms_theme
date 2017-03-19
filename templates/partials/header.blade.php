<header class="banner">
    <section id="header_area">
        <div class="container-fluid">

            <div class="wrapper header">
                <div class="clearfix header_top">
                    <div class="clearfix logo floatleft">
                        <a href=""><h1><span>Yellow</span> Blog</h1></a>
                    </div>
                    <div class="clearfix search floatright">
                        <form>
                            <input type="text" placeholder="Search"/>
                            <input type="submit"/>
                        </form>
                    </div>
                </div>

                <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
                <nav class="nav-primary">
                    @if (has_nav_menu('primary_navigation'))
                        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
                    @endif
                </nav>
            </div>
        </div>
    </section>
</header>
