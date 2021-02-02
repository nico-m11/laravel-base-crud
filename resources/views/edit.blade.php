@extends("layouts.layouts")
@section("title","Create Data")


@section("main")
<div class="container">
    <div class="jumbotron py-4">
        <h1 class="">Modifica Utente</h1>
        <hr class="my-3">
        <form method="post" action="{{ route('booking.update', $dettagli->id) }}">
        @csrf
        @method('PATCH')
            <div class="form-group row">
                <label for="inputGuestName" class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-10">
                    <input type="name" class="form-control" id="inputGuestName" name="guestFullName" placeholder="Nome" value='{{ $dettagli->guest_full_name }}'>
                    @error('guestFullName')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="inputGuestCard" class="col-sm-2 col-form-label">Carta di Credito</label>
                <div class="col-sm-10">
                    <input type="name" class="form-control" id="inputGuestCard" name="guestCard" placeholder="Carta di Credito" value="{{ $dettagli->guest_credit_card }}">
                    @error('guestCard')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="inputGuestRoom" class="col-sm-2 col-form-label">Stanza</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputGuestRoom" name="guestRoom" placeholder="Stanza" value="{{ $dettagli->room }}">
                    @error('guestRoom')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="inputGuestFromTo" class="col-sm-2 col-form-label">From/To</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" id="inputGuestFromTo" name="guestFrom" placeholder="From" value="{{ $dettagli->from_date }}">
                    @error('guestFrom')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-sm-5">
                    <input type="date" class="form-control" id="inputGuestFromTo" name="guestTo" placeholder="To" value="{{ $dettagli->to_date }}">
                    @error('guestTo')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="inputGuestDetails" class="col-sm-2 col-form-label">Altri dettagli:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputGuestDetails" name="guestDetails" placeholder="Altri dettagli" value="{{ $dettagli->more_details }}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Modifica</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
