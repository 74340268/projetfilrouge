
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

      <form method="post" action="{{ route('admin.update', $clients->id ) }}" style="padding-top: 5px ;">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="nom">Nom :</label>
              <input type="text" class="form-control" name="nom" value="{{ $clients->nom }}"/>
          </div>

          <div class="form-group">
              <label for="prenom">Prenom :</label>
              <input type="text" class="form-control" name="prenom" value="{{ $clients->prenom }}"/>
          </div>

          <div class="form-group">
              <label for="telephone">Telephone :</label>
              <input type="text" class="form-control" name="telephone" value="{{ $clients->telephone }}"/>
          </div>

          <div class="form-group">
              <label for="email">Email :</label>
              <input type="text" class="form-control" name="email" value="{{ $clients->email }}"/>
          </div>

          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>
