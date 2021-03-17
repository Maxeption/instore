// document.querySelector("#btn").addEventListener("click", function () {
//   var name = document.querySelector("#name").value;
//   var category = document.getElementById("#ctg").value;
//   var brand = document.getElementById("#brd").value;
//   var quantity = document.getElementById("#quan").value;
//   var price = document.getElementById("#price").value;

//   if (
//     name == "" ||
//     category == "" ||
//     brand == "" ||
//     quantity == "" ||
//     price == ""
//   ) {
//     Swal.fire("Error...", "Please fill the form!", "error");
//   }
// });

const screen = document.querySelector(".screen");

const screen1 = document.querySelector(".s_t-bar");

const modelShow = document.querySelector(".icone1");

const modelShow2 = document.querySelector("#update");

const container = document.querySelector(".blur");

const close = document.querySelector(".close");

const add = document.querySelector("#btn");

modelShow.onclick = function () {
  screen.style.transform = "translateY(10%)";
  container.style.filter = "blur(10px)";
};

modelShow2.onclick = function () {
  screen.style.transform = "translateY(10%)";
  container.style.filter = "blur(10px)";
};

close.onclick = function () {
  screen.style.transform = "translateY(-100%)";
  container.style.filter = "none";
};

// add.onclick = function () {
//   screen.style.transform = "translateY(-100%)";
//   container.style.filter = "none";
// };

let Pname = document.querySelector("#name");
let category = document.querySelector("#ctg");
let brand = document.querySelector("#brd");
let quantity = document.querySelector("#quan");
let price = document.querySelector("#price");

function showError(msg) {
  Swal.fire({
    position: "top-end",
    icon: "error",
    title: msg,
    showConfirmButton: false,
    timer: 1500,
  });
}

add.addEventListener("click", () => {
  if (!/^\w+$/.test(Pname.value)) {
    showError("Invalid name");
    return;
  }

  let indexCat = category.selectedIndex;

  if (indexCat == 0) {
    showError("invalid category ");
    return;
  }

  if (!/^\w+$/.test(brand.value)) {
    showError("Invalid Brand");
    return;
  }

  if (!/^\d+$/.test(quantity.value)) {
    showError("Invalid quantity ");
    return;
  }

  if (!/^\d+(.\d{2})?$/.test(price.value)) {
    showError("Invalid price");
    return;
  }

  screen.style.transform = "translateY(-100%)";
  container.style.filter = "none";

  Swal.fire({
    position: "top-end",
    icon: "success",
    title: "Added successfully",
    showConfirmButton: false,
    timer: 1000,
  });
});
