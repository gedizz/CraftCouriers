const accordians = document.querySelectorAll(".accordian");

for(const accordian of accordians) {
  const topBar = accordian.querySelector(".top-bar");
  const bottomBar = accordian.querySelector(".bottom-bar");
  topBar.addEventListener('click', () => {
    topBar.querySelector(".arrow i").classList.toggle("rotate");
    bottomBar.classList.toggle("show");
    
  });
}
