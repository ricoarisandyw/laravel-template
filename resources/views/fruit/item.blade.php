<div>
    <hr/>
    nama: {{ $fruit->name }}
    <br>
    warna: {{ $fruit->color }}
    <br>
    kuantitas: {{ $fruit->quantity }}
    <br>
    <a href="{{url('/fruit/delete/'.$fruit->id) }}">Hapus</a>
    <a href="{{url('/fruit/'.$fruit->id) }}">Detail</a>
    <a href="{{url('/fruit/'.$fruit->id.'/edit') }}">Edit</a>
    <hr />
</div>