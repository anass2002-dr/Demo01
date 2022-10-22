

var btnSubmit=document.getElementById('submit');
if(btnSubmit!=null){
    btnSubmit.addEventListener('click',(event)=>{
        var passord=document.getElementById('PasswordRegister').value;
        var passConfirme=document.getElementById('ConfirmePassword').value;
        if(passord!=passConfirme){
            event.preventDefault();
        document.getElementById('ConfirmePassword').style.borderBottomColor = 'red';
        document.getElementById('sp_pass').style.display = '';
        }
    });
}

// var type="{{Session::get('email_login');}}";
// if(type!=''){
//     console.log(type);
// }
// var sp_email=document.getElementById('sp_email').addEventListener('change',()=>{
//     this.style.display='';
// });