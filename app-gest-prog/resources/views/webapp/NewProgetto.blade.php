@extends('webapp.template.AllPagesTemplate')
@section('title', 'Crea nuovo Progetto')

@section('content')


<?php $userID = Auth::user()->id;?>
<form action="/progetti" method="POST">
    @csrf 
    
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="Nome" required>
        <input type="text" class="form-control" id="userID" name="userID" required value="{{$userID}}" hidden>
       
    </div>
    
    <div class="mb-3">
        <label for="descrizione" class="form-label">Descrizione</label>
        <textarea class="form-control" id="descrizione" name="Descrizione" rows="3" required></textarea>
    </div>
    
    <div class="mb-3">
        <label for="tipologia" class="form-label">Tipologia</label>
        <select class="form-select" id="tipologia" name="Tipologia" required>
            <option value="" selected>Scegli...</option>
            <option value="Frontend">Frontend</option>
            <option value="Backend">Backend</option>
            <option value="Fullstack">Fullstack</option>
            <!-- Altre tipologie qui -->
        </select>
    </div>
    
    <div class="mb-3">
        <label for="linguaggioSviluppo" class="form-label">Linguaggio di Sviluppo</label>
        <input type="text" class="form-control" id="linguaggioSviluppo" name="LinguaggioSviluppo" required>
    </div>
    
    <div class="mb-3">
        <label for="stato" class="form-label">Stato</label>
        <select class="form-select" id="stato" name="Stato" required>
            <option value="" selected>Scegli...</option>
            <option value="In Corso">In Corso</option>
            <option value="Completato">Completato</option>
            <option value="Sospeso">Sospeso</option>
            <!-- Altri stati qui -->
        </select>
    </div>
    
    <button type="submit" class="btn btn-primary">Invia</button>
</form>

@endsection