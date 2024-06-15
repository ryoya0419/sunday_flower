/*=================
slider
=================*/
$('.key_slider').slick({
    autoplay: true,
    speed: 2000,
    arrows: false,
    fade: true,
});

$('.item_slider').slick({
    autoplay: true,
    speed: 3000,
    arrows: false,
    dots: true,
    centerMode: true,
    centerPadding: "20%"
});


/*=================
scroll
=================*/
function ScrollWindow(elem) {
    let element = document.getElementById(elem);
    let rect = element.getBoundingClientRect();
    let elemtop = rect.top + window.pageYOffset;
    document.documentElement.scrollTop = elemtop;
}



// const kw_one = document.getElementById("kw_one");
// window.setTimeout((kw_one) => {
//     let text = document.getElementById('kw_one').textContent; //宣言
//     document.getElementById('kw_one').textContent = '楽しいという気持ちをお届けしたい';
// }, 5000);





