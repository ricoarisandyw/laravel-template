1. go to reources/views/ and create folder contact and create files ```create.blade.php```

2. let's import bootstrap so our form will be pretty. 
```php
<html>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <body>
        <form method="POST" action="/contacts" class="">
            @csrf
            <h1>Contact Form</h1>
            <input class="form-control" placeholder="name" name="name">
            <input class="form-control" placeholder="email" name="email" type="email">
            <input class="form-control" placeholder="phone" name="phone">
            <button class="btn btn-primary">Submit</button>
        </form>
    </body>
</html>
```
3. don't forget to call it inside controller. since route already translate it we can directly edit controller create() function
```php 
return view('contact.create');
```

4. add fillable in our model so it can be auto mapped.
```php
class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone', 'email', 'photo'];
}
```

5. process the data inside function store() inside controller
```php
public function store(Request $request)
{
    //
    $contact = new Contact($request->all());
    $contact->save();

    return redirect('/contacts');
}

```
6. to show all contact, you can add this code to index()
```php
return Contact::all();
```