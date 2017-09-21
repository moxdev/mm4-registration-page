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

var read_more_expand = function(event) {
  event.preventDefault();

  var toShow = jQuery(this).next();

  if( jQuery(toShow).hasClass('active') ) {
      jQuery(toShow).removeClass('active');
      jQuery(this).html('Read More &raquo;');
  } else {
      jQuery(toShow).addClass('active');
      jQuery(this).html('Read Less &raquo;');
  }
};

jQuery('.read-more-btn').on('click', read_more_expand);


// const button = document.querySelectorAll("button");
// const active  = document.querySelector(".read-more-dropdown");

// console.log(button);
// console.log(active);

// for (var i = 0, x = button.length; i < x; i++) {
//   button[i].addEventListener('click', function() {

//     if (active.classList.contains('active')){
//       console.log('you win');
//     } else {
//       console.log('you lose');
//     }

//   })
// }
