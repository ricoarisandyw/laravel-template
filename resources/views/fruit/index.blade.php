<div>
    nanti menampilkan semua buah/model
    <?php foreach($fruits as $fruit) { ?>
        @include('fruit.item', 
            ['fruit' => $fruit]
        )
    <?php } ?>
</div>