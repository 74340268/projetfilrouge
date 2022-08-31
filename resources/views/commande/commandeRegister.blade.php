@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header comm">{{ __('Effectuer commande') }}</div>

                <div class="card-body cmnd">
                    <form method="POST" action="{{ route('commande.create') }}">
                        @csrf

            
                        <div class="row mb-3">
                            <label for="produit" class="col-md-4 col-form-label text-md-end">{{ __('Produit') }}</label>

                            <div class="col-md-6">
                                <!--<input id="prix" type="text" class="form-control @error('prix') is-invalid @enderror" name="prix" value="{{ old('prix') }}" required autocomplete="prix" autofocus> -->
                                <select name="produitId"  class="form-control @error('produitId') is-invalid @enderror">
                                    @foreach($produit as $prdt)
                                    <option value="{{$prdt->id}}">{{$prdt->nom}}</option>
                                    @endforeach
                                </select> 

                                @error('produitId')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- <div class="row mb-3">
                            <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Adresse_client') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="text" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image" autofocus>

                                @error('adresse_client')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enregistrer') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
