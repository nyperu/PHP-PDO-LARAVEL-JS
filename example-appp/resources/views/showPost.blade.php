@extends('layouts.app')


@section('content')
    <h1>Post page <?php echo $veri1." ".$veri2 ?></h1>
@endsection

@section('footer')

    <script>alert('hello visitor <?php echo $veri1." ".$veri2 ?>')</script>
@endsection
