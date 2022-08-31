
    <h3>Modifier l'admin</h3>
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

      <form method="post" action="{{ route('categories.update', $categories->id ) }}" style="padding-top: 5px ;">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="nom">Nom :</label>
              <input type="text" class="form-control" name="nom" value="{{ $categories->nom }}"/>
          </div>

          <div class="form-group">
              <label for="abreviation">Abreviation:</label>
              <input type="text" class="form-control" name="abreviation" value="{{ $categories->abreviation }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>
