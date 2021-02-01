
@extends("layouts.layouts")
@section("title","Home")


@section("main")

<div class="container">
    <div class="jumbotron">
        <a href="/" class="btn btn-danger p-3"><i class="bi bi-arrow-90deg-left"></i></a>
        <h1 class="text-align">{{ $datas->guest_full_name }}
        <h3>Stanza n° {{$datas->room}}</h3>
        <h5>From: {{$datas->from_date}} - To: {{$datas->to_date}}
        <hr class="my-3">
        <h6>Altri Dettagli:</h6>
        <p>{{$datas->more_details}}
    </div>
</div>

@endsection
