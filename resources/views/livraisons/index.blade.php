<link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}"> 
 <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Date</th>
      <th scope="col">Heure</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($livraison as $livraison)
    <tr>
      <th scope="row">1</th>
      <td>{{$livraison->nom_livreur}}</td>
      <td>{{$livraison->prenom_livreur}}</td>
      <td>{{$livraison->date_livraison}}</td>
      <td>{{$livraison->heure_livraison}}</td>
      
    </tr>
    @endforeach
  </tbody>
</table>