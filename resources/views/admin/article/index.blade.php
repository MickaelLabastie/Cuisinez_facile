<div class="container">


    <h1 class="text-center mt-5">Articles</h1>


    <div class="d-flex justify-content-center">

            <a href="{{ route('articles.create') }}" class="btn btn-info my-3">
                Ajouter un nouvel article
                <i class="fas fa-plus mx-1"></i>
            </a>

    </div>


    <table class="table table-hover">

            <thead>

                    <tr class="tr-active">
                        <th scope="col">Id</th>
                        <th scope="col">Titre</th>
                        <th scope="col">Crée le</th>
                        <th scope="col">Actions</th>
                    </tr>

            </thead>

            @foreach ($articles as $article)

                    <tbody>

                            <tr>
                                <th>{{ $article->id }}</th>
                                <td>{{ $article->article_title }}</td>
                                <td>{{ $article->dateFormatted() }}</td>
                                <td class="d-flex">


                                    <a href="{{ route('articles.edit', $article) }}" class="btn btn-warning mx-3">Editer</a>
                                    

                                    <button type="button" class="btn btn-danger mx-3" onclick="document.getElementById('modal-open-{{ $article->id }}').style.display='block'">Supprimer</button>


                                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST">

                                            @csrf
                                            @method('DELETE')

                                            <div class="modal" id="modal-open-{{ $article->id }}">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">


                                                        <div class="modal-header">

                                                                <h5 class="modal-title">Supression définitive</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="document.getElementById('modal-open-{{ $article->id }}').style.display='none'">
                                                                    <span aria-hidden="true"></span>
                                                                </button>

                                                        </div>


                                                        <div class="modal-body">
                                                            <p>Êtes-vous sûr(e) de vouloir supprimer l'article ?</p>
                                                        </div>


                                                        <div class="modal-footer">

                                                                <button type="submit" class="btn btn-primary">Confirmer</button>
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="document.getElementById('modal-open-{{ $article->id }}').style.display='none'">Annuler</button>

                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                    </form>


                                </td>
                            </tr>
                
                    </tbody>

            @endforeach
        
    </table>


    <div class="d-flex justify-content-center mt-5">
        {{ $articles->links('vendor.pagination.custom') }}
    </div>
    

</div>