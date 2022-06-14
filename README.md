1. create model with
```bash
php artisan make:model Contact -m
```

2. edit your migration in folder <code>database/migrations/...create_contacts...php</code>

3. design your model as you want.
```php
Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('photo')->nullable();
        });
```
4. run <code>php artisan migrate</code>