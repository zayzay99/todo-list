<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <a href="../users/index">Lihat Tugas</a>
</head>
<body>
    <!-- Jumbotron -->
<div class="p-4 shadow-4 rounded-3" style="background-color: hsl(0, 0%, 94%);">
  <h2>Hello User</h2>
  <p>
    This is a simple hero unit, a simple jumbotron-style component for calling extra
    attention to featured content or information.
  </p>

  <hr class="my-4" />
  

  <p>
    It uses utility classes for typography and spacing to space content out within the
    larger container.
  </p>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
 <a href="{{route('logout')}}"class="btn btn-sm btn-primary"">Logout</a>
</div>
<!-- Jumbotron -->
</body>
</html>