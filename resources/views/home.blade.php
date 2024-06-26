@extends('layouts.app')

@section('content')
    <div class="content-middle">
        <div class="content-head__container">
            <div class="content-head__title-wrap">

                @if (isset($currentCategory))
                    <div class="content-head__title-wrap__title bcg-title">
                        {{ __('Товары в категории') }}: {{ $currentCategory->title }}
                    </div>
                @else
                    <div class="content-head__title-wrap__title bcg-title">
                        {{ __('Последние товары') }}
                    </div>
                @endif
                
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
            <div class="products-columns">
                @foreach ($goods as $good)
                    <div class="products-columns__item">
                        <div class="products-columns__item__title-product">
                            <a href="{{ route('good.show', $good->id) }}" class="products-columns__item__title-product__link">
                                {{ $good->title }}
                            </a>
                        </div>
                        <div class="products-columns__item__thumbnail">
                            <a href="{{ route('good.show', $good->id) }}" class="products-columns__item__thumbnail__link">
                                <img src="/img/cover/game-{{ $good->getImageId() }}.jpg" alt="Preview-image" class="products-columns__item__thumbnail__img">
                            </a>
                        </div>
                        <div class="products-columns__item__description">
                            <span class="products-price">{{ $good->price }} руб</span>
                            <a href="{{ route('order.buy', $good->id) }}" class="btn btn-blue">{{ __('Купить') }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="content-footer__container">
            {{ $goods->links() }}
        </div>
    </div>
@endsection
