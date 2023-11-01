@extends('layouts.master')

@section('content')
<div class="block" id="contact">
    <div class="containerContact text-center">
        <h1>Contact Us</h1>

        @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif

        <form action="/contact" class="text-left contactForm pb-5" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Imie i nazwisko</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="message">Treść maila</label>
                <textarea name="message" id="message" class="form-control" required></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-contact">Wyślij</button>
            </div>
        </form>
    </div>
</div>
@stop