@extends('base')

@section('content')


    <div class="d-flex flex-column justify-content-center align-items-center my-5 w-80">


        <h2 class="mb-5">Articles</h2>
        <div class="row row-cols-2 row-cols-md-4 px-4 mb-5">


            @for ($articles as $article)

                    <div class="col">


                        <a href="#">
                            <div class="card shadow" style="width: 300px;height: 400px;">
                            
                                    <img src="{{ asset('pictures/test.jpg') }}" class="" alt="Image d'une recette">
                                    <div class="card-body">

                                            <h5 class="card-title">{{ $article->title }}</h5>
                                            <p class="card-text">{{ $article->subtitle }}</p>

                                            {{-- <span class="badge bg-info">{{ $article->category->label }}</span> --}}

                                            <a href="{{ route('article', $article->slug) }}" class="btn btn-primary">
                                                Lire la suite
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>

                                    </div>

                            </div>
                        </a>


                    </div>

            @endfor    


        </div>
        <h6><a href="#" target="_blank" class="d-block pt-4">J'en veux plus !</a></h6>


    </div>
    

    <div class="d-flex justify-content-center mt-5">
        {{ $articles->links('vendor.pagination.custom') }}
    </div>
    

@endsection