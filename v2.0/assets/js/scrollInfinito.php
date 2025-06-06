<script>
document.addEventListener('DOMContentLoaded', function () {
  let offset = 20; // Ya cargaste 20 inicialmente en PHP
  let loading = false;
  const productList = document.getElementById('product-list');
  const loadingSpinner = document.getElementById('loading');

  function loadMoreProducts() {
    if (loading) return;

    loading = true;
    loadingSpinner.style.display = 'block';

    fetch(`assets/php/load-products.php?offset=${offset}`)
      .then(response => {
        if (!response.ok) throw new Error('Error en la respuesta del servidor');
        return response.text();
      })
      .then(html => {
        if (html.trim() !== '') {
          const temp = document.createElement('div');
          temp.innerHTML = html;

          // Agrega cada producto
          while (temp.firstChild) {
            productList.appendChild(temp.firstChild);
          }

          offset += 20;
          loading = false;
          loadingSpinner.style.display = 'none';
        } else {
          // No hay más productos
          loading = true;
          loadingSpinner.innerHTML = '<p>No hay más productos.</p>';
        }
      })
      .catch(err => {
        console.error('Error al cargar más productos:', err);
        loadingSpinner.style.display = 'none';
        loading = false;
      });
  }

  // Detectar scroll
  window.addEventListener('scroll', function () {
    if (window.innerHeight + window.scrollY >= document.body.offsetHeight - 100) {
      loadMoreProducts();
    }
  });
});

</script>