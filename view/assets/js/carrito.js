const products = [
  {
    "id": 101,
    "name": "Camisa Atenea",
    "frontimagen": "../assets/img/camisas/adelanteatenea.png",
    "backimage": "../assets/img/camisas/atrasatenea.png",
    "modalimage": "../assets/img/camisas/juntasatenea.png",
    "details": ["Algodón", "Nilon", "Fibras de oro"],
    "price": 110.000
  },
  {
    "id": 102,
    "name": "Camisa Medusa",
    "frontimagen": "../assets/img/camisas/adelantemedusa.png",
    "backimage": "../assets/img/camisas/atrasmedusa.png",
    "modalimage": "../assets/img/camisas/juntasmedusa.png",
    "details": ["Porcelana fina", "Tinta de mar", "Almas de personas"],
    "price": 110.000
  },
  {
    "id": 103,
    "name": "Camisa Perseo",
    "frontimagen": "../assets/img/camisas/adelanteperseo.png",
    "backimage": "../assets/img/camisas/perseoatras.png",
    "modalimage": "../assets/img/camisas/juntasperseo.png",
    "details": ["Hilo de seda", "Tinta de mar", "Almas de personas"],
    "price": 110.000
  },
  {
    "id": 104,
    "name": "Camisa Poseidon",
    "frontimagen": "../assets/img/camisas/adelanteposeidon.png",
    "backimage": "../assets/img/camisas/atrasposeidon.png",
    "modalimage": "../assets/img/camisas/juntasposeidon.png",
    "details": ["Porcelana fina", "Tinta de mar", "Almas de personas"],
    "price": 110.000
  },
  {
    "id": 201,
    "name": "Mug Atenea",
    "frontimagen": "../assets/img/tienda/vasos/vasoatenea1.png",
    "backimage": "../assets/img/tienda/vasos/vasoatenea2.png",
    "modalimage": "../assets/img/tienda/vasos/vasosatenea.png",
    "details": ["Porcelana fina", "Tinta de mar", "Almas de personas"],
    "price": 45.000
  },
  {
    "id": 202,
    "name": "Mug Poseidon",
    "frontimagen": "../assets/img/tienda/vasos/vasoposeidon1.png",
    "backimage": "../assets/img/tienda/vasos/vasoposeidon2.png",
    "modalimage": "../assets/img/tienda/vasos/vasosposeidon.png",
    "details": ["Porcelana fina", "Tinta de mar", "Almas de personas"],
    "price": 45.000
  },
  {
    "id": 203,
    "name": "Mug Perseo",
    "frontimagen": "../assets/img/tienda/vasos/vasoperseo1.png",
    "backimage": "../assets/img/tienda/vasos/vasoperseo2.png",
    "modalimage": "../assets/img/tienda/vasos/vasosperse.png",
    "details": ["Porcelana fina", "Tinta de mar", "Almas de personas"],
    "price": 45.000
  },
  {
    "id": 204,
    "name": "Mug Medusa",
    "frontimagen": "../assets/img/tienda/vasos/vasomedusa1.png",
    "backimage": "../assets/img/tienda/vasos/vasomedusa2.png",
    "modalimage": "../assets/img/tienda/vasos/vasosmedusa.png",
    "details": ["Porcelana fina", "Tinta de mar", "Almas de personas"],
    "price": 45.000
  },
  {
    "id": 205,
    "name": "Libro Atenea",
    "frontimagen": "../assets/img/tienda/libro/librofrente.png",
    "backimage": "../assets/img/tienda/libro/libroatras.png",
    "modalimage": "../assets/img/tienda/libro/librosunidos.png",
    "details": ["Porcelana fina", "Tinta de mar", "Almas de personas"],
    "price": 11000
  },
  
];

function renderDetails(details) {
  return details.map((detail) => `<li>${detail}</li>`).join('');
}

// Variables
const productsContainer = document.querySelector("#lista-productos"); // Assuming you have an element with ID "lista-productos"
const currency = '$';
const cart = [];
const shopCartContainer = document.querySelector("#shop-cart");

