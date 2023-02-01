solicitudes y respuestas HTTP incluyen GET, POST, PUT y DELETE, y cada uno de ellos tiene un propósito específico en la comunicación entre cliente y servidor.
Los métodos más comunes son:

-   [[Formulario de envío(GET)|GET]]: se utiliza para obtener información de un recurso específico. Es el método más utilizado y es seguro, ya que no realiza ninguna acción en el servidor.
    
-   [[Formulario de envío (POST)|POST]]: se utiliza para enviar información al servidor y crear un recurso nuevo. Es utilizado principalmente para enviar formularios y es menos seguro que GET debido a que realiza acciones en el servidor.
    
-   PUT: se utiliza para actualizar un recurso existente en el servidor. Es idempotente, lo que significa que varias solicitudes PUT idénticas tienen el mismo efecto.
    
-   DELETE: se utiliza para eliminar un recurso existente en el servidor.
    
-   HEAD: es similar a GET, pero solo devuelve el encabezado de la respuesta, sin el cuerpo del recurso.
    
-   OPTIONS: se utiliza para obtener información sobre las opciones de comunicación permitidas para un recurso específico.
    
-   CONNECT: se utiliza para establecer un túnel seguro a través del proxy para una comunicación HTTPS.
    
-   TRACE: se utiliza para realizar un diagnóstico de red, devolviendo la información de la solicitud enviada al servidor.
