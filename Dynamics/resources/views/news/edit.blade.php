@extends('layouts.app')

@section('content')

    <section id="about" class="about-area" style="margin-top: 125px">
        <h3 style="margin:25px;"> Modification d'une actualité :</h3>

        <div class="container" style="margin:25px;">
            <form class="form-group" action="/Actualite/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <input type="text" style="margin:15px;" name="title" value="{{ $post->title }}" class="form-control">
                <textarea name="description" style="margin:15px;"
                    class="form-control"> {{ $post->description }} </textarea>
                <button style="margin:25px;" type="submit" class="btn btn-outline-primary">Enregistrer</button>
            </form>

        </div>
    </section>

@endsection
