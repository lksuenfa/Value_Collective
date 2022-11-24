window.addEventListener("DOMContentLoaded", () => {

    let mobileOnly = window.matchMedia("(max-width: 992px)");

    let openBtn = document.querySelector("#openBtn");
    let menu = document.querySelector("#menuMobile");
    let closeBtn = document.querySelector("#closeBtn");


    // apply js only on mobile
    if (mobileOnly.matches) {
        openBtn.addEventListener("click", () => {
            menu.style.width = "100%";
        })

        closeBtn.addEventListener("click", () => {
            menu.style.width = "0%";
        });
    }

});