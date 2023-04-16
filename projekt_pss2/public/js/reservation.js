const findBtn = document.getElementById("findBtn");
const backBtn = document.getElementById("backBtn");
const selectTime = document.getElementById("selectTime");
const enterData = document.getElementById("enterData");
const collectDateInput = document.getElementById("collectDate");
const returnDateInput = document.getElementById("returnDate");
const priceInput = document.getElementById("car_price");
const totalPriceH = document.getElementById("totalPrice");
const days = document.getElementById("days");

collectDateInput.setAttribute("min", getFormattedDate(new Date()));
returnDateInput.setAttribute("min", getFormattedDate(new Date()));

findBtn.addEventListener("click", () => {
  if (!firstStepValidation()) {
    selectTime.style.display = "none";

    let collectDate = new Date(collectDateInput.value);
    let returnDate = new Date(returnDateInput.value);
    let diff = returnDate.getTime() - collectDate.getTime();
    let totalDays = Math.ceil(diff / (1000 * 3600 * 24)) ;
    let totalPrice = totalDays * parseInt(priceInput.value);
    
    priceInput.value = totalPrice;
    days.innerHTML = totalDays;
    totalPriceH.innerHTML = totalPrice;
    enterData.style.display = "block";
  }
});

backBtn.addEventListener("click", () => {
  selectTime.style.display = "block";
  enterData.style.display = "none";
});

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

function firstStepValidation() {
  const city = document.getElementById("city");
  const collectDate = document.getElementById("collectDate");
  const returnDate = document.getElementById("returnDate");
  let error = false;

  if (city.value == "" || city.value.length < 2) {
    error = true;
    city.classList.add("error");
  } else {
    city.classList.remove("error");
  }

  if (collectDate.value == "" || new Date(collectDate.value) < new Date()) {
    error = true;
    collectDate.classList.add("error");
  } else {
    collectDate.classList.remove("error");
  }

  if (
    returnDate.value == "" ||
    new Date(returnDate.value) < new Date() ||
    new Date(returnDate.value) <= new Date(collectDate.value)
  ) {
    error = true;
    returnDate.classList.add("error");
  } else {
    returnDate.classList.remove("error");
  }

  return error;
}

function secondStepValidation() {
  const name = document.getElementById("name");
  const phone = document.getElementById("phone");
  const email = document.getElementById("email");
  let error = false;

  if (name.value == "" || name.value.length < 3) {
    error = true;
    name.classList.add("error");
  } else {
    name.classList.remove("error");
  }

  if (phone.value == "" || phone.value.length !== 9) {
    error = true;
    phone.classList.add("error");
  } else {
    phone.classList.remove("error");
  }

  if (email.value == "" || email.value.length < 5) {
    error = true;
    email.classList.add("error");
  } else {
    email.classList.remove("error");
  }

  return error;
}

function validate() {
  if (secondStepValidation()) {
    return false;
  } else {
    document.getElementById("reservationForm").submit();
    return true;
  }
}
