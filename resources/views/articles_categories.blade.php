@extends('base')

@section('content')


    @foreach ($articles_categories as $category_index => $articles_category)

            <div class="d-flex flex-column justify-content-center align-items-center my-5 w-80">


                <h2 class="mb-5">{{ $articles_category->category_title }}</h2>


                <div class="row row-cols-2 row-cols-md-4 px-4 mb-5">

                    @for ($index = 0;$index < $limit_articles;$index++)
                    
                            <div class="col">
                            

                                <a href="{{ route('article', $articles_response[$category_index][$index]->id) }}">
                                    <div class="card shadow" style="height: 370px;border-radius: 20px;">
                                    
                                            <img src="{{ $articles_response[$category_index][$index]->article_media }}" alt="Image de l'article" style="border-radius: 20px 20px 0 0;">
                                            <div class="card-body">

                                                    <h5 class="text-center">{{ $articles_response[$category_index][$index]->article_title }}</h5>

                                            </div>

                                    </div>
                                </a>


                            </div>

                    @endfor    


                </div>
                <!-- <h6><a href="#">J'en veux plus !</a></h6> -->

            </div>

    @endforeach

    
@endsection