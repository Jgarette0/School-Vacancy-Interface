let prevScrollTop = window.pageYOffset;

const navbar = document.getElementById("navbar");
const navbarBottom = document.getElementById("navbarBottom");
const mapButton = document.getElementById("map");

window.onscroll = function() {
    const currentScrollTop = window.pageYOffset;

    if (prevScrollTop > currentScrollTop) {
        navbar.style.top = "0";
        document.querySelector(".navbarBottom").style.bottom = "0";
        document.querySelector(".map").style.bottom = "0";
    } else {
        navbar.style.top = "-68px";
        document.querySelector(".navbarBottom").style.bottom = "-73px";
        document.querySelector(".map").style.bottom = "-58px";
    }

    prevScrollTop = currentScrollTop;
};


const profileBtn = document.getElementById("profileBtn");
const theDialog = document.getElementById("theDialog");

profileBtn.addEventListener("click", () => {
    theDialog.showModal();
});

theDialog.addEventListener("click", () => {
    theDialog.close();
});



