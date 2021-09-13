@extends('layouts.app')

@section('content')
<?php use App\Http\Controllers\ControllerProduit;?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Documents') }}</div>

                <div class="card-body">
                   {{dd($produits)}}
                 
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
