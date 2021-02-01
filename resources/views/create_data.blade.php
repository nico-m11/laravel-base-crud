@extends("layouts.layouts")
@section("title","Create Data")


@section("main")
<div class="container">
    <div class="jumbotron py-4">
        <h1 class="">Aggiungi un nuovo utente</h1>
        <hr class="my-3">
        <form method="post" action="{{ route('booking.store') }}">
        @csrf
            <div class="form-group row">
                <label for="inputGuestName" class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-10">
                    <input type="name" class="form-control" id="inputGuestName" name="guestFullName" placeholder="Nome">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputGuestCard" class="col-sm-2 col-form-label">Carta di Credito</label>
                <div class="col-sm-10">
                    <input type="name" class="form-control" id="inputGuestCard" name="guestCard" placeholder="Carta di Credito">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputGuestRoom" class="col-sm-2 col-form-label">Stanza</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputGuestRoom" name="guestRoom" placeholder="Stanza">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputGuestFromTo" class="col-sm-2 col-form-label">From/To</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" id="inputGuestFromTo" name="guestFrom" placeholder="From">
                </div>
                <div class="col-sm-5">
                    <input type="date" class="form-control" id="inputGuestFromTo" name="guestTo" placeholder="To">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputGuestDetails" class="col-sm-2 col-form-label">Altri dettagli:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputGuestDetails" name="guestDetails" placeholder="Altri dettagli">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Crea</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
