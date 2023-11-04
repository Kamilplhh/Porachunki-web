@extends('layouts.master')

@section('content')
<div class="block limit" id="contact">
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
<div class="block limit">

</div>
<div class="d-flex justify-content-between block footer limit pb-2">
    <div>
        Biuro Rachunkowe PORACHUNKI <br>
        ul. Macieja Rataja 62/8 <br>
        10-260 Olsztyn <br>
        NIP: 7451816138
    </div>
    <div>
        Godziny otwarcia: <br>
        Poniedziałek - piątek 9-18 <br>
        Sobota 10-14
    </div>
    <div>
        Telefon: <br>
        +48 787 608 737
    </div>
</div>
@stop