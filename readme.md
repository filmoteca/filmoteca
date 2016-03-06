
[![GitHub version](https://badge.fury.io/gh/pollin14%2Ffilmoteca.svg)](http://badge.fury.io/gh/pollin14%2Ffilmoteca) [![Stories in Ready](https://badge.waffle.io/pollin14/filmoteca.png?label=ready&title=Ready)](https://waffle.io/pollin14/filmoteca) [![Stories in Progress](https://badge.waffle.io/pollin14/filmoteca.svg?label=In%20Progress&title=In%20Progress)](http://waffle.io/pollin14/filmoteca)


Nueva página de la Filmoteca de la UNAM.

## Instalation

* Clonar el *repository*
* Entrar al directorio donde se acaba de clonar el proyecto.
* Ejecutar `vagrant up` para "levantar" (crear) la máquina virtual.
* Entrar a la máquina virtual usando `vagrant ssh` e ir al directorio **/vagrant**
* Correr el siguiente comando (no importa que tenga multiples lineas)

```bash
composer install &&\
php artisan migrate --env=local &&\
php artisan migrate --package="cartalyst/sentry" --env=local &&\
php artisan migrate --package="mrjuliuss/syntara" --env=local &&\
php artisan migrate --package="filmoteca/static-pages" --env=local &&\
php artisan migrate --package="filmoteca/static-pages" --env=local &&\
php artisan asset:publish &&\
php artisan db:seed --env=local &&\
php artisan asset:publish frozennode/administrator --env=local  &&\
php artisan create:group --env=local &&\
php artisan create:user filmoteca filmoteca@unam.mx filmoteca Admin --env=local &&\
sass --update --force /vagrant/htdocs/assets/sass:/vagrant/htdocs/assets/css
```

El comando anterior creara un usuario para la zona administrativa con los siguintes datos:

User name: filmoteca
Email: filmoteca@unam.mx
Password: filmoteca

Para entra a la zona administrativa usar el email como user y el password
como contraseña.

* En la máquina `host` (anfitrion en inglés), aquella que no es la máquina virtual, 
agregar la siguiente entrada al archivo **hosts** del sistema operativo

```txt
192.168.33.11    filmoteca.dev
```

El archivo está en `/private/etc/hosts`, `/etc/hosts` y `c:\Windows\System32\Drivers\etc\hosts` en Mac, Ubuntu y Windows
respectivamente.
* Ahora la página es accessible desde `filmoteca.dev`
