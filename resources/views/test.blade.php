@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Documents') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>nom</th>
                                <th>type</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($produits as $key => $data)
                            <tr>
                           
                                <th> {{  $data->nom }}</th>
                                <th>{{  $data->type }}</th>
                                
                                <th><button class="btn btn-secondary"> voir </button></th>
                                <th><button onclick="location.href='{{url('validerdoc')}}'"  class="btn btn-secondary">valider</button></th>
                           
                            </tr>
                           
                        @endforeach
                        </tbody>
                        
                       
                    </table>
                 
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
