@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
  <ul>
      <div class="filter">
          <label>Мальчик<input type="checkbox" name="sex[]" value="male"/></label>
          <label>Девочка<input type="checkbox" name="sex[]" value="female"/></label>
          <button type="submit" class="btn btn-success">Отфильтровать</button>
      </div>

  </ul>
    @include('partials.content-page')

  @endwhile
@endsection
