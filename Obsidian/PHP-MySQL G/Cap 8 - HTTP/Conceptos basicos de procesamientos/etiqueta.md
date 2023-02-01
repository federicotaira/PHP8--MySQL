Las etiquetas son elementos en [[HTML]] que definen la estructura y contenido de una página web. 

#  `<html>`
Define el inicio y el fin de un documento HTML.
## < !DOCTYPE html>
La etiqueta `<!DOCTYPE html>` es una declaración de tipo de documento que se coloca en la primera línea de un documento HTML. La declaración de tipo de documento es importante porque indica a los navegadores web qué versión de HTML se está utilizando en el documento.
# `<head>`
Contiene información sobre el documento, como el título de la página y los metadatos.

# `<meta charset="utf-8">`
es una etiqueta de metadatos en HTML que se utiliza para especificar la codificación de caracteres utilizada en la página web.

UTF-8 es una codificación de caracteres que permite representar una amplia gama de caracteres y símbolos utilizados en diferentes idiomas y alfabetos. Al especificar la codificación UTF-8 en la etiqueta `<meta charset="utf-8">`, se garantiza que los caracteres se muestren correctamente en la página web, independientemente de la plataforma o el navegador utilizados por el usuario.

Esta etiqueta debe colocarse en la sección `<head>` de la página web y es una buena práctica incluirla en todas las páginas web.

# `<title>`
Define el título de la página, que se muestra en la pestaña del navegador.
# `<body>`
Contiene todo el contenido visible de la página.

# '< ul>'
utiliza para crear una lista desordenada
# `<ol>`
Crea una lista ordenada con elementos numerados.
# `<li>`
representa un elemento de lista, que es usado dentro de un elemento de lista ordenada "ol" o un elemento de lista no ordenada "ul". Cada elemento "li" representa un ítem individual en la lista. Por ejemplo:
```HTML
<ul>
  <li>Fruta: Manzana</li>
  <li>Fruta: Pera</li>
  <li>Fruta: Banana</li>
</ul>

```
# `<label>`
etiqueta de formulario que se utiliza para asociar una descripción con un elemento de formulario, como un campo de texto, una casilla de verificación o un botón de opción. La asociación entre el elemento de formulario y la etiqueta "label" permite a los usuarios hacer clic en la descripción para activar el elemento de formulario correspondiente.
# `<form>`
se utiliza para recopilar información del usuario en una página web. Un formulario puede tener diferentes elementos como textos, botones, casillas de verificación, desplegables, entre otros. Al enviar un formulario, los datos se pueden enviar a un servidor para su procesamiento.
La etiqueta `<form>` tiene atributos importantes como
`method` que especifica el método HTTP para enviar los datos (GET o POST).
`action` que especifica a dónde se envían los datos del formulario




# `<input>`
es utilizada para crear elementos interactivos, como campos de entrada de datos.
1. . El atributo ==type== indica el tipo de elemento("text", "number", "radio", "checkbox","submit")
2.  El atributo ==name== se utiliza para dar un nombre al campo, que se utilizará para identificar los datos enviados.
3.  El atributo ==value== se utiliza para dar un valor al campo, que se utilizará para identificar los datos enviados.




#  `<h1> - <h6>`
 Son encabezados que definen los títulos y subtítulos de la página.    
# `<p>`
Define un párrafo de texto.    
# `<a>`
Define un enlace a otra página o recurso en internet.   
# `<img>`
Muestra una imagen en la página.