@extends('layouts.app')

@section('content')

    <section id="about" class="about-area" style="margin-top: 125px">
        <h3 style="margin:25px;"> Ajouter une actualité supplémentaire :</h3>

        @if ($errors->any())
            <div class="container" style="margin:25px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="list-group-item list-group-item-danger">
                            {{ $error }}
                        </li>
                    @endforeach

                </ul>

            </div>
        @endif
        <div class="container" style="margin:25px;">
            <form class="form-group" action="/Actualite" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" style="margin:15px;" name="title" placeholder="Titre de l'article" class="form-control">
                <textarea name="description" style="margin:15px;" placeholder=" Texte de l'Article"
                    class="form-control"> </textarea>
                <div class="custom-file" style="margin:15px;">
                    <input type="file" class="custom-file-input" id="customFileLang" lang="fr" name="image">
                    <label class="custom-file-label" for="customFileLang">Selectionner une image de description</label>
                </div>
                <button style="margin:25px;" type="submit" class="btn btn-outline-primary">Enregistrer</button>
            </form>

        </div>
    </section>

@endsection
