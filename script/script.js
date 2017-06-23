$("#login").click(function () {
    $.ajax({
        type: "POST",
        url: "modules/query/LoginData.php",
        data: {username:$("#username").val(),password:$("#password").val()},
        datatype:"json",
        success: function (data) {
            console.log(data);
        }
    });
});


