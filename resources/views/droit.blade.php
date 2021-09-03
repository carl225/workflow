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
                                <th>email</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $key => $data)
                            <tr>
                            <form method="POST" action="{{ url('validerdoc') }}">
                            @csrf
                                <th name="{{$data->id}}"> {{  $data->name }}</th>
                                <th >{{  $data->email }}</th>
                                
                                <th>
                                  
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Ajout</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Suppression</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
                                        <label class="form-check-label" for="inlineCheckbox3">Valider</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
                                        <label class="form-check-label" for="inlineCheckbox3">voir</label>
                                    </div>
                                </th>
                                <th> 
                                
                            
                                </th>
                            </form> 
                            </tr>
                           
                        @endforeach
                        </tbody>
                        
                       
                    </table>
                    <button type="submit" class="btn btn-primary">
                                    {{ __('Valider') }}
                    </button>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
