//for registration
$(document).ready(function () {
  $("save").submit(function () {
    var fullName=$("#fullName").val();
    var email=$("#email").val();
    var password=$("#password").val();
    var city=$("#city").val();
    var image=$("#image").val();

    $.post("./processReg.php",{
      fullName:fullName,
      email:email, 
      password:password,
      city:city,
      image:image
    },
    function(data,status){
      if(data=="success"){
        $("#response").html("<div class='alert alert-info'>"data"</div>");
      }else        $("#response").html("<div class='alert alert-warning'>"data"</div>");

    })

  
});
});

//for login
$(document).ready(function () {
    $("#login").submit(function (event) {
        event.preventDefault();
        var email = $("logs[name = 'email']").val();
        var password = $("logs[name = 'password']").val();
        $.post("processLogin.php", {
            email: email,
            password: password
        },
            function (data, status) {
                $("#Message").html(data);

            });
    });
});




//for change password
$(document).ready(function () {
  $("save").submit(function (event) {
    var formData = {
      password: $("#password").val(),
      password: $("#pass1").val(),
    };

    $.ajax({
      type: "POST",
      url: "processChangePassword.php",
      data: formData,
      dataType: "json",
      encode: true,
    }).done(function (data) {
      console.log(data);
    });

    event.preventDefault();
  });
});
