<!-- Modal para mostrar el carrito -->
<div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content rounded-3 shadow-sm border-0">
      <div class="modal-header bg-dark text-white border-0">
        <h5 class="modal-title" id="cartModalLabel">
          <i class="fas fa-shopping-cart me-2"></i>Tu Carrito
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body bg-light" id="cart-items">
        <!-- Productos se insertan dinámicamente -->
      </div>
      <div class="modal-footer justify-content-between bg-white border-0">
        <div>
          <span class="fw-bold">Total:</span>
          <span id="cart-total" class="text-success fw-bold">$0.00</span>
        </div>
        <div>
          <a href="#" id="whatsapp-link" class="btn btn-success me-2">
            <i class="fab fa-whatsapp me-1"></i>Enviar pedido
          </a>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</div>