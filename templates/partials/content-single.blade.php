<article @php(post_class())>
    <header>
        <h1 class="entry-title">{{ get_the_title() }}</h1>
        @include('partials/entry-meta')
    </header>
    <div class="entry-content">
        <div class="clearfix wrapper main_content_area">

            <div class="clearfix main_content floatleft">


                <div class="clearfix content">
                    @php(the_content())
                </div>
            </div>
        </div>
    </div>
    <footer>
        {!! wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    </footer>
    @php(comments_template('/templates/partials/comments.blade.php'))
</article>
