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
                        @foreach ($produits as $produit)
                           
                            <tr>
                            <form method="POST" action="{{ url('validerdoc/'.$produit->id) }}">
                            @csrf
                            <th > </th>
                                <th > {{  $produit->nom }}</th>
                                <th >{{  $produit->type }}</th>
                                
                                <th>
                                    @can('view',$produit)
                                    <button class="btn btn-secondary"> voir </button>
                                    @endcan
                                   
                                </th>
                                <th> 
                                    
                                <button type="submit" class="btn btn-secondary">Valider</button>
                            
                                </th>
                            </form> 
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
