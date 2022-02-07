  // // search-box open close js code
  // let navbar = document.querySelector(".navbar");
  // let searchBox = document.querySelector(".search-box .bx-search");
  // // let searchBoxCancel = document.querySelector(".search-box .bx-x");
  
  // searchBox.addEventListener("click", ()=>{
  //   navbar.classList.toggle("showInput");
  //   if(navbar.classList.contains("showInput")){
  //     searchBox.classList.replace("bx-search" ,"bx-x");
  //   }else {
  //     searchBox.classList.replace("bx-x" ,"bx-search");
  //   }
  // });
  
  // // sidebar open close js code
  // let navLinks = document.querySelector(".nav-links");
  // let menuOpenBtn = document.querySelector(".navbar .bx-menu");
  // let menuCloseBtn = document.querySelector(".nav-links .bx-x");
  // menuOpenBtn.onclick = function() {
  // navLinks.style.left = "0";
  // }
  // menuCloseBtn.onclick = function() {
  // navLinks.style.left = "-100%";
  // }
  
  
  // // sidebar submenu open close js code
  // let htmlcssArrow = document.querySelector(".htmlcss-arrow");
  // htmlcssArrow.onclick = function() {
  //  navLinks.classList.toggle("show1");
  // }
  // let moreArrow = document.querySelector(".more-arrow");
  // moreArrow.onclick = function() {
  //  navLinks.classList.toggle("show2");
  // }
  // let jsArrow = document.querySelector(".js-arrow");
  // jsArrow.onclick = function() {
  //  navLinks.classList.toggle("show3");
  // }
  
  $(document).ready(function(){
    var $default2 = $("#default2");
    $(window).scroll(function(){
      if ( $(this).scrollTop() > 100 && $default2.hasClass("navbar-light bg-light default2") ){
        $default2.removeClass("navbar-light bg-light default2").addClass("navbar-dark bg-dark fixed-top");
      } else if($(this).scrollTop() <= 100 && $default2.hasClass("navbar-dark bg-dark fixed-top")) {
        $default2.removeClass("navbar-dark bg-dark fixed-top").addClass("navbar-light bg-light default2");
      }
    });//scroll
  });
  
  $(document).ready(function(){
    var $default3 = $("#nav-size");  
    $(window).scroll(function(){
      if ( $(this).scrollTop() > 100 && $default3.hasClass("container-fuil") ){
        $default3.removeClass("container-fuil").addClass("container");
      } else if($(this).scrollTop() <= 100 && $default3.hasClass("container")) {
        $default3.removeClass("container").addClass("container-fuil");
      }
    });//scroll
  });
  
      jQuery(window).scroll(function(){
        if(jQuery(window).scrollTop()>100){          
            jQuery('#logo-small').css('display','block');
         }else{         
            jQuery('#logo-small').css('display','none');
         }
   });
  jQuery(window).scroll(function(){
        if(jQuery(window).scrollTop()>100){
          jQuery('#nav-size').css('display','block');
            jQuery('#nav-size-small').css('display','none');
         }else{
           jQuery('#nav-size').css('display','block');
            jQuery('#nav-size-small').css('display','none');
         }
   });     