<?php
require_once 'Dado.php';

class Jugador {

    public string $nombre;
    public int $puntoGanado;

    /**
     *
     * @param dado1 Primer dado a lanzar
     * @param dado2 Segundo dado a lanzar
     * @return Devuelve la suma de los puntos obtenidos en ambos dados
     */
    public function lanzaDados(Dado $dado1, Dado $dado2): int
    {
        $dado1->lanzar();
        $dado2->lanzar();

        //retornar los puntos que cayeron en los dados
        return $dado1->puntos + $dado2->puntos;
    }
}
?>
