@extends('app')

@section('content')
<main class="container">
	<form>
		@include('admin.blog.partials.form')
	</form>
</main>
@endsection

@section('styles')
	<link href="/css/admin.css" rel="stylesheet">
@endsection