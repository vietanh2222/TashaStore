//
//     function Checkform() {
//
//     var isValid = true;
//
//     var menu = document.getElementById("exampleinputmenu1").selectedIndex;
//     var name = document.getElementById("exampleInputFullName1").value;
//     var email = document.getElementById("exampleInputEmail1").value;
//     var phone = document.getElementById("exampleInputPhone1").value;
//     var content = document.getElementById("exampleInputContent1").value;
//     var title = document.getElementById("exampleInputTitle1").value;
//
//     var menuError = document.getElementById("menuError");
//     var nameError  = document.getElementById("nameError");
//     var emailError = document.getElementById("emailError");
//     var phoneError = document.getElementById("phoneError");
//     var contentError = document.getElementById("contentError");
//     var titleError = document.getElementById("titleError")
//
//     if (name == "") {
//         nameError.innerText = "Please enter full name";
//         isValid = false;
//     }
//     else {
//         nameError.innerText = "";
//     }
//
//     if (email == "") {
//         emailError.innerText = "Please enter email";
//         isValid = false;
//     }
//     else {
//         var valid = /[^@]+@[^@]+/.test(email);
//         if (!valid) {
//             emailError.innerText = "Please enter valid email";
//             isValid = false;
//         }
//         else {
//             emailError.innerText = "";
//         }
//     }
//
//     if (phone == "") {
//         phoneError.innerText = "Please enter telephone";
//         isValid = false;
//     }
//     else {
//         var valid = /^[0]\d{9}$/.test(phone);
//         if (!valid) {
//             phoneError.innerText = "Please enter valid telephone";
//         }
//         else {
//             phoneError.innerText = "";
//         }
//     }
//
//     if (content == "") {
//         contentError.innerText = "Please enter content";
//         isValid = false;
//     }
//     else {
//         contentError.innerText = "";
//     }
//
//     if (title == "") {
//         titleError.innerText = "Please enter write title";
//         isValid = false;
//     }
//     else {
//         titleError.innerText = "";
//     }
//
//     if (menu == 0) {
//         menuError.innerText = "Please enter choose a menu";
//         isValid = false;
//     }
//     else {
//         menuError.innerText = "";
//     }
//
//     if(isValid) {
//         alert('Form validation');
//     }
// }