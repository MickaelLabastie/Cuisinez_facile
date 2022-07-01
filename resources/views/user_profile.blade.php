@extends('base')

@section('content')


    <div class="container d-flex flex-column justify-content-center align-items-center shadow border-dark p-5" style="border-radius: 20px;">

            <h4 >Mes informations</h4>

            <div class="row">

                    <div class="col col-md-4 bg-secondary w-25 text-center" style="border-radius: 20px;">
                        <a href="#" class="text-white"><h6>Mes informations</h6></a>
                    </div>

                    <div class="col col-md-8 px-5">
                        <span>Email</span>
                        <span class="form-control">{{ $connected_user->email }}</span>
                        <span>Date de création</span>
                        <span class="form-control">{{ $connected_user->created_at }}</span>
                    </div>

            </div>
 
    </div>

    
@endsection