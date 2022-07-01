@extends('base')

@section('content')

    
    <div class="container-fluid">

        <ul class="nav nav-tabs mb-3" id="nav-tab" role="tablist">

            <li class="nav-item">
                <a class="nav-link active" id="tab-articles-tab" data-toggle="tab" href="#tab-articles" role="tab" aria-controls="tab-articles" aria-selected="true">Articles</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="tab-articles_categories-tab" data-toggle="tab" href="#tab-articles_categories" role="tab" aria-controls="tab-articles_categories" aria-selected="false">Catégories d'articles</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="tab-recipes-tab" data-toggle="tab" href="#tab-recipes" role="tab" aria-controls="tab-recipes" aria-selected="false">Recettes</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="tab-recipes_categories-tab" data-toggle="tab" href="#tab-recipes_categories" role="tab" aria-controls="tab-recipes_categories" aria-selected="false">Catégories de recettes</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="tab-ingredients-tab" data-toggle="tab" href="#tab-ingredients" role="tab" aria-controls="tab-ingredients" aria-selected="false">Ingrédients</a>
            </li>

        </ul>

        <div class="tab-content" id="tab-tabContent">


            <div class="tab-pane fade show active" id="tab-articles" role="tabpanel" aria-labelledby="tab-articles-tab">
                @include('admin.article.index')
            </div>

            <div class="tab-pane fade" id="tab-articles_categories" role="tabpanel" aria-labelledby="tab-articles_categories-tab">
                ...
            </div>

            <div class="tab-pane fade" id="tab-recipes" role="tabpanel" aria-labelledby="tab-recipes-tab">
                ...
            </div>

            <div class="tab-pane fade" id="tab-recipes_categories" role="tabpanel" aria-labelledby="tab-recipes_categories-tab">
                ...
            </div>

            <div class="tab-pane fade" id="tab-ingredients" role="tabpanel" aria-labelledby="tab-ingredients-tab">
                ...
            </div>


        </div>


    </div>

    
@endsection