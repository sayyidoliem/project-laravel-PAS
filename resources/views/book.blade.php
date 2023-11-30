<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Buku Perpustakaan</title>
    @include('bootstrap.css')
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark shadow" >
            <div class="container">
              <a class="navbar-brand text-dark" href="#">Perpustakaan</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <div class="row">
                        <div class="col-9">
                            <p class="fs-5 mb-auto mr-4">selamat datang, user</p>
                        </div>
                        <div class="col">
                            <a href="{{url('out')}}" class="text-danger text-decoration-none"><i class="fa-solid fa-right-from-bracket"></i> Log Out</a>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </nav>
    </header>


    <div class="container mt-5">

        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-3" style="margin-left: 1rem" data-bs-toggle="modal" data-bs-target="#exampleModal">
<i class="fa-solid fa-plus"></i>  Tambah Data
</button>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>

        <form action="{{url ('input')}}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Judul Buku</label>
                    <input type="text" class="form-control" name="titleBook" required>
                </div>
                <div class="mb-2 w-50">
                    <label class="form-label">Penulis</label>
                    <input type="text" class="form-control" name="write" required>
                </div>
                <div class="mb-2">
                    <div class="from-group">
                        <label for="category">Category</label>
                        <select class="form-select" aria-label="Default select example" name="category">
                          <option disabled selected>Pilih category buku</option>
                          <option value="Drama">Drama</option>
                          <option value="Komedi">Komedi</option>
                          <option value="Horor">Horor</option>
                          <option value="Romance">Romance</option>
                        </select>
                    </div>

                </div>
                <div class="mb-2 w-25">
                    <label class="form-label">Tahun Publish</label>
                    <input type="number" name="year" class="form-control" required>
                </div>
                <div class="mb-2">
                    <label class="form-label">Sinopsis</label>
                    <textarea name="sinopsis" cols="30" rows="10" class="form-control" required></textarea>
                </div>
                <div class="mb-2 w-25">
                    <label class="form-label">Total halaman</label>
                    <input type="number" name="page" class="form-control" required>
                </div>
                <div class="mb-2 w-25">
                    <label class="form-label">Total buku</label>
                    <input type="number" name="book" class="form-control" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
        </form>



  </div>
</div>
</div>

@if (Session::has('success'))
<div class="alert alert-success  alert-dismissible fade show" role="alert">
  {{Session::get('success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (Session::has('deleted'))
<div class="alert alert-success  alert-dismissible fade show" role="alert">
  {{Session::get('deleted')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="container d-flex flex-column align-items-center" >
    <table class="table">
        <thead class="table-dark">
            <tr class="text-center">
                <th>No</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Kategori</th>
                <th>Tahun Publish</th>
                <th>Sinopsis</th>
                <th>Total halaman</th>
                <th>Total Buku</th>
                <th>Action</th>
            </tr>
        </thead>
        @php
            $no = 1
        @endphp



    <tbody>
        @foreach ($data as $l)
            <tr class="text-center">
                <td>{{$no++}}</td>
                <td>{{$l -> title}}</td>
                <td>{{$l -> writer}}</td>
                <td>{{$l -> category}}</td>
                <td>{{$l -> publish}}</td>
                <td>{{$l -> sinopsis}}</td>
                <td>{{$l -> page}}</td>
                <td>{{$l -> book}}</td>
                <td>
                    <a href="{{url('edit/'.$l -> id)}}" class="btn btn-primary">Edit</a>
                    <a href="{{url('delete/'.$l -> id)}}" class="btn btn-danger" onclick = "return btndelete()">Delete</a>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
</div>
</div>



@include('bootstrap.js')

<script>
    function btndelete() {
        return confirm("Apakah anda yakin ingin menghapus data")
    }
</script>

</body>
</html>
