<script>
var CARRITO = {};
function actualizarCarrito() {
    
	const carrito = document.querySelector("#carrito");

	// ------------------------------------------------------------------------

	carrito.innerHTML = Object.values(CARRITO)
		.map(function (item) {
			return '<li>' +
				item.nombre +
				' <strong>$ ' +
				item.precio +
				' &times; ' +
				item.cantidad +
				' = $ ' +
				item.subtotal +
				'</strong></li>';
		})
		.join('');

	// ------------------------------------------------------------------------

	const total = Object.values(CARRITO)
		.reduce(function (_, item) {
			return _ + item.subtotal;
		}, 0);
	document.querySelector("#total").innerHTML = total;


	// ------------------------------------------------------------------------

	localStorage.setItem('carrito', JSON.stringify(CARRITO));

	// ------------------------------------------------------------------------
}

document.querySelectorAll('.mini-post')
	.forEach(function (post) {
		post.querySelector('.button.primary')
			.addEventListener('click', function (evt) {
				const id = post.dataset.id,
					nombre = post.querySelector('h3').innerText,
					precio = Number(post.querySelector('h5').dataset.precio),
					cantidad = 1
				agregarCarrito(id, nombre, cantidad, precio);
			});
			
	});


try {
	CARRITO = JSON.parse(localStorage.getItem('carrito'));
	localStorage.clear();
        
	if (!CARRITO) {
		CARRITO = {};
		throw "Err";
	}

	actualizarCarrito();
} catch (err) {
	// ...

}

$("#BorrarCarrito").click(function () {
	for (const art in CARRITO) {
		delete CARRITO[art];
		for (const total in CARRITO)
			delete
				CARRITO[total];
	}
	actualizarCarrito();

});

function agregarCarrito(id, nombre, cantidad, precio) {

	if (!(id in CARRITO)) {
		CARRITO[id] = {
			id: id,
			nombre: nombre,
			precio: precio,
			cantidad: 0,
			subtotal: 0
		}
	}
	
	CARRITO[id].cantidad += cantidad;
    CARRITO[id].subtotal = CARRITO[id].cantidad * CARRITO[id].precio;
    
	actualizarCarrito();
	   $.post( "../assets/php/productos/agregar.php", { productoID: id, cantidad: cantidad, precio: precio,nombre:nombre} );
  }
</script>
 	