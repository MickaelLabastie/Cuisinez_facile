@extends('base')

@section('content')


    <div class="container">


        <h1 class="text-center my-5">Modifier l'article</h1>


        <form action="{{ route('articles.update', $article) }}" method="POST">


            @csrf
            @method('PUT')
            
            <div class="col-12 my-5">

                    <div class="form-group">

                        <label for="article_title">Titre</label>
                        <input type="text" id="article_title" name="article_title" value="{{ $article->article_title }}" class="form-control @error('article_title') is-invalid @enderror" placeholder="Titre de l'article" />
                        @error('article_title')

                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>

                        @enderror

                    </div>

            </div>


            <div class="col-12">

                    <div class="form-group">
                        <label for="article_category">Catégories d'articles</label>
                        <select name="article_category" class="form-control">

                                @foreach ($article_categories as $article_category)

                                        <option value="{{ $article_category->id }}" {{ $article_category->id === $article->article_categories_id ? 'selected' : '' }} >{{ $article_category->category_title }}</option>
                                    
                                @endforeach

                        </select>
                    </div>

            </div>


            <!-- <div class="col-12 my-5">

                    <div class="form-group">

                        <label for="article_media">Média</label>
                        <input type="file" id="article_media" name="article_media" value="{{ $article->article_media }}" class="form-control @error('article_media') is-invalid @enderror" />
                        <small class="form-text text-muted">Téléchargez une image associée  à votre recette</small>
                        @error('subtitle')

                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>

                        @enderror

                    </div>

            </div> -->
            

            <div class="col-12 my-5">

                    <div class="form-group">
                        
                        <label for="article_content">Contenu</label>
                        <textarea name="article_content" id="tinymce-editor" class="form-control w-100 @error('article_content') is-invalid @enderror">{{ $article->article_content }}</textarea>
                        @error('content')

                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>

                        @enderror

                    </div>

            </div>


            <div class="d-flex justify-content-center mb-5">
                <button type="submit" class="btn btn-primary">Modifier l'article</button>
            </div>


        </form>
            

    </div>

    
@endsection