function loginUser(){
    let uname='anita';
    let pwd = '123456';
    if(document.getElementById('uname').value == uname && document.getElementById('pwd').value == pwd){
        // localStorage.setItem('uname',uname);
        window.location.href = 'noticeboard.html'
    }else{
        alert("wrong login details");
    }
}