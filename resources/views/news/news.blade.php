@extends('layouts.app')

@section('title', 'Новости')
    
@section('content')
  <div class="content-middle">
    <div class="content-head__container">
      <div class="content-head__title-wrap">
        <div class="content-head__title-wrap__title bcg-title">{{ __('Новости') }}</div>
      </div>
      <div class="content-head__search-block">
        <div class="search-container">
          <form class="search-container__form">
            <input type="text" class="search-container__form__input">
            <button class="search-container__form__btn">search</button>
          </form>
        </div>
      </div>
    </div>
    <div class="content-main__container">
      <div class="news-list__container">
        <div class="news-list__item">
          <div class="news-list__item__thumbnail">
            <img src="/img/news/ps_vr.jpg">
          </div>
          <div class="news-list__item__content">
            <div class="news-list__item__content__news-title">О новых играх в режиме VR</div>
            <div class="news-list__item__content__news-date">04.12.2016</div>
            <div class="news-list__item__content__news-content">
              Lorem ipsum dolor sit amet, consectetur adipiscing
              elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
              ullamco laboris nisi ut aliquip ex ea commodo consequat.
              ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
          </div>
          <div class="news-list__item__content__news-btn-wrap">
            <a href="{{ route('onenews') }}" class="btn btn-brown">Подробнее</a>
          </div>
        </div>
        <div class="news-list__item">
          <div class="news-list__item__thumbnail">
            <img src="/img/news/ps4-pro_01.jpg">
          </div>
          <div class="news-list__item__content">
            <div class="news-list__item__content__news-title">О новой PS4 Pro</div>
            <div class="news-list__item__content__news-date">04.12.2016</div>
            <div class="news-list__item__content__news-content">
              Lorem ipsum dolor sit amet, consectetur adipiscing
              elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
              ullamco laboris nisi ut aliquip ex ea commodo consequat.
              ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
          </div>
          <div class="news-list__item__content__news-btn-wrap">
            <a href="{{ route('onenews') }}" class="btn btn-brown">Подробнее</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
