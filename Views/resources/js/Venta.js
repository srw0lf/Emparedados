
const addToShoppingCartButtons = document.querySelectorAll('.addToCart');
addToShoppingCartButtons.forEach((addToCartButton) => {
  addToCartButton.addEventListener('click', addToCartClicked);
});

const comprarButton = document.querySelector('.comprarButton');
comprarButton.addEventListener('click', comprarButtonClicked);

const shoppingCartItemsContainer = document.querySelector(
  '.shoppingCartItemsContainer'
);

function addToCartClicked(event) {
  const button = event.target;
  const item = button.closest('.item');

  const itemTitle = item.querySelector('.item-title').textContent;
  const itemIdPr = item.querySelector('.item-idPr').textContent;
  const itemIdPe = item.querySelector('.item-idPe').textContent;
  const itemPrice = item.querySelector('.item-price').textContent;
  const itemDesc = item.querySelector('.item-desc').textContent;
  const itemCat = item.querySelector('.item-cat').textContent;
  const itemImage = item.querySelector('.item-image').src;

  addItemToShoppingCart(itemTitle, itemPrice, itemImage, itemDesc, itemCat, itemIdPr, itemIdPe);
}

function addItemToShoppingCart(itemTitle, itemPrice, itemImage, itemDesc, itemCat, itemIdPr, itemIdPe) {
  const elementsTitle = shoppingCartItemsContainer.getElementsByClassName(
    'shoppingCartItemTitle'
  );
  for (let i = 0; i < elementsTitle.length; i++) {
    if (elementsTitle[i].innerText === itemTitle) {
      let elementQuantity = elementsTitle[
        i
      ].parentElement.parentElement.parentElement.querySelector(
        '.shoppingCartItemQuantity'
      );
      elementQuantity.value++;
      $('.toast').toast('show');
      updateShoppingCartTotal();
      return;
    }
  }

  const shoppingCartRow = document.createElement('div');
  const shoppingCartContent = `
  <div class="row shoppingCartItem">
        
    <div class="shopping-cart-item">
    <label for="">Producto:</label>
      <img src=${itemImage} class="shopping-cart-image" width="200">
      <p class="shopping-cart-item-title shoppingCartItemTitle">${itemTitle}</p>
    </div>

    <div class="shopping-cart-desc">
    <label for="">Descripcion:</label>
      <p>${itemDesc}</p>
    </div>

    <div class="shopping-cart-cat">
    <label for="">Categoria:</label>
      <p>${itemCat}</p>
    </div>
  
  
    <div class="shopping-cart-price">
    <label for="">Precio:</label>
      <p class="item-price shoppingCartItemPrice">${itemPrice}$</p>
    </div>

    <input type="hidden" name="idFactura">

    <div class="shopping-cart-quantity">
    <label for="">Cantidad:</label>
      <input class="shopping-cart-quantity-input shoppingCartItemQuantity" type="number" value="1" name="cantidad">
    </div>

    <!--<label for="">IdProducto:</label>-->
    <input type="text" name="idProducto_FK" value="${itemIdPr}">

    <button class="btn btn-danger buttonDelete" type="button">X Remove</button>
  </div>`;
  shoppingCartRow.innerHTML = shoppingCartContent;
  shoppingCartItemsContainer.append(shoppingCartRow);

  shoppingCartRow
    .querySelector('.buttonDelete')
    .addEventListener('click', removeShoppingCartItem);

  shoppingCartRow
    .querySelector('.shoppingCartItemQuantity')
    .addEventListener('change', quantityChanged);

  updateShoppingCartTotal();
}

function updateShoppingCartTotal() {
  let total = 0;
  const shoppingCartTotal = document.querySelector('.shoppingCartTotal');

  const shoppingCartItems = document.querySelectorAll('.shoppingCartItem');

  shoppingCartItems.forEach((shoppingCartItem) => {
    const shoppingCartItemPriceElement = shoppingCartItem.querySelector(
      '.shoppingCartItemPrice'
    );
    const shoppingCartItemPrice = Number(
      shoppingCartItemPriceElement.textContent.replace('$', '')
    );
    const shoppingCartItemQuantityElement = shoppingCartItem.querySelector(
      '.shoppingCartItemQuantity'
    );
    const shoppingCartItemQuantity = Number(
      shoppingCartItemQuantityElement.value
    );
    total = total + shoppingCartItemPrice * shoppingCartItemQuantity;
  });
  shoppingCartTotal.innerHTML = `${total}$`;
}


function removeShoppingCartItem(event) {
  const buttonClicked = event.target;
  buttonClicked.closest('.shoppingCartItem').remove();
  updateShoppingCartTotal();
}

function quantityChanged(event) {
  const input = event.target;
  input.value <= 0 ? (input.value = 1) : null;
  updateShoppingCartTotal();
}

function comprarButtonClicked() {
  shoppingCartItemsContainer.innerHTML = '';
  updateShoppingCartTotal();
}


