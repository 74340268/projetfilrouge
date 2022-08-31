<link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Ordre</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Telephone</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  @foreach($clients as $clients)
    <tr>
      <th scope="row">1</th>
      <td>{{$clients->nom}}</td>
      <td>{{$clients->prenom}}</td>
      <td>{{$clients->telephone}}</td>
      <td>{{$clients->email}}</td>
    </tr>
    @endforeach
  </tbody>
</table>