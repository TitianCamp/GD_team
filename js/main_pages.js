const button = document.querySelector("#burger");
const menu = document.querySelector(".nav-t");

button.addEventListener("click", () => {
    menu.classList.toggle("active");
})