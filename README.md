#Tesla Api [WIP]
##Access and control your Tesla using PHP
###Authentication
``` php
$tesla = new Tesla();
$tesla->useAuthentication('ApiAuth', [
	'grant_type'    => 'password',
    'client_id'     => 'abc',
    'client_secret' => '123',
    'email'         => 'elon@teslamotors.com',
    'password'      => 'edisonsux'
]);
```
###Get your vehicle(s)
``` php
$tesla->GetVehiclesApi()->getVehicles();
```

###Command your car
```php
// honk the horn!
$tesla->GetCommandsApi()->honkHorn($id);
```
