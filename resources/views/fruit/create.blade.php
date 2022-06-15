@include('head')

<div class="bg-random">
    <form method="POST" action="/fruit">
        @csrf
        <h1>Tambah Buah</h1>
        <input class="form-control" type="text" name="name" placeholder="name">
        <input class="form-control" type="text" name="color" placeholder="color">
        <input class="form-control" type="text" name="quantity" placeholder="quantity">
        <input class="form-control" type="text" name="vitamin" placeholder="vitamin">
        <button class="btn btn-success">KIRIM</button>
    </form>
</div>