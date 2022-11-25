<pre>
<?php

require_once __DIR__ . '/vendor/autoload.php';

$client = Keycloak\Admin\KeycloakClient::factory([
    'realm' => 'myrealm',
    'username' => 'realm-admin',
    'password' => 'realm-admin',
    'client_id' => 'admin-cli',
    //'baseUri' => 'http://127.0.0.1:8080',
    'baseUri' => 'https://kc.menhir.com.ar',

    // OJO Con esto!!
    // La manera de evitar que el Guzzle de un error con https
    // Es agregar el cacert.pem al php.ini
    'verify' => false
]);

$users = $client->getUsers();
echo "Usuarios:\n";
print_r($users);