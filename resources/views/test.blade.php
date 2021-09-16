@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Documents') }}</div>

            
            
                    <table class="table">
                    <thead>
                        <tr>
                       
                        <th scope="col">nom</th>
                        <th scope="col">type</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($produits as $produit)
                    @csrf
                    <form method="POST" action="{{ url('validerdoc/'.$produit->id) }}">
                        <tr>
                       
                        <td>{{  $produit->nom }}</td>
                        <td>{{  $produit->type }}</td>
                        @if($produit->profile == auth()->user()->profile)
                        <td>
                            <button class="btn btn-info"> editer </button>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-success">Valider</button>
                        </td>

                        <td>
                            <button class="btn btn-danger"> Supprimer </button>  
                        </td>                             
                        
                        @else
                        <td>
                            <button class="btn btn-info"> Demander</button>  
                        </td>
                        @endif
                        </tr>
                    </form> 
                    @endforeach 
                    </tbody>
                    </table>
                                    
                </div>
            </div>
        </div>
   
</div>
@endsection
