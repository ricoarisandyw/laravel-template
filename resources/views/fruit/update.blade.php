@include('head')

<div>
    <form method="POST" action="{{url('/fruit/'.$fruit->id)}}">
        @csrf
        @method('PUT')
        <input class="form-control" value="{{ $fruit->name }}" type="text" name="name" placeholder="name">
        <input value="{{ $fruit->color }}" type="text" name="color" placeholder="color">
        <input value="{{ $fruit->quantity }}" type="text" name="quantity" placeholder="quantity">
        <input value="{{ $fruit->vitamin }}" type="text" name="vitamin" placeholder="vitamin">

        <button>KIRIM</button>
    </form>
</div>