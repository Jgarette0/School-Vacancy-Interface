let prevScrollpos = window.pageYOffset;
const navbar = document.getElementById("navbar");

window.onscroll = function() {
    const currentScrollPos = window.pageYOffset;

    if (prevScrollpos > currentScrollPos) {
  
        navbar.style.top = "0";
    } else {
   
        navbar.style.top = "-68px";
    }

    prevScrollpos = currentScrollPos;
};

const profileBtn = document.getElementById("profileBtn");
const theDialog = document.getElementById("theDialog");

profileBtn.addEventListener("click", () => {
    theDialog.showModal();
});

theDialog.addEventListener("click", () => {
    theDialog.close();
});