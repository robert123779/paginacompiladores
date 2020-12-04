@echo off
title Bicicleta
echo "Bicicleta"
echo.
echo STATE 0: AsientoAjustado(1), Asientos(20), Cuadros(20), FASES(0), Llantas(40)
echo ACTIONS: Colocarcuadro
echo STATE 1: -Cuadros(20), Asientos(20), Llantas(40), AsientoAjustado(1), FASES(1), ColocarCuadro
echo ACTIONS: AjustarAsiento
echo STATE 2: Asientos(20), Llantas(40), AsientoAjustado(1), AsientoAjustado(0), FASES(2), -AsientoAjustado(20)
echo ACTIONS: ColocarLlantas
echo STATE 3: -Asientos(20), Llantas(40), AsientoAjustado(1), AsientoAjustado(0), Asientos(19), FASES(3)
echo ACTIONS: ArmarCadena
echo STATE 4: -Llantas(40), AsientoAjustado(1), AsientoAjustado(0), Asientos(19), Llantas(38), FASES(4), CadenaArmada
echo ACTIONS: Verificarbicicleta
echo STATE 5: -AsientoAjustado(1), -AsientoAjustado(0), Asientos(19), Llantas(38), AsientoAjustado(5), FASES(5)
pause
exit