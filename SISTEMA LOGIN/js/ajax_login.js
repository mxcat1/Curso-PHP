$(function () {
    $("#frm_login").submit(function (e) {
        e.preventDefault();
        $.ajax({
            data: $("#frm_login").serialize(),
            datatype: "json",
            url: "./Sistema_login.php",
            type: "POST",
            success: function (res) {
                $("#res").html(res)
            },
            error:function (data) {
                console.log(data)
            }
        })
    })
});


