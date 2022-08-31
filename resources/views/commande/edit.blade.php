
    <!-- <h3>Modifier commande</h3> -->
  </div>

  <div class="card-body">

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('commande.update', $commande->id ) }}" style="padding-top: 5px ;">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="produitId">ProduitId :</label>
              <input type="text" class="form-control" name="produitId" value="{{ $commande->produitId}}"/>
          </div>
              <label for="clients">ClientId</label>
              <input type="text" class="form-control" name="clientId" value="{{ $commande->clientId }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>
