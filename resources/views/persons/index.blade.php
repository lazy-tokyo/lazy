<head>
  <title>Laravel Sample</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title">List of persons table</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-11 col-md-offset-1">
    <table class="table text-center">
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">名前</th>
        <th class="text-center">役職</th>>
      </tr>
      @foreach($persons as $person)
      <tr>
        <td>{{ $person->id}}</td>
        <td>{{ $person->name}}</td>
        <td>{{ $person->title}}</td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
