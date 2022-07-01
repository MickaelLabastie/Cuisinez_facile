@extends('base')

@section('content')


    <div class="container my-5">

            <h2 class="text-center mb-4">Ce mois-ci on mange...</h2>
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-6 g-4 px-4 mb-2 justify-content-center">

                    @foreach ($ingredients_random as $ingredient_random)

                            <div class="col text-center">


                                <img src="{{ $ingredient_random->ingredient_img }}" class="card-img" alt="Image d'ingrédient" style="border-radius: 20px;">
                                <h5>{{ $ingredient_random->ingredient_name }}</h5>


                            </div>
                        
                    @endforeach

            </div>

    </div>


    <div class="container my-5">

            <h2 class="text-center mb-4">Mes ingrédients</h2>
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-6 g-4 px-4 mb-2">

                    @foreach ($ingredients_list as $ingredient_list)

                            <div class="col text-center">


                                <img src="{{ $ingredient_list->ingredient_img }}" class="card-img" alt="Image d'ingrédient" style="border-radius: 20px;">
                                <h5>{{ $ingredient_list->ingredient_name }}</h5>


                            </div>
                        
                    @endforeach

            </div>

    </div>


        <div class="d-flex justify-content-center mt-5">
                {{ $ingredients_list->links('vendor.pagination.custom') }}
        </div>

    
@endsection