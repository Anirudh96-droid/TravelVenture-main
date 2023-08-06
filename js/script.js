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

// package popup

const card = document.getElementById('card');
const popup = document.getElementById('popup');
const close = document.getElementById('close');

card.addEventListener('click', () => {
    popup.style.display = 'block';
});

close.addEventListener('click', () => {
    popup.style.display = 'none';
});

window.addEventListener('click', (event) => {
    if (event.target === popup) {
        popup.style.display = 'none';
    }
});


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



$(document).ready(function() {
    $(".search").click(function() {
      $(this).addClass("active");
    });
    $(document).click(function(e) {
      if (!$(e.target).closest(".search").length) { 
        $(".search.active").removeClass('active');
      }
    });
  });


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

