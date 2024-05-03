# Natas-11
Resolucion del nivel 11 de natas

En el archivo **cookie_data.php** reutilizamos la funcion **xor_scrypt** del código original, en el que le pasamos la cookie **data** e indicamos que la variable **$key** será **defaultdata** y que será codificada con json. El resultado de ese código nos da la clave **qw8Jqw8Jqw8Jqw8Jqw8Jqw8Jqw8Jqw8Jqw8Jqw8Jq** 

Para el archivo **coockie_encriptada.php** debemos de poner que la opción **showpassword** debe ser igual a **yes**. Volvemos a usar la funcion **xor_scrypt** y ahora le asignmamos a la variable **$key** el valor de la clave que se obtuvo anteriormente. El resultado de ejecutar este código, es que nos devolverá el nuevo valor de la cookie encriptada que nos servirá para obtener la contraseña para acceder al siguiente nivel, la cuál sería: **ClVLIh4ASCsCBE8lAxMacFMOXTlTWxooFhRXJh4FGnBTVF4sFxFeLFMK**

Para completar el nivel debemos de poner el valor de la nueva cookie obtenida en el campo **Value**, regargar la página y así es como obtendremos la contraseña para el siguiente nivel.
