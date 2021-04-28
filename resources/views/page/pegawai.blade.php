<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container nt-3 col-md-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Developer</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="navbar-brand" aria-current="page" href="{{Route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="navbar-brand" href="{{Route('pegawai')}}">Pegawai</a>
              </li>
              <li class="nav-item">
                <a class="navbar-brand" href="#">About</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <br><br>
      <div class="container">
        <div class="row">
            @foreach ($pegawai as $peg)
            <div class="card nt-5 col-md-12" style="margin:5px">
              <div class="card-body">
                <h5 class="card-title">{{$peg->name}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$peg->nip}}</h6>
                <p class="card-text">{{$peg->departemen}}</p>
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Launch demo modal
                  </a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </div>
            </div>
            @endforeach      
        </div>
    </div>
        <!-- Button trigger modal -->

  
  <!-- Modal -->
  <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="navbar-brand" aria-current="page" href="{{Route('home')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="navbar-brand" href="{{Route('pegawai')}}">Pegawai</a>
                  </li>
                  <li class="nav-item">
                    <a class="navbar-brand" href="#">About</a>
                  </li>
                </ul>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
      -->
</body>
</html>