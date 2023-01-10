function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(";");
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function setCookie(cname, cvalue) {
  document.cookie = cname + "=" + JSON.stringify(cvalue);
}

function deleteCookie(cname) {
  document.cookie = cname + "=; Max-Age=0;";
}

function checkCookie_basketItems() {
  let basketItems = getCookie("basketItems");
  if (basketItems === "") return false;
  return basketItems;
}

function getFormattedDate(dateInput) {
  const d = new Date(dateInput);
  return (
    d.getFullYear() +
    "-" +
    ("0" + (d.getMonth() + 1)).slice(-2) +
    "-" +
    ("0" + d.getDate()).slice(-2)
  );
}
