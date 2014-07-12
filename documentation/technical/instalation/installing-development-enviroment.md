Instalando ambiente de desarrollo
=================================

* Software requerido.

* Configuración de Github.

* Instalación del proyecto.

* Conexión a la base de datos de la máquina virtual usando MySql Workbench.


Software requerido
---------------------

Para tener un ambiente de desarrollo para la página de la Filmoteca de la UNAM se necesita instalar
los siguiente programas.

* Vagrant
* Git
* Composer
* Node
* Bower
* Gestor de base de datos MySql con la característica de poderse conectar a la base de datos a través de SSH. Recomendación MySql Workbench (Community).
*. VirtualBox


Configuración de github
-----------------------

Para poder compartir el código con el resto del equipo se utilizará el servicio [Github](https://github.com) el cual es como un _dropbox_ de código. Entonces se deberá crear una cuenta en _github_ y generar las llaves publicas y privadas para poder subir y bajar cambios en el almacén (repository en inglés) de código.

Una vez que se tenga la cuenta en _github_ hay que generar las llaves. Primeramente debemos estar parados en el directorio __.ssh__. Para hacer esto ejecutamos el comando:

``` 
cd ~/.ssh 
```

Ahora podemos generar las llaves con el comando (pon tu email):

``` 
ssh-keygen -t rsa -C "your_email@example.com" 
```

Este comando te pedirá un nombre para las llaves, a este archivo le llamaremos **github_rsa**. Después te pedirá una *frase de paso* (passphrase en inglés) la cual es una *contraseña* y es opcional. Presionar *enter* para no usar una *passphrase*.

Ahora agregamos las llaves al agente de llaves con los siguientes comandos

``` 
eval `ssh-agent -s` 
```

```
 ssh-add ~/.ssh/github_rsa 
```

Por último, debemos copiar al portapapeles todo el contenido **github_rsa.pub** dentro de la carpeta **.ssh**.

Podemos hacerlo con el comando

``` 
xclip -sel clip < ~/.ssh/github_rsa.pub 
```

o abriendo y copiando manualmente el archivo.

Ahora hay que agregar el contenido copiado previamente al panel de control de Github. La siguiente secuencia de imágenes describe el proceso.

 Entrando al panel de control. ![panel de control](https://github-images.s3.amazonaws.com/help/settings/userbar-account-settings.png)

Entrando al SSH keys. ![entrada del menú SSH keys](https://github-images.s3.amazonaws.com/help/settings/settings-sidebar-ssh-keys.png)

Agregando una llave SSH. ![agregando una llave](https://github-images.s3.amazonaws.com/help/settings/ssh-add-ssh-key.png)

Pegar la llave y ponerle un título. ![pegando la llave](https://github-images.s3.amazonaws.com/help/settings/ssh-key-paste.png) 

Guardar la llave. ![guardando la llave](https://github-images.s3.amazonaws.com/help/settings/ssh-add-key.png)

Referencia: [Generando llaves de SSH](https://help.github.com/articles/generating-ssh-keys)

Instalación del proyecto
--------------------------

Estando en la carpeta donde se desea almacenar el proyecto ejecutar

```
 git clone git@github.com:pollin14/filmoteca.git 
```

Este comando creara una carpeta llamada __filmoteca__ la cual contendrá todo el código necesario para hacer andar el proyecto.

Después entramos a la carpeta __filmoteca__ y ejecutar

``` 
vagrant up 
```

Este comando creará y configurará la máquina virtual donde correrá el proyecto, incluyendo el servidor web, el de base de datos y todos los paquetes necesarios para poder desarrollar el proyecto.

Cuando el comando termine, tenemos que apagar y reiniciar la máquina virtual (esto se tiene que hacer cada vez que se apague o encienda la máquina real). Para lograr esto usamos ```vagrant halt``` y ```vagrant up``` parara apagarla y encenderla respectivamente.

Una vez que la máquina virtual esté iniciada se podrán ver los archivos de servidor poniendo la **IP 192.168.33.11** en el navegador. Así para poder ver el sitio, tenemos que entrar a la dirección **192.168.33.11/filmoteca/public**. No obstante, deseamos tener poder ver ésta última ubicación escribiendo en **filmoteca.dev** en el navegador (*dev* es la abreviación de desarrollo en inglés, es decir, la abreviación de _development_).

Para lograr esto debemos correr el primer comando si usamos *linux* y el segundo si usamos *mac*

```
sudo echo '192.168.33.11 filmoteca.dev' >> /etc/hosts
```

```
sudo echo '192.168.33.11 filmoteca.dev' >> /private/etc/hosts
```


Conexión a la base de datos de la máquina virtual usando MySql Workbench.
-------------------------------------------------------------------------

Para conectase a la máquina virtual utilizando el programa MySql Workbench hay que hacer lo siguiente

+ Crear una nueva conexión.
+ Asígnale un nombre en **Connection Name**
+ Elegir **Standar TCP/IP over SSH** en **Connection Method**
+ En la pestaña **Parameters** poner los siguiente datos:
    + SSH Hostname **filmoteca.dev**
    + SSH Username **vagrant**
    + SSH Password **vagrant**
    + SSH key file *dejar vacío*
    + MySQL Hostname **127.0.0.0**
    + MySQL Server Port **3306**
    + Username **homestead**
    + Password **homestead**
    + Default Schema **filmoteca**
    
+ Precionar el botón **Ok**

Con esto podremos tener acceso a la base de datos dentro de la máquina virtual.






<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>