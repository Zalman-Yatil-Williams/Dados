<?php
require_once 'Jugador.php';
require_once 'Dado.php';

class Jugada {
    /**
     * Este método hace la función del constructor
     */
    public function iniciarJugada(Jugador $jugador1, Jugador $jugador2, Dado $dado1, Dado $dado2): void {
        $puntosJ1 = 0;
        $puntosJ2 = 0;
        // Recibir los objetos necesarios para la jugada
        //Lanzar los dados por turno
        $puntosJ1 = $this->turnarJugador($jugador1, $dado1, $dado2);
        $puntosJ2 = $this->turnarJugador($jugador2, $dado1, $dado2);

        $this->determinarGanador($jugador1, $puntosJ1, $jugador2, $puntosJ2);
    }

    private function turnarJugador(Jugador $jugadorEnTurno, Dado $d1, Dado $d2): int {
       return $jugadorEnTurno->lanzaDados($d1, $d2);
    }

    public function determinarGanador(Jugador $j1, int $pJ1, Jugador $j2, int $pJ2): void {
        if ($pJ1 == 7) {
            //se le asigna un punto al jugador 1
            $j1->puntoGanado = 1;
        } else {
            $j1->puntoGanado = 0;
        }

        if ($pJ2 == 7){
            //se le asigna un punto al jugador 1
            $j2->puntoGanado = 1;
        }
        else {
            $j2->puntoGanado = 0;
        }
    }
}
?>