@extends('layouts.app')

@section('content')
<div class="content-middle">
  <h1>404 Страница не найдена</h1>
  <p>Кажется, вы попали на несуществующую страницу.</p>
  <p>
    <a href="{{ route('home') }}">Вернуться на главную страницу</a>
  </p>
</div>
@endsection
