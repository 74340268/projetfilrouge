<h1>Afficher details</h1>

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
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Admin: {{$administrateur->admin}}</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
              <li>Nom: {{$administrateur->nom}}</li>
              <li>Prenom: {{$administrateur->prenom}}</li>
              <li>Telephone: {{$administrateur->telephone}}</li>
              <li>Email: {{$administrateur->email}}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </main>

  
</div>


    
  </body>
</html>
