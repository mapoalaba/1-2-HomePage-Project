function login_check(){
    var u_id = document.getElementById("u_id");
    var pwd = document.getElementById("pwd");
  
    if(u_id.value == ""){
    var err_txt = document.querySelector(".err_id");
    err_txt.textContent = "아이디를 입력하세요.";
    u_id.focus();
    return false;
    };
    var u_id_len = u_id.value.length;
    if( u_id_len < 4 || u_id_len > 12){
    var err_txt = document.querySelector(".err_id");
    err_txt.textContent = "아이디는 4~12글자만 입력할 수 있습니다.";
    u_id.focus();
    return false;
    };
  
    if(pwd.value == ""){
    var err_txt = document.querySelector(".err_pwd");
    err_txt.textContent = "비밀번호를 입력하세요.";
    pwd.focus();
    return false;
    };
    var pwd_len = pwd.value.length;
    if( pwd_len < 4 || pwd_len > 8){
    var err_txt = document.querySelector(".err_pwd");
    err_txt.textContent = "비밀번호는 4~8글자만 입력할 수 있습니다.";
    pwd.focus();
    return false;
    };
    };