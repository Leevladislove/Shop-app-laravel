<header class="main-header">
	<div class="logotype-container">
		<a href="{{ route('home') }}" class="logotype-link">
			<img src="/img/logo.png" alt="Логотип">
		</a>
	</div>
		<nav class="main-navigation">
			<ul class="nav-list">
			<li class="nav-list__item"><a href="#" class="nav-list__item__link">Главная</a></li>
			<li class="nav-list__item"><a href="#" class="nav-list__item__link">Мои заказы</a></li>
			<li class="nav-list__item"><a href="#" class="nav-list__item__link">Новости</a></li>
			<li class="nav-list__item"><a href="#" class="nav-list__item__link">О компании</a></li>
			</ul>
		</nav>
	<div class="header-contact">
		<div class="header-contact__phone">
			<a href="#" class="header-contact__phone-link">
				Телефон: 33-333-33
			</a>
		</div>
	</div>
	<div class="header-container">
		<div class="payment-container">
			<div class="payment-basket__status">
				<div class="payment-basket__status__icon-block">
					<a class="payment-basket__status__icon-block__link">
						<i class="fa fa-shopping-basket"></i>
					</a>
				</div>
				<div class="payment-basket__status__basket">
					<span class="payment-basket__status__basket-value">0</span>
					<span class="payment-basket__status__basket-value-descr">товаров</span>
				</div>
			</div>
		</div>
		<div class="authorization-block">
			@if (Auth::user())
				{{ Auth::user()->name }}

				<a class="dropdown-item" href="{{ route('logout') }}"
					onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
				 	{{ __('Выйти') }}
			 	</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
					@csrf
				</form>
			@else
				<a href="{{ route('register') }}" class="xc">{{ __('Регистрация') }}</a>
				<a href="{{ route('login') }}" class="authorization-block__link">{{ __('Войти') }}</a>
			@endif
		</div>
	</div>
</header>
