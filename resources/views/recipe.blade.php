@extends('base')

@section('content')


    <div class="container d-flex flex-column justify-content-center align-items-center">


        <h3>{{ $recipe->recipe_title }}</h3>

        <img src="{{ $recipe->recipe_medias()->first()->media_name }}" alt="Image d'une recette" style="height: 450px;border-radius: 20px;">

        <div class="container my-5">

                <h5 class="text-center mb-4">Liste des ingrédients</h5>
                <div class="row row-cols-2 row-cols-sm-3 row-cols-md-6 g-4 px-4 mb-2 justify-content-center">

                @foreach ($ingredients_list as $ingredient_list)

                        <div class="col text-center">

                            
                            <img src="{{ $ingredient_list->ingredient_img }}" class="card-img" alt="Image d'ingrédient" style="border-radius: 20px;">
                            <h5>{{ $ingredient_list->ingredient_name }}</h5>
                            <span>{{ $ingredient_list->pivot_quantity }}</span>
                            <span>{{ $ingredient_list->pivot_unity }}</span>


                        </div>
                            
                @endforeach

                </div>


                <h5 class="text-center mb-4">Les étapes</h5>

                <p>{{ $recipe->recipe_content }}</p>


        </div>


    </div>

    
@endsection