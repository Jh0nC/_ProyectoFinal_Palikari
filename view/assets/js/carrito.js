const products = [
  {
    "id": 101,
    "name": "Camisa",
    "imagen": "./../assets/img/tienda/Camisas/camisasjuntas_atenea.png",
    "details": ["Detalle 1", "Detalle 2", "Detalle 3"],
    "price": 12000
  },
  {
    "id": 201,
    "name": "Mug",
    "imagen": "./../assets/img/tienda/Mugs/mugfinalGorgonas_Mesa de trabajo 1-03.png",
    "details": ["Detalle 4", "Detalle 5"],
    "price": 7000
  },
];

function renderDetails(details) {
  return details.map((detail) => `<li>${detail}</li>`).join('');
}

// Variables
const productsContainer = document.querySelector("#lista-productos"); // Assuming you have an element with ID "lista-productos"
const currency = '$';
const cart = [];

// Functions
function renderProducts() {

  productsContainer.innerHTML = '';

  products.forEach((product) => {
    productsContainer.innerHTML += `
      <div class="col-sm-4 p-3">
        <div class="bg-dark card rounded-3 opacity-75">
          <div class="card-head">
            <h3 class="text-light ms-5">
              ${product.name}
            </h3>
          </div>
          <div class="card-body d-block">
            <div class="card-img">
              <img src="${product.imagen}" alt="">
            </div>
            <b class="text-light d-block mx-2">Detalles del producto:</b>
            <div class="list-unstyled text-light ms-4">
              ${renderDetails(product.details)}
            </div>
          </div>
          <div class="card-footer d-flex justify-content-around align-items-center">
            <span>${product.price}</span>
            <button class="btn btn-info" data-product-id="${product.id}">
              Agregar al carrito
            </button>
          </div>
        </div>
      </div>`
  }
  )
  // Agregar evento de clic al botón "Agregar al carrito"
  const addToCartButtons = document.querySelectorAll('[data-product-id]');
  addToCartButtons.forEach((button) => {
    button.addEventListener('click', () => {
      const productId = parseInt(button.dataset.productId);
      addToCart(productId);
    });
  });
};


// Función para agregar al carrito
function addToCart(productId) {
  const productToAdd = products.find((product) => product.id === productId);
  if (productToAdd) {
    cart.push(productToAdd);
    console.log('Producto agregado al carrito:', productToAdd);
    console.log('Carrito:', cart);
    console.log('Total:', calculateTotal());
  } else {
    console.log('Producto no encontrado.');
  }
}

function calculateTotal() {
  const total = cart.reduce((acc, product) => acc + product.price, 0);
  return total;
}


renderProducts();