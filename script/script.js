$("#login").click(function () {
    $.ajax({
        type: "POST",
        url: "modules/query/LoginData.php",
        data: {username:$("#username").val(),password:$("#password").val()},
        datatype:"json",
        success: function (data) {
    console.log(data);
    
         if(data==''){
             alert("กรุณากรอกข้อมูล");
         }else if(data=='error'){
            
             alert("user หรือ password ไม่ถูกต้อง")
            
         }else if('success'){
           window.location = "admin/";
         }
        }
    });
});


