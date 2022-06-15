<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @include('bootstrap.header')
    <div class="p-4">
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
</x-app-layout>