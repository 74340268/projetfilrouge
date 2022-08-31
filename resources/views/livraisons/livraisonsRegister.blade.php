@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header livraison">{{ __('Effectuer une livraison') }}</div>

                <div class="card-body lvrsn">
                    <form method="POST" action="{{ route('livraisons.create') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="nom_livreur" class="col-md-4 col-form-label text-md-end">{{ __('Nom_livreur') }}</label>

                            <div class="col-md-6">
                                <input id="nom_livreur" type="text" class="form-control @error('nom_livreur') is-invalid @enderror" name="nom_livreur" value="{{ old('nom_livreur') }}" required autocomplete="nom_livreur" autofocus>

                                @error('nom_livreur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="prenom_livreur" class="col-md-4 col-form-label text-md-end">{{ __('Prenom_livreur') }}</label>

                            <div class="col-md-6">
                                <input id="prenom_livreur" type="text" class="form-control @error('prenom_livreur') is-invalid @enderror" name="prenom_livreur" value="{{ old('prenom_livreur') }}" required autocomplete="prenom_livreur" autofocus>

                                @error('prenom_livreur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>

                        <div class="row mb-3">
                            <label for="date_livraison" class="col-md-4 col-form-label text-md-end">{{ __('Date_livraison') }}</label>

                            <div class="col-md-6">
                                <input id="date_livraison" type="date" class="form-control @error('date_livraison') is-invalid @enderror" name="date_livraison" value="{{ old('date_livraison') }}" required autocomplete="date_livraison" autofocus>

                                @error('date_livraison')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="heure_livraison" class="col-md-4 col-form-label text-md-end">{{ __('Heure_livraison') }}</label>

                            <div class="col-md-6">
                                <input id="heure_livraison" type="heure" class="form-control @error('heure_livraison') is-invalid @enderror" name="heure_livraison" value="{{ old('heure_livraison') }}" required autocomplete="heure_livraison" autofocus>

                                @error('heure_livraison')
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
