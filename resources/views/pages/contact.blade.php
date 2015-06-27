@extends('app')

@section('content')
<main class="container">
    <h1>Contact.</h1>
    @include("partials.errors")
    <form method="POST" action="/login">
    {!! csrf_field() !!}
        <div>
            <input type="text" name="name" placeholder="Your Name" value="{{ old('name') }}" required>
        </div>
        <div>
            <input type="email" name="email" placeholder="email@example.com" value="{{ old('email') }}" required>
        </div>
        <div>
            <textarea name="message" rows="6" placeholder="Your Message..." required>{{ old('message') }}</textarea>
        </div>
        <div>
            <button type="submit">
                Send Message
            </button>
        </div>
    </form>
</main>
@endsection