
@extends("layouts.layouts")
@section("title","Home")


@section("main")

<div class="container">
        <div class="row">
                @foreach ($data as $key )
                <div class="col-3">
                    <div class="card mb-5" style="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $key->guest_full_name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Stanza n° {{ $key->room }}</h6>
                            <a href="{{route('booking.show', $key->id)}}" class="btn btn-info">Dettagli Riservato</a>
                            <a href="{{route('booking.edit', $key->id)}}" class="btn btn-danger">Modifica</a>
                        </div>
                    </div>
                </div>
                @endforeach




        </div>
    </div>

@endsection
