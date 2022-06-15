1. run controller generator
```
php artisan make:controller ContactController --model=Contact
```
*model make it integrated with model
2. try modify index() in controller
```
public function index(){
    return "Hello World";
}
```

3. call it inside route using resource.
```
Route::resource('contact', ContactController::class)
```
resource is translator for route.

4. Test it with accesing <code>localhost/contact</code>, it should be showing "Hello World"