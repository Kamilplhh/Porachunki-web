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

        <form action="/" class="text-left contactForm pb-5" method="post">
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
<div class="block">
    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe src="https://maps.google.com/maps?q=Mercedes,%20Towarowa,%20Olsztyn,%20Poland&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 100%; height: 100%;"></iframe>
        </div>
        <div class="map-text text-left py-2 pb-5">
            <p>Morozya, Kalerowicza 12</p>
            <p>Olsztyn 80-300</p>
        </div>
    </div>
</div>
@stop