@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header paiement">{{ __('Effectuer un paiement') }}</div>

                <div class="card-body paimnt">
                    <form method="POST" action="{{ route('paiements.create') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="date_paiement" class="col-md-4 col-form-label text-md-end">{{ __('Date_paiement') }}</label>

                            <div class="col-md-6">
                                <input id="date_paiement" type="date" class="form-control @error('date_paiement') is-invalid @enderror" name="date_paiement" value="{{ old('date_paiement') }}" required autocomplete="date_paiement" autofocus>

                                @error('date_paiement')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="row mb-3">
                            <label for="moyen_paiement" class="col-md-4 col-form-label text-md-end">{{ __('Moyen_paiement') }}</label>

                            <div class="col-md-6">
                                <input id="moyen_paiement" type="text" class="form-control @error('moyen_paiement') is-invalid @enderror" name="moyen_paiement" value="{{ old('moyen_paiement') }}" required autocomplete="moyen_paiement" autofocus>

                                @error('moyen_paiement')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="commande" class="col-md-4 col-form-label text-md-end">{{ __('Commande') }}</label>

                            <div class="col-md-6">
                                <!--<input id="prix" type="text" class="form-control @error('prix') is-invalid @enderror" name="prix" value="{{ old('prix') }}" required autocomplete="prix" autofocus> -->
                                <select name="commandeId" }} class="form-control @error('commande') is-invalid @enderror">
                                    @foreach($commande as $comnd)
                                    <option value="{{$comnd->id}}">{{$comnd->id}}</option>
                                    @endforeach
                                </select>

                                @error('commande')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

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
