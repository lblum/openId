Instalacion:

Instalar con el composer

composer install

Ejecucion

php -S localhost:8000

Esto es importante porque es la url habilitada como correcta en el keycloak

Usuarios y urls:

En https://kc.menhir.com.ar

Realm:
    myrealm
Client(app): 
    myclient
Usuarios/password:
    - myuser/myuser
    - realm-admin/realm-admin (es admin)
  