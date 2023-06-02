<?php
include_once 'JuegoDados.php';

$juego = new JuegoDados("Pedro", "Juan");
$juego->iniciarJuego();

if ($juego->vencedor == null)
    echo "Empate. No hay un vencedor ";
else
    echo "El vencedor es: " . $juego->vencedor->nombre;
?>