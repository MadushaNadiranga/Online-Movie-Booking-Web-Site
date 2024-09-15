// navbar
document.addEventListener("DOMContentLoaded", function() {
    const toggleBtn = document.querySelector(".toggle_btn");
    const toggleBtnIcon = document.querySelector(".toggle_btn i");
    const dropDownMenu = document.querySelector(".dropdown_menu");

    toggleBtn.onclick = function() {
        dropDownMenu.classList.toggle("open");
        const isOpen = dropDownMenu.classList.contains("open");
        toggleBtnIcon.classList = isOpen
        ? "fa-solid fa-xmark"
        : "fa-solid fa-bars";
    };
});

window.addEventListener("scroll", function () {
    const header = document.querySelector("header");
    if (window.scrollY > 0) {
      header.classList.add("scrolled");
    } else {
      header.classList.remove("scrolled");
    }
  });

// slider
document.addEventListener("DOMContentLoaded", function () {
	var myslide = document.querySelectorAll('.mainslide'),
	  dot = document.querySelectorAll('.dot');
	let counter = 1;
	slidefun(counter);
  
	let timer = setInterval(autoSlide, 8000);
  
	function autoSlide() {
	  counter += 1;
	  slidefun(counter);
	}
  
	function plusSlides(n) {
	  counter += n;
	  slidefun(counter);
	  resetTimer();
	}
  
	function currentSlide(n) {
	  counter = n;
	  slidefun(counter);
	  resetTimer();
	}
  
	function resetTimer() {
	  clearInterval(timer);
	  timer = setInterval(autoSlide, 8000);
	}
  
	function slidefun(n) {
	  let i;
	  for (i = 0; i < myslide.length; i++) {
		myslide[i].style.display = "none";
	  }
	  for (i = 0; i < dot.length; i++) {
		dot[i].className = dot[i].className.replace(' active', '');
	  }
	  if (n > myslide.length) {
		counter = 1;
	  }
	  if (n < 1) {
		counter = myslide.length;
	  }
	  myslide[counter - 1].style.display = "block";
	  dot[counter - 1].className += " active";
	}
  
	// Add event listeners for the previous and next buttons
	document.querySelector(".prev").addEventListener("click", function () {
	  plusSlides(-1);
	});
  
	document.querySelector(".next").addEventListener("click", function () {
	  plusSlides(1);
	});
  
	// Add event listeners for the dots
	for (let i = 0; i < dot.length; i++) {
	  dot[i].addEventListener("click", function () {
		currentSlide(i + 1);
	  });
	}
  });
  

// now streaming slider
document.addEventListener("DOMContentLoaded", function() {
  var movieSlider = new Swiper('.movie-slider', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      loop: true,
      slidesPerView: 'auto',
      coverflowEffect: {
          rotate: 0,
          stretch: 0,
          depth: 100,
          modifier: 2.5,
      },
      pagination: {
          el: '.swiper-pagination',
          clickable: true,
      },
      navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
      },
      autoplay: {
          delay: 5000,
          disableOnInteraction: false,
      },
  });
});



// comming soon

document.addEventListener("DOMContentLoaded", function() {
var MovieSlider = new Swiper('.comming-soon-movie-slider', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 100,
      modifier: 2.5,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    
    autoplay: {
      delay: 5000,
      disableOnInteraction: false, 
    },
});
  });




