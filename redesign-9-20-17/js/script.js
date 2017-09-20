(function() {

  const expoCheckbox    = document.querySelector("input[name=expo-all]");
  const fashionCheckbox = document.querySelector("input[name=fashion]");
  const storesCheckbox  = document.querySelector("input[name=stores]");
  const googleCheckbox  = document.querySelector("input[name=google");
  const socialCheckbox  = document.querySelector("input[name=social");

  expoCheckbox.addEventListener('change', function() {
    if(this.checked) {
      fashionCheckbox.checked = true;
      storesCheckbox.checked  = true;
      googleCheckbox.checked  = true;
      socialCheckbox.checked  = true;
    }else {
      fashionCheckbox.checked = false;
      storesCheckbox.checked  = false;
      googleCheckbox.checked  = false;
      socialCheckbox.checked  = false;
    }
  })
})();

const button = document.querySelectorAll("button");
console.log(button);

for (var i = 0, x = button.length; i < x; i++) {
  button[i].addEventListener('click', function() {
    if(this.classList.contains('active')) {
      console.log("waht what");
    }else {
      console.log("nah yo");
    }
  })
}



// button.addEventListener('onclick', function() {

//   if(this.classList.contains('active')) {
//     console.log("waht what");
//   }else {
//     console.log("nah yo");
//   }
// })