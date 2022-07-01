@extends('base')

@section('content')


    <div class="container">


        <div class="row justify-content-center my-5">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-header">Créer un compte</div>


                    <div class="card-body d-flex flex-column">

                        
                        <h6 class="container text-center fw-bold">Bienvenu(e) !<br>Rejoignez la communauté Cuisinez facile !</h6>


                        <form method="POST" action="{{ route('register') }}">


                            @csrf


                            <div class="row mb-3">

                                    <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                                    <div class="col-md-6">

                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off">
                                            @error('email')

                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>

                                            @enderror

                                    </div>

                            </div>


                            <div class="row mb-3">

                                    <label for="password" class="col-md-4 col-form-label text-md-end">Mot de passe</label>

                                    <div class="col-md-6">

                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="off">
                                            @error('password')
                                            
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>

                                            @enderror

                                    </div>

                            </div>


                            <div class="row mb-3">

                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirmer le mot de passe</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="off">
                                    </div>

                            </div>


                            <div class="row mb-3">

                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary rounded-pill px-4">Inscription</button>
                                    </div>

                            </div>


                        </form>

                        <a class="mt-5 align-self-center" href="{{ route('login') }}">Déjà inscrit(e) ? C'est par ici<i class="fa-solid fa-arrow-right ms-2"></i></a>


                    </div>


                </div>
            </div>
        </div>


    </div>


@endsection
