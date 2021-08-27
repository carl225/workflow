@extends('layouts.app')
@section('content')

    <div>

        @foreach ($produits as $key => $data)
            {{  $data->nom }}
            {{  $data->type }}
        @endforeach
        @stop
      
    </div>

@endsection