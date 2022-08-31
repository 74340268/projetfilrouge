<link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}"><table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prix</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($produits as $produits)
    <tr>
      <th scope="row">1</th>
      <td>{{$produits->nom}}</td>
      <td>{{$produits->prix}}</td>
      <td>{{$produits->image}}</td>
      <td><a href="{{ route('produits.edit' ,$produits->id)}}" class="btn btn-primary">Modifier</a></td>
      
    </tr>
    @endforeach
  </tbody>
</table>