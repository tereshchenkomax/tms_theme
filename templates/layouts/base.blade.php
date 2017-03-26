<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    @php(do_action('get_header'))
    @include('partials.header')
        <?php if ($_GET && !empty($_GET)) { // если было передано что-то из формы
            go_filter(); // запускаем функцию фильтрации
        } ?>

      <label>Мальчик<input type="checkbox" name="sex[]" value="male"/></label>
      <label>Девочка<input type="checkbox" name="sex[]" value="female"/></label>
      <button type="submit">Отфильтровать</button>
    <div class="wrap container" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
          <ul>
              <?php
              global $post;
              $args = array( 'post_type' => 'dogs' );
              $myposts = get_posts( $args );
              foreach( $myposts as $post ){ setup_postdata($post);
              ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
              <?php
              }
              wp_reset_postdata();
              ?>
          </ul>
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())
  </body>
</html>
