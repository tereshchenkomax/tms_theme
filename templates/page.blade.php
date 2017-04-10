@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')

  <div id="main-doggy">
      <div class="col-5" style="display: inline-flex">
          <div class="doggy"></div>
      </div>
      <div class="col-5" style="display: inline-flex">
          <div class="doggy"></div>
      </div>
      <ul>
          <div class="filter">
              <label>Мальчик<input type="checkbox" name="sex[]" value="male"/></label>
              <label>Девочка<input type="checkbox" name="sex[]" value="female"/></label>
              <button type="submit" class="btn btn-success">Отфильтровать</button>
          </div>

      </ul>
  </div>
    @include('partials.content-page')

  @endwhile
@endsection
