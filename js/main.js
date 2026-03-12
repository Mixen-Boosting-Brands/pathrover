const header = document.querySelector("#header");
const page = header.dataset.active;
// document.querySelector('.m-'+page).classList.add('active');
document.addEventListener("DOMContentLoaded", function(event) {
    AOS.init({
        duration:800,
    });
    window.addEventListener("scroll", function() {
        const distance = window.scrollY;
        if(distance > 80){
            console.log("ya");
            header.classList.add('header-fixed');
        }else{
            console.log("nel");
            header.classList.remove('header-fixed');
        }
    });
    // const subMenu = document.querySelector('.js-open-submenu');
    // const subMenuParent = document.querySelector('.js-has-submenu');
    // subMenu.addEventListener('click', function(){
    //     if(subMenuParent.classList.contains('opened')){
    //         subMenuParent.classList.remove("opened");
    //     }else{
    //         subMenuParent.classList.add("opened");
    //     }
    //
    // });

    const openMenu = document.querySelector('.js-open-menu');
    const header = document.querySelector('.js-header');
    openMenu.addEventListener('click', function(){
        if(header.classList.contains('opened')){
            header.classList.remove("opened");
        }else{
            header.classList.add("opened");
        }

    });

    const closeMenu = document.querySelectorAll('.js-close-menu');
    closeMenu.forEach((cM, i) => {
        cM.addEventListener('click', function(){
            header.classList.remove("opened");
        });
    });



    if(page == "home"){
        // const swiper = new Swiper('.js-hero-swiper', {
        //     loop: true,
        //     autoplay:true,
        //     navigation: {
        //     nextEl: '.swiper-button-next',
        //     prevEl: '.swiper-button-prev',
        //     },
        // });
    }
});
