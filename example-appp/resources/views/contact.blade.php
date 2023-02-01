@extends('layouts.app')


@section('content')
<h1>Content page</h1>
<?php
    if(count($people)){
        foreach($people as $person) {
            ?>
            <li> <?php echo $person;
            }?>
            </li>
<?php } ?> <br> <HR>
ŞİMDİ KISALTILMIŞ ŞEKİLDE RAZOR GİBİ YAZIYORUZ.<BR>
@if(count($people))
    @foreach($people as $person)
        <li><?php echo $person ?></li>
    @endforeach
@endif


@section('footer')

    <script>alert('hello visitor')</script>
@endsection
