function send(){
    var arr = document.getElementsByTagName('input')
    console.log(arr)
    var phone = arr[0].value;
    var hoten = arr[1].value;
    var matkhau = arr[2].value;
    var nhaplaimatkhau = arr[3].value;
    if(phone == ""|| hoten==""||matkhau == ""||nhaplaimatkhau == ""){
        alert("Mời bạn nhập đầy đủ thông tin!");
        return;
    }
    else{
        if(isNaN(phone)){
            alert("Số điện thoại không hợp lệ!")
            return;
        }
        else{
            if(phone.length < 9  )
                {
                    alert("Nhập số điện thoại không hợp lệ!")
                }
            elseif( matkhau != nhaplaimatkhau)
            {
                alert("Mật khẩu không trùng nhau!")
            }
        }
          
    }
}