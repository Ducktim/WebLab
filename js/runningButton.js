let btn = document.querySelector(".btn");
let position;
btn.addEventListener("mouseover", () => {
    position ? (position = 0) : (position = 150);
    btn.style.transform = `translate(${position}px,0px)`;
    btn.style.transition = "all 1s easy";
});