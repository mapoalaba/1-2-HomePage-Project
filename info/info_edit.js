function login_check(){
    var pwd = document.getElementById("pwd");
    var pwd_re = document.getElementById("pwd_re");
  
    if(pwd.value == ""){
    var err_txt = document.querySelector(".err_id");
    err_txt.textContent = "아이디를 입력하세요.";
    pwd.focus();
    return false;
    };
    var pwd_len = pwd.value.length;
    if( pwd_len < 4 || pwd_len > 12){
    var err_txt = document.querySelector(".err_id");
    err_txt.textContent = "아이디는 4~12글자만 입력할 수 있습니다.";
    pwd.focus();
    return false;
    };
  
    if(pwd_re.value == ""){
    var err_txt = document.querySelector(".err_pwd_re");
    err_txt.textContent = "비밀번호를 입력하세요.";
    pwd_re.focus();
    return false;
    };
    var pwd_re_len = pwd_re.value.length;
    if( pwd_re_len < 4 || pwd_re_len > 8){
    var err_txt = document.querySelector(".err_pwd_re");
    err_txt.textContent = "비밀번호는 4~8글자만 입력할 수 있습니다.";
    pwd_re.focus();
    return false;
    };
    };