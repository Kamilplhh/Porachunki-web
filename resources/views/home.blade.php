@extends('layouts.master')

@section('content')
<div class="block" id="home">
    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe src="https://maps.google.com/maps?q=Mercedes,%20Towarowa,%20Olsztyn,%20Poland&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 100%; height: 100%;"></iframe>
        </div>
        <div class="map-text text-left py-2">
            <p>Morozya, Kalerowicza 12</p>
            <p>Olsztyn 80-300</p>
        </div>
    </div>
</div>
@stop