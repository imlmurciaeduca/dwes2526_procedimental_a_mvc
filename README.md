# Blog
Esta versión incluye conceptos básicos de Programación Orientada a Objetos.

La lógica relacionada con el modelo se ha refactorizado a su controlador correspondiente.

Además, ¡ya tenemos persistencia! Salve a los ficheros JSON. Gracias al formulario y la generación dinámica de HTML con PHP podemos tener un blog sencillito.

Actualmente cuenta con 2 Front Controller:

- index.php: FrontController de entradas
  - action=mostrarEntradas: muestra todas las entradas
  - action=mostrarEntrada: muestra una entrada individual
    - Recibe parámetro "id" por GET
  - action=crearEntrada: permite crear nuevas entradas
- user.php: FrontController de perfiles de usuario

Las vistas ahora son vistas "tontas", pero ya tenemos el Front Controller que trabaja con todas las rutas posibles de la aplicación y redirige a las vistas con los datos que necesitan.

Refactorizado el código, debería verse tal que así:

```
. dwes2526_procedimental_a_mvc
├── controllers
│   ├── EntradaController.php
│   └── PerfilUsuarioController
├── data
│   ├── entrada01.json
│   └── entrada02.json
├── model
│   ├── Entrada.php
│   └── PerfilUsuario.php
├── views
│   ├── crear_entrada.php
│   ├── entrada.php
│   ├── listado.php
│   └── perfil.php
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
