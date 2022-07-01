@extends('base')

@section('content')


    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-header">Réinitialiser le mot de passe</div>


                    <div class="card-body">


                        @if (session('status'))

                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>

                        @endif


                        <h6 class="container text-center fw-bold">Vous avez oublié votre mot de passse ou vous souhaitez le changer ?<br>Rentrez votre email !</h6>


                        <form method="POST" action="{{ route('password.email') }}">


                            @csrf


                            <div class="row my-4 mb-3">

                                    <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                                    <div class="col-md-6">

                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')

                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>

                                            @enderror

                                    </div>

                            </div>


                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">

                                        <button type="submit" class="btn btn-success rounded-pill px-4">Valider</button>

                                </div>
                            </div>


                        </form>


                    </div>


                </div>
            </div>
        </div>
    </div>


@endsection
