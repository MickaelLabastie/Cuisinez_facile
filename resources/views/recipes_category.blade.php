@extends('base')

@section('content')

    
    <h2 class="text-center mb-5">{{ $category_title }}</h2>


    <div class="row row-cols-md-6 px-4 mb-5">

        @foreach ($recipes as $recipe)

                <div class="col-12 col-md-6 col-lg-3 mb-5">


                    <a href="{{ route('recipe', $recipe->id) }}">
                        <div class="card shadow" style="height: 400px;border-radius: 20px;">
                        
                                <!-- <a href="#">
                                    <span class="iconify position-absolute" data-icon="mdi:cards-heart-outline" style="font-size: 35px;"></span>
                                </a> -->
                                <img src="{{ $recipe->recipe_medias()->first()->media_name }}" class="" alt="Image d'une recette" style="border-radius: 20px 20px 0 0;">
                                <div class="card-body">
                                    <span class="text-center">{{ $recipe->recipe_title }}</span>
                                </div>

                        </div>
                    </a>


                </div>

        @endforeach    


    </div>


@endsection