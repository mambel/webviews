@extends('layout')

@section('title','Contact')

@section('content')
    <h1>Contact</h1>

    <form action=" {{route('contact')}} " method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nombre" value="Angel"><br>
        <input type="text" name="email" placeholder="email" value="mambelangel5@gmail.com"><br>
        <input type="text" name="subject" placeholder="subject" value="Asunto de prueba"><br>
        <textarea name="content" placeholder="Mensaje...">Mensaje de prueba</textarea><br>
        <button>Enviar</button>
    </form>
@endsection
