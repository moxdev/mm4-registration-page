!function(){const e=document.querySelector("input[name=expo-all]"),c=document.querySelector("input[name=fashion]"),n=document.querySelector("input[name=stores]"),t=document.querySelector("input[name=google"),d=document.querySelector("input[name=social"),i=document.querySelectorAll(".read-more-btn");for(var h=0;h<i.length;h++)i[h].addEventListener("click",function(e){e.preventDefault(),this.nextElementSibling.classList.toggle("active")});e.addEventListener("change",function(){this.checked?(c.checked=!0,n.checked=!0,t.checked=!0,d.checked=!0):(c.checked=!1,n.checked=!1,t.checked=!1,d.checked=!1)}),c.addEventListener("change",function(){this.checked||(e.checked=!1)}),n.addEventListener("change",function(){this.checked||(e.checked=!1)}),t.addEventListener("change",function(){this.checked||(e.checked=!1)}),d.addEventListener("change",function(){this.checked||(e.checked=!1)})}();