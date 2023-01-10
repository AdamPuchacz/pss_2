function addToBasket(itemId) {
  let item = {
    id: itemId,
    name: document.getElementById("name_" + itemId).innerHTML,
    price: document.getElementById("price_" + itemId).innerHTML,
  };
  let cookie = checkCookie_basketItems();
  let basketItems;
  if (cookie) {
    basketItems = JSON.parse(cookie);
    console.log(basketItems);
    basketItems.push(item);
  } else {
    basketItems = [item];
  }
  setCookie("basketItems", basketItems);
  window.location.assign("/amelia/public/koszyk");
}
