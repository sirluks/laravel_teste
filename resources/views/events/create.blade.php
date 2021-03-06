@extends('layouts.main')

@section('title', 'Sir Luks Company')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Nome do Evento">
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" name="city" id="city" class="form-control" placeholder="Local do Evento">
        </div>
        <div class="form-group">
            <label for="title">O evento é privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no Evento?"></textarea>
        </div>
        <input type="submit" value="Criar Evento" class="btn btn-primary">
    </form>
</div>

@endsection