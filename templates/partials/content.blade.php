<article @php(post_class())>
    <header>
        <div class="clearfix wrapper main_content_area">
            <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
            @include('partials/entry-meta')
        </div>
    </header>
    <div class="entry-summary">
        <div class="clearfix wrapper main_content_area">
            <div class="clearfix main_content floatleft">
                <div class="clearfix content">
                    @php(the_excerpt())
                </div>
            </div>
        </div>
    </div>
</article>
