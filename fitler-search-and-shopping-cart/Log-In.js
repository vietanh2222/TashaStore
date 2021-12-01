
let loginRender = document.getElementById('login_render');
let loginRenderMobile = document.getElementById('login_render-mobile');

function mainTainLogin() {
    getUserFromLocalStorage();
    console.log(listUsers);
    for(let user of listUsers){
        if(user.isLogin){
            loginRender.innerHTML= "<div class=\"dropdown d-flex align-items-center justify-content-center\" style=\"width: 100px\">\n" +
                "                <a style='color: #676767; padding: 0 6px;' class=\"nav-item t-product\" href=\"#\">Hi, "+ user.userAccount +"</a>\n" +
                "                <div class=\"dropdown-menu p-0\" style=\"border-radius: 4px;top:38px;left: 0px;\"\n" +
                "                     aria-labelledby=\"dropdownMenuButton\" onclick='LogOut();'>\n" +
                "                  <a class=\"dropdown-item dropdown-link\" >Log Out</a>\n" +
                "                </div>\n" +
                "              </div>";

            loginRenderMobile.innerHTML = "<div class=\"dropdown d-flex align-items-center justify-content-center\" style=\"width: 100px\">\n" +
                "                <a style='color: #676767; padding: 0 6px;' class=\"nav-item t-product\" href=\"#\">Hi, "+ user.userAccount +"</a>\n" +
                "                <div class=\"dropdown-menu p-0\" style=\"border-radius: 4px;top:20px;left: 0px;\"\n" +
                "                     aria-labelledby=\"dropdownMenuButton\" onclick='LogOut();'>\n" +
                "                  <a class=\"dropdown-item dropdown-link\" >Log Out</a>\n" +
                "                </div>\n" +
                "              </div>";
        }
    }
}
mainTainLogin();

function getUserFromLocalStorage() {
    let getUserFromLocal = window.localStorage.getItem('user');
    let isListUserNull = JSON.parse(getUserFromLocal);
    if (isListUserNull === null) {
        listUsers = [];
    }else{
        listUsers = isListUserNull;
    }
}

function refresh() {
    setTimeout(function () {
        location.reload()
    }, 100);
}


function checkLogin() {
    getUserFromLocalStorage();
    let userName = document.getElementById('user_name').value;
    let userPassword = document.getElementById('password').value;
    let errorLogin = document.getElementById('error_login');
    let found = 0;
    for(let user of listUsers){
        if(user.userAccount === userName && user.passWord === userPassword){
            loginRender.innerHTML= "<div class=\"dropdown d-flex align-items-center justify-content-center\" style=\"width: 100px\">\n" +
                "                <a style='color: #676767; padding: 0 6px;' class=\"nav-item t-product\" href=\"#\">Hi, "+ user.userAccount +"</a>\n" +
                "                <div class=\"dropdown-menu p-0\" style=\"border-radius: 4px;top:38px;left: 0px;\"\n" +
                "                     aria-labelledby=\"dropdownMenuButton\" onclick='LogOut();'>\n" +
                "                  <a class=\"dropdown-item dropdown-link\" >Log Out</a>\n" +
                "                </div>\n" +
                "              </div>";

            loginRenderMobile.innerHTML = "<div class=\"dropdown d-flex align-items-center justify-content-center\" style=\"width: 100px\">\n" +
                "                <a style='color: #676767; padding: 0 6px;' class=\"nav-item t-product\" href=\"#\">Hi, "+ user.userAccount +"</a>\n" +
                "                <div class=\"dropdown-menu p-0\" style=\"border-radius: 4px;top:20px;left: 0px;\"\n" +
                "                     aria-labelledby=\"dropdownMenuButton\" onclick='LogOut();'>\n" +
                "                  <a class=\"dropdown-item dropdown-link\" >Log Out</a>\n" +
                "                </div>\n" +
                "              </div>";
            found++;
            user.isLogin = true;
        }
    }
    if(found === 0){
        errorLogin.style.display = "block";
        errorLogin.innerHTML = "UserName or Password is not correct";
        errorLogin.style.color = "red";
    }else {
        errorLogin.style.display = "none";
        alert("Login successfully");
        closeModal();
    };
    localStorage.setItem('user', JSON.stringify(listUsers));
}

function closeModal() {
    $('#lgBackdrop').modal("hide");
}

function showModal() {
    $('#lgBackdrop').modal("show");
    let errorLogin = document.getElementById('error_login');
    errorLogin.style.display = "none";
}

function LogOut() {
    getUserFromLocalStorage();
    for(let user of listUsers){
        if(user.isLogin){
            user.isLogin = false;
        }
    }
    localStorage.setItem('user', JSON.stringify(listUsers));
    refresh();
}
