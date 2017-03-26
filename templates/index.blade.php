@extends('layouts.base')

@section('content')
    @include('partials.page-header')
    <div class="container">
        <ul class="categories-filters">
            {{--@php(wp_list_categories( $args ))--}}
        </ul>
    </div>
    <div style="margin: 5px auto;width:180px;" class="dog-link">
        <a href="<?php echo esc_url(home_url('/dogs')); ?>" rel="dogs">Смотреть всех собак</a>
    </div>
    @php(dynamic_sidebar('sidebar-footer'))

    @if (!have_posts())
        <div class="alert alert-warning">
            {{ __('Sorry, no results were found.', 'sage') }}
        </div>
        {!! get_search_form(false) !!}
    @endif
    <div id="main-container">
        <div id="inside">
            <div class="container">
                @while (have_posts()) @php(the_post())
                @include ('partials.content-'.(get_post_type() !== 'post' ? get_post_type() : get_post_format()))
                @endwhile
            </div>
        </div>
    </div>
    {!! get_the_posts_navigation() !!}
@endsection
