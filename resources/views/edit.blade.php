<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Buku | Perputakaan online</title>
    @include('bootstrap.css')
</head>
<body>
    <div class="container">

        <form action="{{url ('update/'.$b -> id)}}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                <label class="form-label">Judul Buku</label>
                <input type="text" class="form-control" name="titleBook" value="{{$b -> title}}" required>
            </div>
            <div class="mb-2 w-50">
                <label class="form-label">Penulis</label>
                <input type="text" class="form-control" name="write" value="{{$b -> writer}}" required>
            </div>
            <div class="mb-2">
                <div class="from-group">
                    <label for="category">Category</label>
                    <select class="form-select" aria-label="Default select example" name="category">{{$b -> category}}
                        <option disabled selected>Pilih category buku</option>
                        <option value="Drama" {{$b -> category == "Drama"? 'selected': ''}}>Drama</option>
                        <option value="Komedi"{{$b -> category == "Komedi"? 'selected': ''}}>Komedi</option>
                        <option value="Horor"{{$b -> category == "Horor"? 'selected': ''}}>Horor</option>
                        <option value="Romance"{{$b -> category == "Romance"? 'selected': ''}}>Romance</option>
                    </select>
                </div>

            </div>
            <div class="mb-2 w-25">
                <label class="form-label">Tahun Publish</label>
                <input type="number" name="year" class="form-control" value="{{$b -> publish}}" required>
            </div>
            <div class="mb-2">
                <label class="form-label">Sinopsis</label>
                <textarea name="sinopsis" cols="30" rows="10" class="form-control" required>{{$b -> sinopsis}}</textarea>
            </div>
            <div class="mb-2 w-25">
                <label class="form-label">Total halaman</label>
                <input type="number" name="page" class="form-control" value="{{$b -> page}}" required>
            </div>
            <div class="mb-2 w-25">
                <label class="form-label">Total buku</label>
                <input type="number" name="book" class="form-control" value="{{$b -> book}}" required>
            </div>
        </div>
        <div class="my-4">
            <a href="#" class="btn btn-danger">Back</a>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
</div>
    @include('bootstrap.js')
</body>
</html>
