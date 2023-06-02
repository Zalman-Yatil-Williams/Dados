function jugar() {
	fetch('../juegoDados.php')
		.then(response => response.json())
		.then(data => {
			// Obtener los datos del juego desde la respuesta del servidor
			const jugador1 = data.jugador1.nombre;
			const jugador2 = data.jugador2.nombre;
			const puntosJ1 = data.jugador1.puntoGanado;
			const puntosJ2 = data.jugador2.puntoGanado;

			// Mostrar el resultado del juego en la página
			const resultado = document.getElementById('resultado');
			if (puntosJ1 > puntosJ2) {
				resultado.innerHTML = `${jugador1} gana con ${puntosJ1} puntos`;
			} else if (puntosJ2 > puntosJ1) {
				resultado.innerHTML = `${jugador2} gana con ${puntosJ2} puntos`;
			} else {
				resultado.innerHTML = 'Empate. No hay un vencedor';
			}
		})
		.catch(error => {
			console.error(error);
		});
}
