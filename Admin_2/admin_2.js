const content = document.querySelector(".form");

var header = document.getElementsByClassName("navi")[0];

var btns = header.getElementsByClassName("navi_btn");

for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");


    if (current.length > 0) {
      current[0].className = current[0].className.replace(" active", "");
    }

    this.className += " active";

  });
}


btns[0].addEventListener("click", function() {
    content.innerHTML = "<div class='inputfield'><label>Groomer</label><input type='text' class='input'></div>  <div class='inputfield'><label>Commission</label><input type='text' class='input'></div><div class='inputfield'><input type='submit' value='Save' class='btn'></div>";
});

btns[1].addEventListener("click", function() {
    content.innerHTML = "<div class='form'><div class='inputfield'><label>Username</label><input type='text' class='input'></div>  <div class='inputfield'><label>Password</label><input type='text' class='input'></div><div class='inputfield'><input type='submit' value='Save' class='btn'></div></div>";
});