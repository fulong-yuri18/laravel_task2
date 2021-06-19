@extends('layouts.hello')
<style>
	p{
		margin:0;
	}
</style>
@section('title', 'index.blade.php')


@section('content')
@if (count($errors) > 0)
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	</ul>
@endif
<form action="/index" method="POST">
	@csrf
	<p>
		氏名
	</p>
	<p>
		<input type="text" name="name">
	</p>
	<p>
		メールアドレス
	</p>
	<p>
		<input type="text" name="mail_address">
	</p>
  <button>送信する</button>
</form>
@endsection
