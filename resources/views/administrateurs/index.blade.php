<link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Ordre</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Telephone</th>
      <th scope="col">Email</th>
      <td scope="col" colspan="3">Action</td>
    </tr>
  </thead>
  <tbody>
  @foreach($administrateur as $admin)
    <tr>
      <th scope="row">1</th>
      <td>{{$admin->nom}}</td>
      <td>{{$admin->prenom}}</td>
      <td>{{$admin->telephone}}</td>
      <td>{{$admin->email}}</td>
      <td><a href="{{ route('admin.edit' ,$admin->id)}}" class="btn btn-primary">Modifier</a></td>
      <td><a href="{{ route('admin.show', $admin->id)}}" class="btn btn-info">Details</a></td>
      
      
    </tr>
    @endforeach
  </tbody>
</table>