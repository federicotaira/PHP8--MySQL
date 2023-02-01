Este es un [[archivo]] CSS que define algunos estilos para una página web.

-   `div`: los márgenes para el elemento "div" se establecen en "rem".
    
-   `li`: los elementos de lista no tendrán un tipo de viñeta y tendrán un margen inferior de "rem".
    
-   `ol > li`: los elementos hijos de la lista ordenada tendrán un tipo de viñeta decimal y no tendrán un margen inferior.
    
-   `a`: los enlaces tendrán un color #5e78c1 y subrayado.
    
-   `a:hover`: cuando se pase el cursor sobre un enlace, cambiará a un color #b04188 y tendrá un subrayado.
    
-   `.error`: los elementos con la clase "error" tendrán un color rojo (#FF0000).

```CSS
@charset "utf-8";

  

div{

    margin: lem;

}

  

li {

    list-style-type : none;

    margin-bottom: lem;

}

  

ol > li{

    list-style: decimal;

    margin-bottom: 0;

}

  

a{

    color: #5e78c1;

    text-decoration: underline;

}

  

a:hover{

  

    color: #b04188;

    text-decoration: underline;

}

  

.error{

    color: #FF0000;

}
```