@extends('layouts.app')
@section('title', 'Noveau')
@section('content')

    <section id="about" class="about-area" style="margin-top: 125px">
        <h3 style="margin:25px;"> Ajouter un produit à Bi-Shop :</h3>

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
            <form class="form-group" action="/BiShop" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" style="margin:15px;" name="title" placeholder="Nom du produit" class="form-control">
                <input type="text" style="margin:15px;" name="price" placeholder="Prix du produit Ex: 1500 XOF" class="form-control">
                <textarea name="description" style="margin:15px;" placeholder=" Description"
                    class="form-control"> </textarea>
                    <div>
                        <label for="exampleFormControlSelect1">Categorie de l'article</label>
                        <select name="cat" class="form-control" id="exampleFormControlSelect1">
                          <option  value="1">Electricite</option>
                          <option  value="2">Climatisation</option>
                          <option  value="3">Securite</option>
                          <option  value="4">Domotique</option>
                        </select>
                      </div>
                <div class="custom-file" style="margin:15px;">
                    <input type="file" class="custom-file-input" id="customFileLang" lang="fr" name="image">
                    <label class="custom-file-label" for="customFileLang">Selectionner une image de description</label>
                </div>
                <button style="margin:25px;" type="submit" class="btn btn-outline-primary">Ajouter</button>
            </form>

        </div>
    </section>

@endsection
