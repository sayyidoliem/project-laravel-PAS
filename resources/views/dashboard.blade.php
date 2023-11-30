<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan</title>
    @include('bootstrap.css')
</head>
<body>

    <div  class="home mb-5">
        <div class="welcome text-center">
            <h1 class="text-white">Hai! Selamat datang di perpustakaan online</h1>
            <p class="text-white fw-semibold">Tempat Anda mencari buku-buku menarik dan bervariasi mulai dari drama hingga komedi tersedia di sini, silahkan click tombol dibawah ini untuk melihat daftar buku yang tersedia.</p>

            <div class="btn-started">
                <a href="#detail" class="btn btn-danger">Klik Disini</a>
                <a href="{{url('bookList')}}" class="btn btn-success">Tambahkan buku</a>
            </div>
        </div>
    </div>


            <div id="detail">
                <h2 class="text-center">Daftar buku yang tersedia</h2>

    <div class="container-fluid pt-3 d-flex flex-wrap justify-content-evenly">
        @foreach ($b as $b )
     <div class="card border-info mb-3" style="width: 30rem;">
                    <div class="card-body text-dark">
                        <h5 class="card-title  border-bottom border-dark pb-2">{{$b -> title}}</h5>
                        <div class="row justify-content-evenly">
                          <div class="col-4">
                              <div class="part-card">
                                  <h3 class="card-text" style="font-size: 14px" > Kategori</h3>
                                  <p class="card-text" style="font-size: 12px">{{$b -> category}}</p>
                              </div>
                              <div class="part-card">
                                  <h3 class="card-text" style="font-size: 14px"> Tahun terbit</h3>
                                  <p class="card-text" style="font-size: 12px">{{$b -> publish}}</p>
                              </div>
                              <div class="part-card">
                                  <h3 class="card-text" style="font-size: 14px"> Sinopsis</h3>
                                  <p class="card-text" style="font-size: 12px">{{$b -> sinopsis}}</p>
                              </div>
                          </div>
                          <div class="col-4">
                              <div class="part-card">
                                  <h3 class="card-text" style="font-size: 14px"> Penulis Buku</h3>
                                  <p class="card-text" style="font-size: 12px">{{$b -> writer}}</p>
                              </div>
                              <div class="part-card">
                                  <h3 class="card-text" style="font-size: 14px"> Jumlah Halaman</h3>
                                  <p class="card-text" style="font-size: 12px">{{$b -> page}}</p>
                              </div>
                              <div class="part-card">
                                  <h3 class="card-text" style="font-size: 14px"> Jumlah buku</h3>
                                  <p class="card-text" style="font-size: 12px">{{$b -> book}}</p>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
            </div>
        </div>
</div>
@include('bootstrap.js')
</body>
<style>
    .home{
        background: url('https://images.unsplash.com/photo-1481627834876-b7833e8f5570?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=928&q=80');
        min-height:100vh;
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }

    .welcome{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        padding: 1rem;
    }
</style>
</html>
