@echo off
title Calculadora
echo "Calculadora"
set resultado= 0
set/p numero1= Introduce el primer numero: 
set/p operacion= Introduce la operacion: 
set/p numero2= Introduce el segundo numero: 
if %operacion%==+ set/a resultado=%numero1% + %numero2%
if %operacion%==- set/a resultado=%numero1% - %numero2%
if %operacion%==* set/a resultado=%numero1% * %numero2%
if %operacion%==/ set/a resultado=%numero1% / %numero2%
echo Resultado %numero1% %operacion% %numero2% = %resultado% 
echo.
pause