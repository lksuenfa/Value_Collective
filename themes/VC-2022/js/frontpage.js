window.addEventListener("DOMContentLoaded", () => {
  let slideIndex = 1;

  let nextSlide = document.querySelector("#nextSlide");
  let previousSlide = document.querySelector("#previousSlide");

  let slides = document.getElementsByClassName("mySlides");
  // let dots = document.getElementsByClassName("dot");
  let dots = document.querySelectorAll(".dot");

  nextSlide.addEventListener("click", () => {
    console.log("+");
    slideIndex++;
    showSlides(slideIndex);
  });

  previousSlide.addEventListener("click", () => {
    console.log("-");
    slideIndex--;
    showSlides(slideIndex);
  });

  showSlides(slideIndex);

  dots.forEach((item, index) => {

    item.addEventListener("click", () => {
      console.log("click");
      // let dotIndex = dots[index];
      // console.log(dotIndex);
    })
  })

  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {

    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    // for (let j = 0; j < dots.length; j++) {
    //   dots[j].className = dots[j].className.replace(" active", "");
    // }
    slides[slideIndex - 1].style.display = "block";
    // dots[slideIndex - 1].className += " active";
  }

});

// // Get the button, and when the user clicks on it, execute myFunction
  // document.getElementById("myBtn").onclick = function () { myFunction() };

  // /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
  // function myFunction() {
  //   document.getElementById("myDropdown").classList.toggle("show");
  // }


  // // Get the button, and when the user clicks on it, execute myFunction
  // document.getElementById("myBtn2").onclick = function () { myFunction2() };

  // /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
  // function myFunction2() {
  //   document.getElementById("myDropdown2").classList.toggle("show");
  // }