let slotbutton = window.document.getElementById("slot_button");
let slotbuttonimg = window.document.getElementById("arrow_img");
let addbutton = window.document.getElementById("add");
let buttons = window.document.getElementById("btn");
let buttons2 = window.document.getElementById("btnback");

// slotbutton.addEventListener("click",function(){
//     if(slotbutton.style.transform=="rotate(0deg)")
//     {
//         slotbutton.style.transform="rotate(90deg)";
//     }

//     else{
//         slotbutton.style.transform="rotate(0deg)"
//     }
// })

addbutton.addEventListener("click",function(){
     buttons2.style.display="block";
     buttons2.style.flexDirection="row";
     buttons.style.opacity=0;
     buttons.style.display="none";

})