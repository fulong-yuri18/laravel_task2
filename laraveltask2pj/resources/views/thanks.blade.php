@extends('layouts.hello')
<!-- <style>
	p{
		margin:0;
	}
</style> -->
@section('title', 'thanks.blade.php')

@section('content')
  <p>お問い合わせありがとうございます。</p>
  <p><a href="{{ route('index.add') }}">トップへ戻る</a></p>
@endsection
