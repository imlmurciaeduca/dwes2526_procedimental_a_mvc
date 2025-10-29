# Blog
Esta versión incluye conceptos básicos de Programación Orientada a Objetos.

La lógica relacionada con el modelo se ha refactorizado a su controlador correspondiente.

Además, ¡ya tenemos persistencia! Salve a los ficheros JSON. Gracias al formulario y la generación dinámica de HTML con PHP podemos tener un blog sencillito.

Actualmente cuenta con 3 recursos:

- index.php: listado de títulos de entradas
- entrada.php: muestra una entrada individual
  - Recibe parámetro "id" por GET
- crear_entrada.php: permite crear nuevas entradas

Las vistas ahora son vistas "tontas", pero ya tenemos el Front Controller que trabaja con todas las rutas posibles de la aplicación y redirige a las vistas con los datos que necesitan.

Refactorizado el código, debería verse tal que así:

```
. dwes2526_procedimental_a_mvc
├── controllers
│   └── EntradaController.php
├── data
│   ├── entrada01.json
│   └── entrada02.json
├── model
│   └── Entrada.php
├── views
│   ├── crear-entrada.php
│   ├── entrada.php
│   ├── listado-con-contenido.php
│   └── listado.php
├── index.php
└── README.md
```



# Despliegue
Si estás con un sistema operativo de verdad, abre tu terminal, copia y pega:

````
git clone https://github.com/imlmurciaeduca/dwes2526_procedimental_a_mvc.git
cd dwes2526_procedimental_a_mvc  
php -S localhost:8080
````

Tras ello, abre un navegador y visita http://localhost:8080
