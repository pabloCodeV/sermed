###############################################
# Proyect : landing Page sobre formulario SERMED Hospital sirio Libanes paraguay
# Tech : 
## Back-End -> PHP 8 - SLIM FW 3*
## Front-End -> JavaScript Vanilla - HTML5 - CSS
###############################################

#### ESTRUCTURA ####
# Proyecto API-centrico:
####################
## CARPETAS ##
### /API -> Contenedor del archivo index.php, este archivo contiene la ruta de todos los recursos a utilizar y que pone en funcionamiento al framework SLIM
### /API/ROUTES -> Cada archivo que se encuentre dentro de esta ruta se debera llamar igual a la funcion que debe cumplir
### /API/ROUTES/CONFIG -> En esta carpeta podremos encontrar la conexion a la base de datos asi como las funciones globales que podamos desarrollar, mismo los archivos relacionados al sistema de login
### /CSS -> Archivos relacionados a las hojas de estilo de la web
### /IMAGES -> Imagenes y logos usados dentro de la web
### /VENDOR -> Relacionado a COMPOSER, tiene el contenido de todos los framework
#####################
#####################
#### RECURSOS #####
# GET /formulario/[{id}/]
# Recursos que obtiene todos los datos alojados en la base de datos "planes_sermed"
# Es posible filtrar los datos por ID proporcionado por la URL
###################
# POST /formulario/[{id}/]
# Obtiene los datos enviados: 
##   $inputData['nombre'];
##   $inputData['correo'];   
##   $inputData['telefono'];
##   $inputData['localidad'];
##   $inputData['contacto'];
## estos datos obtenidos se guardaran en la base de datos
## Luego se crea el cuerpo de un correo electronico con PHPMAILER en donde se proporciona:
##    $correo_raiz => casilla desnde donde saldra el correo
##    $correo_receptor => casilla a donde se enviaran los correos salidos desde $correo_raiz
##    tambien se mostraran los datos almacenados en la base de datos junto a $inputData['mensaje'] que contendra un mensaje enviado desde la web 
## NOTA: $inputData['mensaje'] no se guarda en la base de datos, solo se muestra en el correo
###################
# DELETE /formulario/[{id}/]
# Permite borrar un elemento de la base de datos que coincida con el ID proporcionado por URL
