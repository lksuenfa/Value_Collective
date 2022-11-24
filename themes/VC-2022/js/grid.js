window.addEventListener("DOMContentLoaded", () => {

    let product = document.querySelectorAll(".product");

    let modal = document.querySelector("#modal-grid");
    let closeModalBtn = document.querySelectorAll(".closeModal");


    // When the user clicks on project, open the modal
    product.forEach((item) => {
        item.addEventListener("click", () => {
            modal.style.display = "block";
            console.log("hi");
        });

    });


    // When the user clicks on <span> (x), close the modal
    closeModalBtn.forEach((item) => {
        item.addEventListener("click", () => {
            modal.style.display = "none";
        });

    });


    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});