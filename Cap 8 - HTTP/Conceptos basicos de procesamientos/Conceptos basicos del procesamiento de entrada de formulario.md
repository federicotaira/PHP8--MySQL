Los [[formularios]] son una herramienta común en el desarrollo web para recopilar información de los usuarios. El procesamiento de entrada de formulario es el proceso mediante el cual los datos ingresados en un formulario son enviados al servidor para su procesamiento y almacenamiento.

Existen varios conceptos básicos que deben considerarse al procesar la entrada de un formulario:

1.  [[Método de envío]]: El formulario puede ser enviado mediante el método GET o POST. GET envía los datos en la URL, mientras que POST los envía en el cuerpo de la solicitud.
    
2.  [[Comprobacion de los datos de entrada|Validacion de datos]]: Es importante validar los datos antes de procesarlos para asegurar que son válidos y no contienen errores. Esto puede incluir verificar que los campos requeridos estén completos, que los campos de números contengan solo números, etc.
    
3.  [[Protección contra ataques CSRF]]: Los ataques CSRF son una forma común de explotar sitios web. Es importante implementar medidas de seguridad para proteger el formulario contra estos ataques.
    
4.  [[Manejo de errores]]: Si se encuentran errores en la entrada, es necesario informar al usuario de manera clara y útil para que puedan corregir los errores.
    
5.  [[Procesamiento de los datos]]: Una vez que los datos se han validado y se han tomado medidas para proteger contra ataques CSRF, se deben procesar y almacenar de manera adecuada en la base de datos o se deben utilizar para realizar cualquier otra acción requerida.
