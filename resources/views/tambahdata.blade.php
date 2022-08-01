@extends('layout.admin')

@section('content')

<div class="content">
    <div class="content-wrapper">
        <div class="container">
            <h1 class="text-center pt-4 mb-3">Cinemaxd Movie Review - Tambah Review</h1>
            <div class="card mx-auto" style="width: 50rem">
                <div class="card-body">
                    <form action="/insertdata" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Film</label>
                            <input type="text" class="form-control" name="nama" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Genre Film</label>
                            <input type="text" class="form-control" name="genre" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tahun Rilis</label>
                            <input type="number" class="form-control" name="tahun" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Rating 1-10</label>
                            <select class="form-select" name="rating" aria-label="Default select example">
                                <option selected></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Review Singkat</label>
                            <div class="form-floating">
                                <textarea class="form-control" name="review" id="floatingTextarea2"
                                    style="height: 150px"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>































<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

@endsection
