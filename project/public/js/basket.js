function getBasketItems() {
  const dataFromCookie = getCookie("basketItems");
  if (dataFromCookie === "") return [];
  const basketItems = JSON.parse(dataFromCookie);
  //   console.log(basketItems);
  return basketItems;
}

function populateBasket(items) {
  let elements = "";
  items.forEach((item) => {
    let el = `<div id="${item.id}"><p>${item.name}</p><p>${item.price}zł</p></div>`;
    elements += el;
  });

  document.getElementById("basket").innerHTML = elements;
}

function deleteItem(itemId) {}

function clearBasket() {}

populateBasket(getBasketItems());
