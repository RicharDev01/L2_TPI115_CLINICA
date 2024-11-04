># CREAR UN VIRTUAL HOST

El proyecto se ha configurado para utilizar un VirtualHost, lo que realiza un proyecto mucho mas portable, dado que no hay que estar cambiano mucho el nombre de las carpetas, dado que una computadora es un mundo, y cada usuario puede terner una estructura de carpetas diferentes.

Dato ese caso, es necesario crear un Virtual host

1. Ve a hacia la carpeta `Xampp>apache>conf>extra` y habre con el bloc de notas `httpd-vhosts.conf` 
2. Agrega el siguinete codigo dentro del `httpd-vhosts.conf`
3.
```php
<VirtualHost *:80>
  ServerAdmin admin@laboratoriotpi.test
  DocumentRoot "P:/XAMPP/htdocs/Universidad/PP17043_L2"
  ServerName laboratoriotpi.test
  ErrorLog "logs/laboratoriotpi.test-error.log"
  CustomLog "logs/laboratoriotpi.test-access.log" common
</VirtualHost>
```

> 💡 NOTA: Considerar, que el `DocumentRoot` debe cambiarlo por la rura donde alojado el proyecto para el correcto funcionamiento.

4. Agregar en Windows la redireccion del host local, para ello debe seguir estos pasos
   1. Ejecute una CMD como administrador, y ejecute `$ cd drivers/etc` 
   2. Estando dentro de la carpeta etc/ ejecute `$ notepad hosts`
   3. Esto le abrira un bloc de notas con el archivo hosts
   4. Agregue en las lineas de abajo lo siguiunete `127.0.0.1       laboratoriotpi.test`

 
> 💡 NOTA: Si se tiene apache iniciado, apaguelo y vuelva a iniciarlo, para reiniciar, despues de haber realizado los pasos anteriores

Listo, con eso deberia de quedar listo el visrtual