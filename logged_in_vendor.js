let slotbutton = window.document.getElementById("slot_button");
let slotbuttonimg = window.document.getElementById("arrow_img");
let addbutton = window.document.getElementById("add");
let updatebutton = window.document.getElementById("update");
let buttons = window.document.getElementById("btn");
let buttons2 = window.document.getElementById("addbtnback");
let buttons3 = window.document.getElementById("updatebtnback");
let backbtn = window.document.getElementById("backbutton");



backbtn.addEventListener("click",function()
{
     buttons.style.display="block";
     buttons.style.opacity=1;
     buttons2.style.display="none";
     // buttons2.style.opacity=0;
     buttons3.style.display="none";
     // buttons3.style.opacity=0;
     console.log("clicked");

})


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

