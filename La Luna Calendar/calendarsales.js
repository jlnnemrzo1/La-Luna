const modal1 = document.querySelector(".modal2");
const overlay = document.querySelector(".overlay");
const openModalBtn = document.querySelector(".btn-btn-open");
const closeModalBtn = document.querySelector(".btn-close");

var cash = document.querySelector("#cash");
var gcash = document.querySelector("#gcash");
var paymaya = document.querySelector("#paymaya");
var bank = document.querySelector("#banktransfer");
const refNum = document.querySelector("#refnum");
const body = document.querySelector("body");

refNum.style.display = 'none';
body.style.overflow = "auto";
// close modal function
const closeModal = function () {
  modal1.classList.add("hidden");
  overlay.classList.add("hidden");
  body.style.overflow = "auto";
};

// close the modal when the close button and overlay is clicked
closeModalBtn.addEventListener("click", closeModal);
overlay.addEventListener("click", closeModal);


// close modal when the Esc key is pressed
document.addEventListener("keydown", function (e) {
  if (e.key === "Escape" && !modal1.classList.contains("hidden")) {
    closeModal();
  }
});

// open modal function
const openModal = function () {
  modal1.classList.remove("hidden");
  overlay.classList.remove("hidden");
  body.style.overflow = "hidden";
};
// open modal event
openModalBtn.addEventListener("click", openModal);

textarea = document.querySelector("#services");
textarea.addEventListener('input', autoResize, false);

function autoResize() {
    this.style.height = 'auto';
    this.style.height = this.scrollHeight + 'px';
}

function showRefNum(){
    refNum.style.display = 'block';
  }
  
  function hideRefNum(){
      refNum.style.display = 'none';
    }

gcash.addEventListener("click", showRefNum);
paymaya.addEventListener("click", showRefNum);
bank.addEventListener("click", showRefNum);
cash.addEventListener("click", hideRefNum);

function data () {
    console.log("echo");
}