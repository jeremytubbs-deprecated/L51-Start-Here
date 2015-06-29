@extends('app')

@section('content')
<main class="container">
	<form>
		@include('blog.admin.partials.form')
	</form>
</main>
@endsection

@section('styles')
	<link href="/css/admin.css" rel="stylesheet">
@endsection