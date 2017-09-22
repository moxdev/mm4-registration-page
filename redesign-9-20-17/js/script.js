(function() {

  const expoCheckbox    = document.querySelector("input[name=expo-all]");
  const fashionCheckbox = document.querySelector("input[name=fashion]");
  const storesCheckbox  = document.querySelector("input[name=stores]");
  const googleCheckbox  = document.querySelector("input[name=google");
  const socialCheckbox  = document.querySelector("input[name=social");
  const readMoreButton  = document.querySelectorAll('.read-more-btn');

  for (var i = 0; i < readMoreButton.length; i++) {
    readMoreButton[i].addEventListener('click', function(e) {
      e.preventDefault();
      this.nextElementSibling.classList.toggle('active');
    })
  }

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

  fashionCheckbox.addEventListener('change', function() {
    if(!this.checked) {
      expoCheckbox.checked = false;
    }
  })

  storesCheckbox.addEventListener('change', function() {
    if(!this.checked) {
      expoCheckbox.checked = false;
    }
  })

  googleCheckbox.addEventListener('change', function() {
    if(!this.checked) {
      expoCheckbox.checked = false;
    }
  })

  socialCheckbox.addEventListener('change', function() {
    if(!this.checked) {
      expoCheckbox.checked = false;
    }
  })
})();