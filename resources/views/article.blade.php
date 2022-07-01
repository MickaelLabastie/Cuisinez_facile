@extends('base')

@section('content')


    <div class="container">

            <h2>{{ $article->category()->first()->category_title }}</h2>

            <h5 class="display-4 text-center">{{ $article->article_title }}</h5>
            <p class="text-center">{{ $article->user()->first()->email }} le {{ $article->dateFormatted() }}</p>

            <p class="my-5">{{ $article->article_content }}</p>

            <div class="d-flex justify-content-center">

                    <a href="{{ route('articles_categories') }}" class="btn btn-primary">
                        <i class="fa-solid fa-arrow-left"></i>
                        Retour
                    </a>

            </div>

    </div>


@endsection