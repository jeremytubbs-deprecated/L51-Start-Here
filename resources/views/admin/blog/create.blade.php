@extends('app')

@section('content')
<main class="container">
	<form>
		@include('admin.blog.partials.form')
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
