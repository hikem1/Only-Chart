const bodyEl = document.querySelector('body');
const headerEl = document.querySelector('header');
const navEl = document.querySelector('nav');
const iframeEls = document.querySelectorAll('iframe');

function resizeIframe(){
    const bodyHeight = bodyEl.offsetHeight;
    const headerHeight = headerEl.offsetHeight;
    const navHeight = navEl.offsetHeight;
    
    let height = bodyHeight - headerHeight - navHeight;

    iframeEls.forEach((element)=>{
        element.style.height = height + "px"
    })
}

window.addEventListener("load", (event) => {
    resizeIframe();
});

window.addEventListener("resize", (event) => {
    resizeIframe();
});

  