<header class="banner">
    <section id="header_area" style="background-color: black">
        <div class="container-fluid">
            <div class="wrapper header">
                <div class="clearfix header_top">
                    <div class="clearfix logo floatleft">
                        <a href=""><h1><span>Dog</span> Blog</h1></a>
                    </div>
                    <div class="clearfix search floatright">
                        <?php echo do_shortcode('[wpdreams_ajaxsearchpro id=1]'); ?>
                    </div>
                </div>

                <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
                <nav class="nav-primary">
                    @if (has_nav_menu('primary_navigation'))
                        {!! wp_nav_menu(['theme_location' => 'primary_navigation',
                                        'container_class' => 'menu-header',
                                        'menu_class' => 'nav',
                                        'menu_id' => 'menu_tms',]) !!}
                    @endif
                </nav>
            </div>
        </div>
    </section>
</header>
