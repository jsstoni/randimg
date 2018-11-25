<canvas id="identicon" width="100" height="100"></canvas>
<script>

function generateImage() {
	function range(start, end) {
		var ans = [];
		for (let i = start; i <= end; i++) {
			ans.push(i);
		}
		return ans;
	}

	var piezas = range(0, 15);
	var ajustarPieza = [];

	for (var i = 0; i < 10; i++) {
		var rand = Math.floor(Math.random() * piezas.length);
		delete piezas[rand];
		ajustarPieza.push(rand);
	}

	var canvas = document.getElementById('identicon');
	function getRandomColor() {
		var letters = '0123456789ABCDEF';
		var color = '#';
		for (var i = 0; i < 6; i++) {
			color += letters[Math.floor(Math.random() * 16)];
		}
		return color;
	}

	var i = 0;
	var usadas = [];
	if (canvas.getContext) {
		var ctx = canvas.getContext('2d');
		ctx.clearRect(0, 0, canvas.width, canvas.height);
		ctx.fillStyle = getRandomColor();
		for (var c = 0; c < 4; c++) {
			for (var f = 0; f < 4; f++) {
				var x = c*25;
				var y = f*25;
				if (ajustarPieza.indexOf(i) != -1) {
					ctx.fillRect(x, y, 25, 25);
					usadas.push(i);
				}
				i++;
			}
		}
		console.log(usadas);
	}
}

generateImage();
</script>