@extends('layouts.app')

@section('titulo', 'login')

@section('contenido')

    <div class="w-50 contenedorLogin">
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="pass" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="pass">
            </div>
        </div>
    </div>
@endsection
