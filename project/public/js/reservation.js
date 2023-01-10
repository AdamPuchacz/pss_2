const findBtn = document.getElementById("findBtn");
const backBtn = document.getElementById("backBtn");
const selectTime = document.getElementById("selectTime");
const enterData = document.getElementById("enterData");
const collectDateInput = document.getElementById("collectDate");
const returnDateInput = document.getElementById("returnDate");

collectDateInput.setAttribute("min", getFormattedDate(new Date()));
returnDateInput.setAttribute("min", getFormattedDate(new Date()));

findBtn.addEventListener("click", () => {
  if (!firstStepValidation()) {
    selectTime.style.display = "none";
    enterData.style.display = "block";
  }
});

backBtn.addEventListener("click", () => {
  selectTime.style.display = "block";
  enterData.style.display = "none";
});

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
