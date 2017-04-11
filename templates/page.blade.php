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
              <label>Мальчик<input class="boy" type="checkbox" name="boy" value="male"/></label>
              <label>Девочка<input class="girl" type="checkbox" name="girl" value="female"/></label>
              <button type="submit" class="btn btn-success dog-btn">Отфильтровать</button>
          </div>
      </ul>
  </div>

  @include('partials.content-page')
  @endwhile
@endsection

