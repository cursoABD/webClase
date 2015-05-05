#! /bin/bash

if [ $# -lt 1 ] 
then
    echo "Introduzca el fichero a copiar"
else
    echo "Copiando archivo: $1 a /var/www/html/primero/"
    sudo cp $1 /var/www/primero/
fi
