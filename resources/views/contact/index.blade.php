@include('layout.header')
<div>
    <a href="/contacts/create" class="btn btn-primary">Add</a>
    <table class="table">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </thead>
        <tbody>
            <?php foreach ($contacts as $c) { ?>
                @include('contact.item', $c)
            <?php } ?>
        </tbody>
    </table>
</div>