// Functions
function renderShop() {

  productsContainer.innerHTML = '';

  products.forEach((product) => {
    productsContainer.innerHTML += `
      <div class="col-sm-4 p-3">
        <div class="card rounded-3 shadow">
          <div class="card-body d-block">
            <div class="card-img">
              <img src="${product.frontimagen}" alt="" class="front-card-img">
              <img src="${product.backimage}" alt="" class="back-card-img">
            </div>
            <h3 class=" mx-2 mt-3 d-flex justify-content-between">
              ${product.name}
              <button class="btn btn-outline-secondary" type="button" data-bs-toggle="modal" data-bs-target="#productmodal${product.id}">Ver detalle</button>
            </h3>
          </div>
          <div class="card-footer d-flex justify-content-around align-items-center">
            <h4 class="">$ ${product.price}</h4>
            <button class="btn btn-warning" data-product-id="${product.id}">
              Agregar al carrito
            </button>
          </div>
        </div>
      </div>
      <div class="modal fade mt-3" id="productmodal${product.id}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mt-5">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">${product.name}</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="modal-product-img">
                <img src="${product.modalimage}"/>
              </div>
              <b class="d-block mx-2">Detalles del producto:</b>
                <div class="list-unstyled ms-4">
                  ${renderDetails(product.details)}
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button class="btn btn-warning" data-product-id="${product.id}">
                  Agregar al carrito
                </button>
            </div>
          </div>
        </div>
      </div>`
  });

  shopCartContainer.innerHTML = `
  <div class="modal fade mt-3" id="shopCart" tabindex="-1" aria-labelledby="shopCartLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable mt-5">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="shopCartLabel">Carrito de compras</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modal-body-shop-cart px-4 py-3" id="render-shop-cart-products">
          ${cart.length === 0 ? '<p class="text-center">No hay productos en el carrito.</p>' : ''}
          ${cart.map((item) => renderCartItem(item)).join('')}
        </div>
        <div class="modal-footer d-flex justify-content-between">
          <span class="text-muted">Total: <span class="math-inline">${currency}</span id="total-price-text"></span>
          <div>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-warning" onclick="emptyCart()">Vaciar carrito</button>
            <button type="button" class="btn btn-primary" disabled>Comprar</button> </div>
        </div>
      </div>
    </div>
  </div>`;

  // Agregar evento de clic al botón "Agregar al carrito"
  const addToCartButtons = document.querySelectorAll('[data-product-id]');
  addToCartButtons.forEach((button) => {
    button.addEventListener('click', () => {
      const productId = parseInt(button.dataset.productId);
      addToCart(productId);
    });
  });

  //
  const removeFromCartButtons = document.querySelectorAll('[data-remove-from-cart]');
  removeFromCartButtons.forEach((button) => {
    button.addEventListener('click', () => {
      const productId = parseInt(button.dataset.removeForProductId);
      removeFromCart(productId);
    });
  });

  // Agregar evento de clic al botón "Vaciar carrito" (new)
  const emptyCartButton = document.querySelector('[data-empty-cart]');
  if (emptyCartButton) {
    emptyCartButton.addEventListener('click', emptyCart);
  };

};

// Función para agregar al carrito
function addToCart(productId) {
  const productToAdd = products.find((product) => product.id === productId);
  if (productToAdd) {
    const existingCartItem = cart.find((item) => item.id === productId);
    if (existingCartItem) {
      // Si el producto ya está en el carrito, incrementamos su cantidad
      existingCartItem.quantity += 1;
    } else {
      // Si es un producto nuevo, lo agregamos al carrito con cantidad 1
      cart.push({ ...productToAdd, quantity: 1 });
    }
    console.log('Producto agregado al carrito:', productToAdd);
    console.log('Carrito:', cart);
    console.log('Total:', calculateTotal());
    updateCartView(cart);
  } else {
    console.log('Producto no encontrado.');
  }
}

function removeFromCart(productId) {
  const productIndex = cart.findIndex((item) => item.id === productId);

  if (productIndex !== -1) {
    const productToRemove = cart[productIndex];
    if (productToRemove.quantity > 1) {
      productToRemove.quantity -= 1;
      console.log('Producto actualizado en el carrito:', productToRemove);
    } else {
      cart.splice(productIndex, 1);
      console.log('Producto eliminado del carrito:', productToRemove);
    }
    console.log('Carrito:', cart);
    console.log('Total:', calculateTotal());
    updateCartView(cart);
  } else {
    console.log('Producto no encontrado en el carrito.');
  }
}

function updateCartView(cart) {
  // Generar el HTML para los ítems del carrito
  const cartItemsHTML = cart.map((item) => renderCartItem(item)).join('');

  // Actualizar el contenido del shopCartContainer (using the correct selector)
  const cartItemsContainer = document.querySelector("#render-shop-cart-products");
  cartItemsContainer.innerHTML = cartItemsHTML;

  const cartPriceText = document.querySelector("#total-price-text");
  cartPriceText.innerHTML = calculateTotal();

  cartItemsContainer.addEventListener('click', handleCartButtonClick);
}

// Render function for each item in the cart
function renderCartItem(item) {
  return `
    <div class="cart rounded-4 shadow d-flex justify-content-between align-items-center my-4 p-3">
      <h3>${item.name}</h3>
      <span class="text-muted">Precio: <span class="math-inline">${currency}</span>${item.price}</span>
      <div class="gap-3">
        <button class="btn btn-sm add-to-cart" data-product-id="${item.id}">
          <i class="bi bi-plus-circle"></i>
        </button>
        <span class="text-muted">Cantidad: <span class="math-inline">${item.quantity}</span>
        <button class="btn btn-sm remove-to-cart" data-remove-from-cart="${item.id}">
          <i class="bi bi-dash-circle"></i>
        </button>
      </div>
    </div>`
};

function handleCartButtonClick(event) {
  // Check if the clicked element is a button within the cart container
  if (!event.target.classList.contains('btn')) return;

  const clickedButton = event.target;
  const productId = parseInt(clickedButton.dataset.productId);

  if (clickedButton.classList.contains('add-to-cart')) { // Add quantity button
    addToCart(productId);
  } else if (clickedButton.classList.contains('remove-to-cart')) { // Remove quantity button
    removeFromCart(productId);
  } else if (clickedButton.textContent === 'Vaciar carrito') { // Empty cart button
    emptyCart();
  }
}

// Nueva función para vaciar el carrito
function emptyCart() {
  cart.length = 0; // Reset the cart array to empty
  console.log('Carrito vaciado.');
  console.log('Carrito:', cart);
  console.log('Total:', calculateTotal());
}

function calculateTotal() {
  const total = cart.reduce((acc, item) => acc + item.price * item.quantity, 0);
  return total;
}

renderShop();