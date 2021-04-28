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
    <div class="container nt-5 col-md-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Data Pegawai</a>
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
    <form action="{{route('/post')}}" method="post">
      @if (session('flash_message_success'))
          <div class="alert alert-success">
              {{ session('flash_message_success') }}
          </div>
          @endif


        @csrf
        <div class="mb-3">
          <label>Nama</label>
          <input type="text" name="name" class="form-control class="@error('name') is-invalid @enderror" value="{{ old('name')}}">
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
          <label>NIP</label>
          <input type="text" name="nip" class="form-control class="@error('nip') is-invalid @enderror value="{{ old('nip')}}">
        </div>
        @error('nip')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <div class="mb-3">
          <label>Department</label>
          <input type="text" name="departemen" class="form-control class="@error('departemen') is-invalid @enderror value="{{ old('departemen')}}">
        </div>
        @error('departemen')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>