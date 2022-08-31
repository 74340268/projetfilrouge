<link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}">
<table class="table">
  <thead>
    <tr>
      <!-- <th scope="col">Ordre</th> -->
      <th scope="col">Clients</th>
      <th scope="col">Produits</th>
      
      
    </tr>
  </thead>
  <tbody>
  @foreach($commande as $commande)
    <tr>
      <!-- <th scope="row">1</th> -->
      <td>{{$commande->clientId}}</td>
      <td>{{$commande->produitId}}</td>
     
      
    </tr>
    @endforeach
  </tbody>
</table>