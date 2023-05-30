function send(){
    var arr = document.getElementsByTagName('input')
    console.log(arr)
    var phone = arr[0].value;
    var matkhau = arr[1].value;
    if(phone == ""|| matkhau==""){
        alert("Mời bạn nhập đầy đủ thông tin!");
        return;
    }
    if(isNaN(phone)){
        alert("Số điện thoại không tồn tại!")
        return;
    }
    if(phone.length < 9)
            {
                alert("Số điện thoại của bạn phải có từ 9 số trở lên")
            }
}
