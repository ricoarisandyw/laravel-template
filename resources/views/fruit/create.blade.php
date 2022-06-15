<div>
    <form method="POST" action="/fruit">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="text" name="color" placeholder="color">
        <input type="text" name="quantity" placeholder="quantity">
        <input type="text" name="vitamin" placeholder="vitamin">
        <button>KIRIM</button>
    </form>
</div>