// let foodimgshover = window.document.getElementById("food1");
// let foodnames = window.document.getElementById("foodname1");

//     foodimgshover.addEventListener("mouseover",function(){
//         foodnames.style.transition="1s";
//         foodnames.style.display="inline";
//     })

let foodclicked1 = window.document.getElementById("item1");
let foodclicked2 = window.document.getElementById("item2");
let foodclicked3 = window.document.getElementById("item3");
let foodclicked4 = window.document.getElementById("item4");
let foodclicked5 = window.document.getElementById("item5");
let foodclicked6 = window.document.getElementById("item6");
let crossbtn = window.document.getElementById("cross_btn");
let crossbtn2 = window.document.getElementById("cross_btn2");
let userimg = window.document.getElementById("user_image");
let navigation = window.document.getElementById("navbar");
let order = window.document.getElementById("orderbook");
let order2 = window.document.getElementById("orderbook2");
let order3 = window.document.getElementById("orderbook3");
let order4 = window.document.getElementById("orderbook4");
let order5 = window.document.getElementById("orderbook5");
let order6 = window.document.getElementById("orderbook6");

let backimage = window.document.getElementById("backimg");
let bodyoverflow = window.document.getElementById("body");


foodclicked1.addEventListener("click",function(){

    order.style.display="flex";
    backimage.style.filter="brightness(0.3)";
    foodclicked1.style.filter="brightness(0.3)";
    foodclicked2.style.filter="brightness(0.3)";
    foodclicked3.style.filter="brightness(0.3)";
    foodclicked4.style.filter="brightness(0.3)";
    foodclicked5.style.filter="brightness(0.3)";
    foodclicked6.style.filter="brightness(0.3)";
    userimg.style.filter="brightness(0.3)";
    navigation.style.filter="brightness(0.3)";
    bodyoverflow.style.overflow="hidden";
})


foodclicked2.addEventListener("click",function(){

    order2.style.display="flex";
    backimage.style.filter="brightness(0.3)";
    foodclicked1.style.filter="brightness(0.3)";
    foodclicked2.style.filter="brightness(0.3)";
    foodclicked3.style.filter="brightness(0.3)";
    foodclicked4.style.filter="brightness(0.3)";
    foodclicked5.style.filter="brightness(0.3)";
    foodclicked6.style.filter="brightness(0.3)";
    userimg.style.filter="brightness(0.3)";
    navigation.style.filter="brightness(0.3)";
    bodyoverflow.style.overflow="hidden";
})

crossbtn.addEventListener("click",function(){
    order.style.display="none";
    order2.style.display="none";
    backimage.style.filter="brightness(1)";
    foodclicked1.style.filter="brightness(1)";
    foodclicked2.style.filter="brightness(1)";
    foodclicked3.style.filter="brightness(1)";
    foodclicked4.style.filter="brightness(1)";
    foodclicked5.style.filter="brightness(1)";
    foodclicked6.style.filter="brightness(1)";
    userimg.style.filter="brightness(1)";
    navigation.style.filter="brightness(1)";
    bodyoverflow.style.overflow="scroll";

})

