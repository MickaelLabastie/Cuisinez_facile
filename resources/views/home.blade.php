@extends('base')

@section('content')


    <div class="container my-5">

            <h2 class="text-center mb-4">Ce mois-ci on mange...</h2>
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-6 g-4 px-4 my-3 justify-content-center">

                    @foreach ($ingredients as $ingredient)

                            <div class="col text-center">

                                    <img src="{{ $ingredient->ingredient_img }}" class="card-img" alt="Image d'un ingrédient" style="border-radius: 20px;">
                                    <h5>{{ $ingredient->ingredient_name }}</h5>

                            </div>
                        
                    @endforeach

            </div>
            <span><a href="{{ route('ingredients') }}" class="d-block text-center pt-4">J'en veux plus !</a></span>

    </div>


    @foreach ($recipe_categories as $category_index => $recipe_category)
    
            <div class="container my-5">

                <h2 class="text-center mb-5">{{ $recipe_category->category_title }}</h2>
                <div class="row px-4 mb-5">

                    @for ($index = 0;$index < $limit_recipes;$index++)

                            <div class="col-12 col-md-6 col-lg-3">

                                <a href="{{ route('recipe', $recipes_response[$category_index][$index]->id) }}">
                                    <div class="card shadow" style="height: 400px;border-radius: 20px;">
                                    
                                            <!-- <a href="#">
                                                <span class="iconify position-absolute" data-icon="mdi:cards-heart-outline" style="font-size: 35px;"></span>
                                            </a> -->
                                            <img src="{{ $recipes_response[$category_index][$index]->oldest_recipe_medias()->first()->media_name }}" alt="Image d'une recette" style="border-radius: 20px 20px 0 0;">
                                            <div class="card-body">
                                                <p class="text-center">{{ $recipes_response[$category_index][$index]->recipe_title }}</p>
                                            </div>

                                    </div>
                                </a>


                            </div>

                    @endfor    


                </div>
                <span><a href="{{ route('recipes_category', $recipe_category->category_slug) }}" class="d-block text-center pt-4">J'en veux plus !</a></span>

            </div>

    @endforeach

    
@endsection