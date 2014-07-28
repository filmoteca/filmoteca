Git (Terminal)
==============

##Indice

* Introducción
* Preliminares
    * Nombres de ramas validos
* Cambiando el nombre del almacén remoto
* Trayendo y mirando el trabajo de los demás
* Trabajando con ramas.
* Subiendo cambios.
* Actualizando las ramas *master* y *development*
* Glosario


Introducción
------------

Esta guía resume como utilizar de manera básica y practica el control de versiones Git usando la *terminal* y como herramienta visual (gitg)[https://wiki.gnome.org/Apps/Gitg/] para mostrar el resultado de cada comando, principalmente el trabajo con ramas. Usando como ejemplo el almacén (pollin14/filmoteca)[https://github.com/pollin14/filmoteca].

Se recomienda el uso del editor de terminal (vim)[https://apps.ubuntu.com/cat/applications/vim/] para poder escribir el mensaje del *commit*.

Se asumirá que el usuario a completado exitosamente el manual **Instalando el sistema de desarrollo** y está en el directorio **filmoteca**.

Preliminares
------------

Por estándar el nombre del *almacén remoto* es *origin*, pero nosotros se lo cambiaremos por *github* para indicar explícitamente que nuestro almacén remoto se encuentra en (github.com)[http://github.com]. Para hacer esto ejecutamos los siguiente comando

```bash
git remote add github https://github.com/pollin14/filmoteca && git remote remove origin
```

#### Nombres de ramas validos

El nombre de una rama no debe llevar espacios en blanco y no deberá llevar caracteres no alfanuméricos. Nombres validos para ramas son: **79-create-a-new-jquery-plugin** o **crear-migracion-de-peliculas**. 

Es preferible utilizar el idioma ingles para nombrar las ramas y así evitar problemas con los acentos.

### Trayendo y mirando el trabajo de los demás

En este punto, la única rama que se tiene es **master** (para ver todas las ramas ejecutar `git branch -a`). Sin embargo, siempre existirá otra, **development** (*desarrollo* en español). Para saber que otras ramas existen en el almacén remoto y traer sus cambios se debe correr el siguiente comando

```bash
git fetch github
```

Este comando nos traerá todas las ramas del almacén remoto. Estás ramas estarán prefijadas con **github/** que indica que la rama se encuentra en el almacén remoto llamado *github* pero no en nuestro almacén local. Estás ramas no deben ser modificadas directamente, si no que hay que hacer una copia en nuestro almacén local. En la imagen se muestran 3 ramas remotas (github/master, github/development y github/exhibitions) y una local (master)

Para ver lo que lo que contienen estás ramas remotas debemos crear una copia local de alguna de ella. El siguiente comando crea una rama local llamada **development** que es una copia de la rama remota **github/development**

```bash
git branch development github/development
```

Una vez que se ha creado esta rama local debemos cambiarnos a ella para poder ver sus cambios. Para lograr esto usamos el comando

```bash
git checkout development

```

Todo este procedimiento se tiene que realizar para ver los cambios de los demás. Por ejemplo si un miembro del equipo creo una rama llamada **exhibitions** que muestra su progreso en el diseño de la página de programación, los demás miembros del equipo deberán  realizar lo siguiente:

1. `git fetch github` Traer todos los cambios de almacén remoto.

2. `git branch exhibitions github/exhibitions` Crea una rama local con el nombre *exhibitions* (este puede ser distinto al de la rama remota pero por estándar se debe llamar igual).

3. `git checkout exhibitions` Realizar un cambio de rama.


### Trabajando con ramas

Cada vez que se quiera realizar algún cambio en el código se deberá crear una rama basada en la rama **github/development** y trabajar sobre esta rama recién creada. Por ejemplo, si se nos ha asignado la tarea de crear la página **Quiénes somos**. Entonces lo que debemos de hacer es lo siguiente.

1. `git fetch github development` Actualizar la rama de desarrollo con los últimos cambios del equipo.

2. `git branch pagina-quienes-somos github/development` Crear la rama **pagina-quienes-somos** basada en la rama remota **github/development**. Observe la omisión de los acentos y los espacios en blanco.

3. `git checkout pagina-quienes-somos` Cambiarse a la rama recién creada.

4. Realizar los cambios solicitados.

Ahora, supongamos que para crear está página hemos decidido dividir el trabajo en 3 partes: Crear el *HTML*, luego el *CSS* y por último crear el *JS*. Entonces cada vez que completemos una de estás tareas debemos hacer un *commit* para grabar nuestros cambios en la rama. El flujo seria el siguiente:

1. `git add quienes-somos.html` Agregar el archivo **quienes-somos.html** al *stage* (zona donde viven los archivos que serán parte del commit).

2. `git commit -m "Se creó el documento HTML"` Realizar un *commit* para grabar los cambios en la rama.

3. `git add style.css` Agregar el archivo **style.css** al *stage*.

3. `git commit -am "Se creó la hoja de estilos"` Grabar los cambios en la rama.

4. `git add script.js` Agregar el archivo **script.js** al *stage*

5. `git commit` Si se omite el parámetro `m` (mensaje) se abrirá el editor por defecto de git para poder escribir mensajes de más de una linea.

La siguiente imagen muestra como quedará el historial de nuestro almacén.

Lo gráfica de la imagen indica que la rama **pagina-quienes-somos** está adelantada 3 *commits* a la rama **development** así que cualquier otro miembro del equipo que haya creado una rama basada en **desarrollo** no tendrá nuestros 3 archivos.

### Subiendo cambios

Para compartir esta rama con los demás miembros del equipo, ya sea para que el equipo vea el progreso de la página **quienes-somos** (todavía no se a terminado) o para que se mezcle con la rama **development** (la página ya se termino) se debe hacer lo siguiente.

```bash
git push github pagina-quienes-somos
```

Este comando subirá la rama al almacén remoto.

Los demás desarrolladores tendrán realizar los pasos del tema anterior (**Trayendo y mirando el trabajo de los demás**).




Glosario
--------

*Almacén*: Así se le llama al directorio controlado por *Git* ya que es ahí donde se almacena todo el código fuente de la aplicación. Existen dos tipos: el local y el remoto. El primero se encuentra en la máquina del usuario, mientras que el otro se encuentra en una computadora distinta, la cual podría estar en internet (como github.com) o en red local.

*Almacén local*: ver *Almacén*.

*Almacén remoto*: ver *Almacén*

*Origin*: Nombre estándar del almacén remoto.

*master*: Nombre que se le da a la rama base o maestra o de producción del proyecto. Todas las demás ramas deberán estar basadas en ella o en una que esté basa en ella. Otro sobrenombre de esta rama podría ser "tronco".


<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>