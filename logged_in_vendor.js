let slotbutton = window.document.getElementById("slot_button");
let slotbuttonimg = window.document.getElementById("arrow_img");
let addbutton = window.document.getElementById("add");
let updatebutton = window.document.getElementById("update");
let buttons = window.document.getElementById("btn");
let buttons2 = window.document.getElementById("addbtnback");
let buttons3 = window.document.getElementById("updatebtnback");



backbtn.addEventListener("click",function()
{
     buttons.style.display="block";
     buttons.style.opacity=1;
     buttons2.style.display="none";
     // buttons2.style.opacity=0;
     buttons3.style.display="none";
     // buttons3.style.opacity=0;

})
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

updatebutton.addEventListener("click",function(){
     buttons3.style.display="block";
     buttons3.style.flexDirection="row";
     buttons.style.opacity=0;
     buttons.style.display="none";
})

