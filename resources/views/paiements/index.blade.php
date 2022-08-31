<link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}"> 
 <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date</th>
      <th scope="col">Moyen</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($paiements as $paiements)
    <tr>
      <th scope="row">1</th>
      <td>{{$paiements->date_paiement}}</td>
      <td>{{$paiements->moyen_paiement}}</td>
      
    </tr>
    @endforeach
  </tbody>
</table>