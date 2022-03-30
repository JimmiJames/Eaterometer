// vendor button and style variables
let vendorstat = window.document.getElementById("vendor_status");
let addbutton = window.document.getElementById("add");
let updatebutton = window.document.getElementById("update");
let buttons = window.document.getElementById("btn");
let buttons2 = window.document.getElementById("addbtnback");
let buttons3 = window.document.getElementById("updatebtnback");
let backbtn = window.document.getElementsByClassName("backbutton");
let darkmode = window.document.getElementById("dark_mode");
let bookingbox1 = window.document.getElementById("booking1_id");
let bookingbox2 = window.document.getElementById("booking2_id");
let bookingbox3 = window.document.getElementById("booking3_id");
let edititembtn = window.document.getElementById("edit_item_btn");
let edittimebtn = window.document.getElementById("edit_time_btn");
let editpricebtn = window.document.getElementById("edit_price_btn");
let backgradientimg = window.document.getElementById("user_image");
let updateitemnamebox = window.document.getElementById("update_items");
let updatepricenamebox = window.document.getElementById("update_price");
let updatetimenamebox = window.document.getElementById("update_time");
let updateitemcancel = window.document.getElementById("iconedititem");
let updatepricecancel = window.document.getElementById("iconeditprice");
let updatetimecancel = window.document.getElementById("iconedittime");
let updatepricegetitembtn = window.document.getElementById("updateprice_id");
let updatepricegetitembox = window.document.getElementById("vendor_price");
let updatepricegetitemboxchange = window.document.getElementById("vendor_price_edit");


// vendor back button event
var i;
for (i = 0; i < backbtn.length; i++) {
     backbtn[i].addEventListener("click", function () {
          // vendor three button styles
          buttons.style.display = "block";
          buttons.style.opacity = 1;

          // vendor add styles
          buttons2.style.display = "none";

          // vendor update styles
          buttons3.style.display = "none";
     })
}
// vendor add button event
// addbutton.addEventListener("click", function () {
//      // vendor add styles
//      buttons2.style.display = "block";
//      buttons2.style.flexDirection = "row";

//      // vendor three button styles
//      buttons.style.opacity = 0;
//      buttons.style.display = "none";

// })

// vendor update button event
// updatebutton.addEventListener("click", function () {
//      // vendor update styles
//      buttons3.style.display = "block";
//      buttons3.style.flexDirection = "row";

//      // vendor three button styles
//      buttons.style.opacity = 0;
//      buttons.style.display = "none";
// })

darkmode.addEventListener("click", function () {
     if (vendorstat.style.backgroundColor != "black") {
          vendorstat.style.backgroundColor = "black";
          vendorstat.style.transition = "0.4s";
          vendorstat.style.color = "white";
          bookingbox1.style.border = "2px solid white";
          bookingbox2.style.border = "2px solid white";
          bookingbox3.style.border = "2px solid white";
     }
     else {
          vendorstat.style.backgroundColor = "white";
          vendorstat.style.transition = "0.4s";
          vendorstat.style.color = "black";
          bookingbox1.style.border = "2px";
          bookingbox2.style.border = "2px";
          bookingbox3.style.border = "2px";
     }
})

edititembtn.addEventListener("click", function () {
     updateitemnamebox.style.display = "block";
     // backgradientimg.style.filter="brightness(40%)";
})

edittimebtn.addEventListener("click", function () {
     updatetimenamebox.style.display = "block";
})

// editpricebtn.addEventListener("click", function () {
//      updatepricenamebox.style.display = "block";
// })

updateitemcancel.addEventListener("click",function(){
     updateitemnamebox.style.display = "none";
})

// updatepricecancel.addEventListener("click",function(){
//      updatepricenamebox.style.display = "none";
// })

updatetimecancel.addEventListener("click",function(){
     updatetimenamebox.style.display = "none";
})

updatepricegetitembtn.addEventListener("click",function()
{
     updatepricegetitembox.style.display="none";
     updatepricegetitemboxchange.style.display="inline";
     updatepricegetitembtn.value="Change price";
})

