var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
 });
 
 var swiper = new Swiper(".reviews-slider", {
    grabCursor:true,
    loop:true,
    autoHeight:true,
    spaceBetween: 20,
    breakpoints: {
       0: {
         slidesPerView: 1,
       },
       700: {
         slidesPerView: 2,
       },
       1000: {
         slidesPerView: 3,
       },
    },
 });
 

    var dialogLogin = document.getElementById("dialogLogin");
    var dialogRegsiter = document.getElementById("dialogRegsiter");

    function openDialogLogin() {
        dialogLogin.style.display = "block";
        dialogRegsiter.style.display = "none";
    }
    function openDialogRegsiter() {
        dialogRegsiter.style.display = "block";
        dialogLogin.style.display = "none";
    }

    // Close login dialog when clicking outside the dialog box
document.addEventListener("click", function (event) {
    if (event.target === dialogLogin) {
        closeModal();
    }
});

// Close registration dialog when clicking outside the dialog box
window.onclick = function (event) {
    if (event.target === dialogRegsiter) {
        dialogRegsiter.style.display = "none";
    }
}

// Close registration dialog when clicking on the close icon
const closeBtnRe = document.getElementById("closeBtnRe");
function closeModalRe() {
    dialogRegsiter.style.display = "none";
}
closeBtnRe.addEventListener("click", closeModalRe);

// Close Login dialog when clicking on the close icon
const closeBtn = document.getElementById("closeBtn");
function closeModal() {
    dialogLogin.style.display = "none";
}
closeBtn.addEventListener("click", closeModal);

$("document").ready(function() {
    // Swipe Animation
    var swipeContent = $('.swipe-content');
    var swipeContainer = $('.swipe-container');
    var swipeWidth = swipeContent.outerWidth();
    var containerWidth = swipeContainer.width();
    var position = 0;

    $('.swipe-arrow.next').click(function() {
        position -= containerWidth;
        if (position < -swipeWidth + containerWidth) {
            position = -swipeWidth + containerWidth;
        }
        swipeContent.css('transform', 'translateX(' + position + 'px)');
    });


    $('.swipe-arrow.prev').click(function() {
        position += containerWidth;
        if (position > 0) {
            position = 0;
        }
        swipeContent.css('transform', 'translateX(' + position + 'px)');
    });
});



// Load more button 
/*let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
   let boxes = [...document.querySelectorAll('.packages .box-container .box')];
   for (var i = currentItem; i < currentItem + 3; i++){
      boxes[i].style.display = 'inline-block';
   };
   currentItem += 3;
   if(currentItem >= boxes.length){
      loadMoreBtn.style.display = 'none';
   }
}*/

    // Open login dialog
    /*function openDialogLogin() {
        document.getElementById("dialogLogin").style.display = "block";
    }*/



    // reviews area script
    var swiper = new Swiper(".reviews-slider", {
        grabCursor:true,
        loop:true,
        autoHeight:true,
        spaceBetween: 20,
        breakpoints: {
           0: {
             slidesPerView: 1,
           },
           700: {
             slidesPerView: 2,
           },
           1000: {
             slidesPerView: 3,
           },
        },
     });

