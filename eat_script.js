let login_link = window.document.getElementById("login");
let signup_link = window.document.getElementById("signup");
let vendor_select = window.document.getElementById("vendor_radio");
let customer_select = window.document.getElementById("customer_radio");
let vender_option_selected = window.document.getElementById("vendor_select");
// let signup_student_link = window.document.getElementById("student_signup_option_id");
//let signup_vendor_link = window.document.getElementById("vendor_signup_option_id");
let navigation = window.document.getElementById("navbar");
let home_section = window.document.getElementById("home");
// let cancelbtn = window.document.getElementById("cancel_button");
let about_section = window.document.getElementById("container");
let body_section = window.document.getElementById("body_id");
// let signup_link_options = window.document.getElementById("signup_options_id");
let login_form = window.document.getElementById("login_form_id");
let login_inputs = window.document.getElementsByClassName("names");
let signup_student_form = window.document.getElementById("signup_form_student_id");
//let signup_vendor_form = window.document.getElementById("signup_form_vendor_id");

login_form.style.visibility = 0;
vender_option_selected.style.visibility="hidden";

//signup_link_options.style.opacity = 0;
signup_student_form.style.visibility = 0;
// signup_vendor_form.style.opacity = 0;


login_link.addEventListener("click", function () {

    if (login_form.style.visibility == "visible") {
        login_form.style.visibility = "hidden";
    }

    else {
        
        login_form.style.visibility = "visible";
        
        login_form.style.zIndex=2;
        home_section.style.zIndex=-1;
        navigation.style.zIndex=-1;
        body_section.style.overflow="hidden";
        home_section.style.filter="brightness(30%)";
        // about_section.style.filter="brightness(30%)";
        //about_section.style.filter="brightness(30%)";
        // signup_link_options.style.opacity = 0;
        // signup_link_options.style.zIndex=0;
        signup_student_form.style.visibility = "hidden";
        signup_student_form.style.zIndex=0;
        // signup_vendor_form.style.opacity = 0;
        // signup_vendor_form.style.zIndex=0;
    }
})

signup_link.addEventListener("click", function () {

    if (signup_student_form.style.visibility == "visible") {
        signup_student_form.style.visibility = "hidden";
    }

    else {
        
        signup_student_form.style.visibility = "visible";
        
        signup_student_form.style.zIndex=2;
        home_section.style.zIndex=-1;
        navigation.style.zIndex=-1;
        body_section.style.overflow="hidden";
        home_section.style.filter="brightness(30%)";
        // about_section.style.filter="brightness(30%)";
        //about_section.style.filter="brightness(30%)";
        // signup_link_options.style.opacity = 0;
        // signup_link_options.style.zIndex=0;
        login_form.style.visibility = "hidden";
        login_form.style.zIndex=0;
        // signup_vendor_form.style.opacity = 0;
        // signup_vendor_form.style.zIndex=0;
    }
})

vendor_select.addEventListener("click",function(){

    if(vender_option_selected.style.visibility=="visible")
    {
        vender_option_selected.style.visibility="hidden";
    }

    else
    {
        vender_option_selected.style.visibility="visible";

    }
})

customer_select.addEventListener("click",function(){

 vender_option_selected.style.visibility="hidden";

})

// cancelbtn.addEventListener("click",function(){
//     login_form.style.opacity=0;
//     login_form.style.zIndex=-2;
//     navigation.style.opacity=1;
//     navigation.style.zIndex=2;
//     home_section.style.opacity=1;
//     home_section.style.overflow="none";
// })

// signup_student_link.addEventListener("click", function () {
//     signup_student_form.style.opacity = 100;
//     signup_student_form.style.zIndex=1;
//     login_form.style.zIndex=0;
//     signup_link_options.style.opacity = 0;
//     // signup_vendor_form.style.opacity = 0;
//     // signup_vendor_form.style.zIndex=0;
// })

// signup_link.addEventListener("click", function () {
//     if (signup_link_options.style.opacity == 100) {
//         signup_link_options.style.opacity = 0;
//     }

//     else {
//         signup_link_options.style.opacity = 100;
//         signup_link_options.style.zIndex=1;
//         login_form.style.opacity = 0;
//         login_form.style.zIndex=0;
//         signup_student_form.style.opacity = 0;
//         signup_student_form.style.zIndex=0;
//         signup_vendor_form.style.opacity = 0;
//         signup_vendor_form.style.zIndex=0;
//     }
// })



// signup_vendor_link.addEventListener("click", function () {
//     signup_vendor_form.style.opacity = 100;
//     signup_vendor_form.style.zIndex=1;
//     login_form.style.zIndex=0;
//     signup_student_form.style.opacity = 0;
//     signup_student_form.style.zIndex=0;
//     signup_link_options.style.opacity = 0;

// })
