
window.addEventListener("DOMContentLoaded", () => {
    let colours = ["Green", "Yellow", "Pink", "Blue", "Aqua"];
    let product = document.querySelectorAll(".product");

    // change background colour to random when hovering
    product.forEach((item) => {
        item.addEventListener("mouseenter", () => {
            let randomNum = Math.floor(Math.random() * 4);
            let randomColour = colours[randomNum];
            item.style.backgroundColor = "var(--accentColour" + randomColour + ")";
        });

        item.addEventListener("mouseleave", () => {
            item.style.backgroundColor = "rgba(0,0,0,0)";
        });
    });

});