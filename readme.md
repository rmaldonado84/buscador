# Buscador
Esta aplicación está desarrollada en Laravel y tiene una base de datos en MySQL. En donde se 
cargaron los datos desde el CSV descargado en la URL:
https://cuponassets.cuponatic-latam.com/uploads/dev/datos_descuentos_buscador_prueba.2.0.csv.gz

La aplicación se encarga de realizar una busqueda basada en los títulos y tags cargados en la 
base de datos de productos y en el momento de efectuar la búsqueda esta queda registrada en una 
tabla junto a los id de los productos encontrados. Esto es con el fin de mostrar en la vista de 
estadística los datos requeridos en las consultas solicitadas.

WebService 1: Buscador
Se debe implementar un servicio Web, con la estructura http://host/search (“search” puede
estar en otro nivel, por ejemplo ‘/app/actions/search’). Este servicio debe recibir un request
POST con el parámetro “'keyword'” el cual contiene el texto a buscar y debe devolver la
información de los productos. El formato de respuesta queda a su criterio pero debe ser un
JSON. Puede limitar el resultado a no más de 50 productos por búsqueda si lo desea.

Vista 1: Resultado buscador
Crear una página HTML+JS que presente un formulario con un campo texto el cual sirva para
hacer las búsquedas de productos utilizando el WebService 1. Esta página no debe tener PHP
(aunque puede ser un PHP que solo contenga HTML/JS) y todo el proceso de consulta y
despliegue de resultados se debe hacer usando solo Javascript. La gráfica de esta vista es
irrelevante, mas no así su estructura.

Vista 2: Estadísticas
Crear una página (PHP o HTML+JS, usted decide) que muestre los 20 productos más
buscados y por cada producto las 5 palabras más usadas que hicieron aparecer dicho producto
Por ejemplo si yo tengo 4 productos A B C D y busco la palabra "encendedor" y me sale A y B,
luego busco "fuego" y me sale B y C, entonces la página de estadísticas me debería mostrar
algo como:
B -> encendedor, fuego
A -> encendedor
C -> fuego


Repositorio Git con código: https://github.com/rmaldonado84/buscador

Dirección para revisar las funcinalidades de la implementación: http://201.188.178.93/index.html

- En la primera vista se muestra un buscador en el que se puede escribir las palabras a buscar.
- Si le da click a Estadísticas le redirecionara a la URL donde verá hasta los primeros 20 productos 
más buscados y las 5 primeras palabras más buscadas para cada producto.

Dirección 2da vista para revisar las funcinalidades de la implementación: http://201.188.178.93/estadisticas