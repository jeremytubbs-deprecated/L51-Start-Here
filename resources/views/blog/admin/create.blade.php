@extends('app')

@section('content')
<main class="container">
	<form method="POST" action="/admin/posts">
	{!! csrf_field() !!}
		@include('blog.admin.partials.form')
	</form>
</main>
@endsection

@section('styles')
	<link href="/css/vendor/admin.css" rel="stylesheet">
@endsection

@section('scripts')
	<script src="{{ asset('/js/vendor/admin.js') }}"></script>
	<script src="{{ asset('/js/admin.js') }}"></script>
@endsection
