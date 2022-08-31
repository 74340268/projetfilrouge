<link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Ordre</th>
      <th scope="col">Nom</th>
      <th scope="col">Abréviation</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($categories as $categories)
    <tr>
      <th scope="row">1</th>
      <td>{{$categories->nom}}</td>
      <td>{{$categories->abreviation}}</td>
      <td><a href="{{ route('categories.edit' ,$categories->id)}}" class="btn btn-primary">Modifier</a></td>
      
    </tr>
    @endforeach
  </tbody>
</table>