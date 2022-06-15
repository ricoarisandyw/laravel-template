<div>
    <table style="border: 1px solid black;">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </thead>
        <?php foreach ($contacts as $c) { ?>
            @include('contact.item', $c)
        <?php } ?>
    </table>
</div>