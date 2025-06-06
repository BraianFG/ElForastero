<script>
  let total = 0;

  // Delegación de eventos para agregar productos al carrito
  document.body.addEventListener('click', function (e) {
    if (e.target.classList.contains('add-to-cart')) {
      e.preventDefault();

      const newProduct = {
        id: e.target.dataset.id,
        nombre: e.target.dataset.nombre,
        precio: parseFloat(e.target.dataset.precio),
        cantidad: 1
      };

      let cart = JSON.parse(localStorage.getItem('cart')) || [];

      // Ver si ya está en el carrito
      const existingProduct = cart.find(item => item.id === newProduct.id);
      if (existingProduct) {
        existingProduct.cantidad += 1;
      } else {
        cart.push(newProduct);
      }

      localStorage.setItem('cart', JSON.stringify(cart));
      updateCartCount();
    }
  });

  // Actualizar contador del carrito
  function updateCartCount() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartCount = document.getElementById('cart-count');
    const cartBtn = document.querySelector('.cart-btn .badge');

    const totalItems = cart.reduce((sum, item) => sum + item.cantidad, 0);

    if (cartCount) cartCount.textContent = totalItems;
    if (cartBtn) cartBtn.textContent = totalItems;
  }

  // Abrir y mostrar el carrito
  function openCart() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartItems = document.getElementById('cart-items');
    const whatsappLink = document.getElementById('whatsapp-link');

    cartItems.innerHTML = '';
    total = 0;
    let message = 'Pedido de productos:\n';

    if (cart.length === 0) {
      cartItems.innerHTML = '<p>Tu carrito está vacío.</p>';
      document.getElementById('cart-total').innerHTML = `$0.00`;
      whatsappLink.href = '#';
    } else {
      cart.forEach((item, index) => {
        const subtotal = item.precio * item.cantidad;
        total += subtotal;

        const div = document.createElement('div');
        div.classList.add('cart-item', 'd-flex', 'justify-content-between', 'align-items-center', 'mb-2');
        div.innerHTML = `
          <span>${item.nombre} (x${item.cantidad}) - $${subtotal.toFixed(2)}</span>
          <button class="btn btn-danger btn-sm remove-btn" data-index="${index}">Eliminar</button>
        `;
        cartItems.appendChild(div);

        message += `${item.nombre} (x${item.cantidad}) - $${subtotal.toFixed(2)}\n`;
      });

      document.getElementById('cart-total').innerHTML = `$${total.toFixed(2)}`;
      message += `\nTotal: $${total.toFixed(2)}`;
      const encodedMessage = encodeURIComponent(message);
      whatsappLink.href = `https://wa.me/5492346338767?text=${encodedMessage}`;
    }

    // Mostrar el modal solo si no está ya visible
    const modalElement = document.getElementById('cartModal');
    const isModalVisible = modalElement.classList.contains('show');
    if (!isModalVisible) {
      const myModal = new bootstrap.Modal(modalElement);
      myModal.show();
    }

    // Eventos para botones "Eliminar"
    document.querySelectorAll('.remove-btn').forEach(btn => {
      btn.addEventListener('click', function () {
        const index = this.dataset.index;
        removeFromCart(index);
      });
    });
  }

  // Eliminar producto
  function removeFromCart(index) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    if (cart[index].cantidad > 1) {
      cart[index].cantidad -= 1;
    } else {
      cart.splice(index, 1);
    }

    localStorage.setItem('cart', JSON.stringify(cart));
    updateCartCount();
    openCart();
  }

  // Prevenir comportamiento por defecto en enlaces con href="#"
  document.querySelectorAll('a[href="#"]').forEach(link => {
    link.addEventListener('click', e => e.preventDefault());
  });

  // Cargar contador al iniciar
  window.onload = updateCartCount;
</script>

<script>
document.querySelectorAll('.compartir-enlace').forEach(boton => {
  boton.addEventListener('click', () => {
    const url = boton.getAttribute('data-url');
    const nombre = boton.getAttribute('data-nombre');

    if (navigator.share) {
      navigator.share({
        title: nombre,
        url: url
      }).catch(console.error);
    } else {
      navigator.clipboard.writeText(url).then(() => {
        boton.innerHTML = '<i class="fas fa-check me-2"></i> ¡Enlace copiado!';
        setTimeout(() => {
          boton.innerHTML = '<i class="fas fa-share-alt me-2"></i> Compartir';
        }, 2000);
      }).catch(err => alert('No se pudo copiar el enlace'));
    }
  });
});
</script><script>
document.querySelectorAll('.compartir-enlace').forEach(boton => {
  boton.addEventListener('click', () => {
    const url = boton.getAttribute('data-url');
    const nombre = boton.getAttribute('data-nombre');

    if (navigator.share) {
      navigator.share({
        title: nombre,
        url: url
      }).catch(console.error);
    } else {
      navigator.clipboard.writeText(url).then(() => {
        boton.innerHTML = '<i class="fas fa-check me-2"></i> ¡Enlace copiado!';
        setTimeout(() => {
          boton.innerHTML = '<i class="fas fa-share-alt me-2"></i> Compartir';
        }, 2000);
      }).catch(err => alert('No se pudo copiar el enlace'));
    }
  });
});
</script>
