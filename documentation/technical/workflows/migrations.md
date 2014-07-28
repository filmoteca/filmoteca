Migraciones
===========

## Indice

* Introducción
* Creando una migración
* Corriendo las migraciones
* Deshaciendo la ultima migración ejecutada
* Resumen del flujo de trabajo

Introducción
------------

Una *migraciones* (migrations en inglés) no es más que un archivo, por lo general, escrito en el lenguaje principal de la aplicación, en este caso *Php*, que contiene instrucciones para construir y/o modificar la base de datos.

La principal función de las *migraciones* es poder versionar el desarrollo de la base de datos de una manera ordenada y estandarizada, algo que de lo contrario sería difícil. Esto nos permite tener una base de datos exactamente igual a la que se tenia en cualquier punto de desarrollo del sistema.

La creación de migraciones es un proceso monótono, debido a que hay que copiar el esqueleto una migración y a partir de ahí agregar el código para crear o modificar la base de datos. Es similar a tener que copiar el esqueleto de un archivo **html** y a partir de ahí generar las peculiaridades de la página. Por tal motivo se utiliza la terminal para crear este esqueleto y nosotros solamente tendremos que agregar lo que realmente importa.

En las siguiente secciones se describe un ejemplo de un caso de uso completo en la elaboración de migraciones.

### Creación de migraciones

Si desea crear la tabla *exhibitions* para guardar la *programación* debemos correr el comando

```bash
php artisan migrate:make create_exhibitions_table --create=exhibitions
```

El comando anterior creará un archivo (migración) llamado **create_exhibitions_table.php** prefijada con la fecha y hora del momento de correr el comando. Este nombre se lo damos nosotros y la convención es que describa la operación que se le va a hacer a la base de datos. Por ejemplo, si lo que vamos hacer es agregar una columna llamada **type_id** a una tabla, el nombre de la migración que le debemos proporcionar al comando sería **add_type_id_column_to_exhibitions_table** (omitir el .php y poner guiones bajos para separar palabras es importante) o si vamos a borrar una columna que ya no necesitamos sería **drop_icon_column_to exhibitions_table**.

El último parámetro `--create=exhibitions` únicamente indica que vamos a crear una tabla llamada *exhibitions*. Si se quisiera modificar la tabla *exhibitions* en vez de crearla, se tendría usar `--table=exhibitions`.

El contenido del archivo creado por el último comando, y de cualquier migración de creación, sera el siguiente:

```php
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExhibitionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exhibitions', function(Blueprint $table)
		{

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('exhibitions');
	}

}

```

Éste es el esqueleto de cualquier migración y nuestra tarea es llenar lo métodos `up` y `down`. El primer método deberá realizar las modificaciones a la base de datos que se desean, en este caso, construir la tabla *exhibitions*. Mientras que el segundo, deberá regresar la base datos tal y como estaba, es decir sin la tabla *exhibitions* (esto ya esta hecho por el comando). 

Obsérvese que la migración ya contiene el nombre de la tabla que se desea crear. Así que lo único que hay que hacer es especificar las columnas que tendrá la tabla.

La migración quedaría de la siguiente forma:

```php
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExhibitionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exhibitions', function(Blueprint $table)
		{
			$table->bigIncrements('id');

			$table->timestamps();

			$table->integer('exhibition_film_id')->unsiged()->nullable(false);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('exhibitions');
	}

}

```

Ahora, si lo que se desea hacer es agregar (la eliminación es similar) una columna a la tabla *exhibitions* podemos correr el siguiente comando:

```bash
php artisan migrate:make add_type_id_column_to_exhibitions_table --table=exhibition
```

Obsérvese que en ves de usar `--create=exhibitions` se utiliza `--table=exhibitions` el cual indica que se desea modificar la tabla *exhibitions* y no se desea crearla.

El esqueleto generado por esta migración sería el siguiente:

```php

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTypeIdToExhibitionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('exhibitions', function(Blueprint $table)
		{

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('exhibitions', function(Blueprint $table)
		{

		});
	}

}
```

La migración completa quedaría como sigue:

```php
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTypeIdToExhibitionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('exhibitions', function(Blueprint $table)
		{
			$table->integer('type_id')->unsigned();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('exhibitions', function(Blueprint $table)
		{
			$table->dropColumn('type_id');
		});
	}

}
```



Para una lista completa de los métodos del objeto `Blueprint` (la variable `$table`) se puede consultar Laravel Docs [1] y Laravel Api [2].

### Corriendo las migraciones

Una vez que se han creado y completado los archivos de cada migración hay que correr sus respectivos métodos up. Para hacer esto debemos correr el siguiente comando:

```bash
php artisan migrate
```

### Dehaciendo la útlima migración

Si el resultado de la migración sobre la base de datos no es el deseado, por ejemplo, el nombre de la columan que se agregó esta mal, podemos ejecutar el comando

```bash
php artisan migrate:rollback
```

Este comando nos dejara la base de datos justo como estaba antes de correr el `php artisan migrate`, sin dehacer los cambios de anteriores ejecuciones de éste comando.

Este comando solamente es útil mientras se desarrolla una migración. Una situación donde se puede usar, es si después de correr una migración nos damos cuenta que el tipo dato esta mal, por ejemplo, necesitábamos que fuera tipo *Integer* y lo pusimos como *Char*, entonces corremos el comando `php artisan migrate:rollback`, corregimos la migración y volvemos a correr `php artisan migrate`.

### Dehaciendo todas las migraciones.

Para deshacer todas las migraciones corremos el siguiente comando

```bash
php artisan migrate:reset
```

Este comando es útil cuando, por ejemplo, tenemos que trabajar en una rama de git que debe tener una base de datos distinta a la rama en la que cual estamos.

Estos dos comandos solamente son útiles en desarrollo, en producción no tienen mucho sentido ya que destruirán los datos.

### Resumen del flujo de trabajo.

El resumen de este proceso es el siguiente:

1. Crear el esqueleto de la migración con el comando `php artisan migrate:make create_exhibitions_table --create:exhibitions`

2. Completar los métodos `up` y `down` del archivo **2014_01_01_121314_create_exhibitions_table.php** en **app/database/migrations/**.

3. Correr la migración con el comando `php artisan migrate` para realizar los cambios en la base de datos (crear la tabla *exhibitions*).

4. Después de un mes, se decide que está tabla debería tener una columna llamada *type_id* entonces, crear el esqueleto de una nueva migración con el comando `php artisan migrate:make add_type_id_column_to_exhibitions_table --table=exhibitions`.

5. Completar los métodos `up` y `down` (uno insertara la nueva columna y el otro la borrara) del archivo **2014_03_02_121314_add_type_id_column_to_exhibitions_table.php** en **app/database/migrations/**.

6. Corremos el comando `php artisan migrate` para aplicar los cambios.


Referencias
============

[1] Laravel Docs Schema [http://laravel.com/docs/schema#adding-columns](http://laravel.com/docs/schema#adding-columns)

[2] Laravel Api [http://laravel.com/api/class-Illuminate.Database.Schema.Blueprint.html)](http://laravel.com/api/class-Illuminate.Database.Schema.Blueprint.html)

[3] Laravel Docs Migrations [http://laravel.com/docs/migrations#creating-migrations](http://laravel.com/docs/migrations#creating-migrations)



<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">