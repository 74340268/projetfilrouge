
    <h3>Modifier produit</h3>
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

      <form method="post" action="{{ route('produits.update', $produits->id ) }}" style="padding-top: 5px ;">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="nom">Nom :</label>
              <input type="text" class="form-control" name="nom" value="{{ $produits->nom }}"/>
          </div>

          <div class="form-group">
              <label for="prix">Abreviation:</label>
              <input type="text" class="form-control" name="prix" value="{{ $produits->prix }}"/>
          </div>
          <div class="form-group">
              <label for="image">Image:</label>
              <input type="file" class="form-control" name="image" value="{{ $produits->image }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>
