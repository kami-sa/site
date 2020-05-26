        function isRegDataValid() {
            var pass = document.getElementById("p").value;
            var rePass = document.getElementById("rp").value;
            //console.log(pass+" "+rePass);
            console.log((pass === rePass) + " - passwords")
                //window.alert("Пароли совпадают");
            //var email = document.getElementById("e").value;
            //var mask = new RegExp(/^[\w\d]+@[\w\d]+\.[ru]|[com]|[org]$/);
            //console.log(typeof email);
            //var mask = new RegExp("^[A-Za-z0-9]{1,}[@]{1,2}[A-Za-z0-9]{1,}[.]{1,2}[\"ru\"]|[\"com\"]|[\"org\"]$");
            //console.log(mask.test(email) + " email");
            if (!(pass === rePass))
                alert("Пароли не совпадают");
            //if (!(mask.test(email)))
                //alert("Неверный Email");
            // if (document.getElementById("n").value === "Имя")
            //     alert("Вы забыли ввести имя");
            // if (document.getElementById("s").value === "Фамилия")
            //     alert("Вы забыли ввести фамилию");
            //return (pass === rePass)&&(mask.test(email));
            return pass === rePass;
        }

        function invalidPassword() {
            if(confirm("Вы ввели неверный пароль. Попробуйте войти еще раз?"))
                window.location.href="../authorization/auth.html"
        }

        function invalidEmail() {
            if(confirm("Такого email я не знаю. " +
                "Хотите зарегистрироваться? " +
                "Если вы уверены, что зарегистрированы, нажмите Нет и попробуйте еще раз."))
                window.location.href="../registration/reg.php"
            else
                window.location.href="../authorization/auth.html"
        }

        $("#reg_form").mousemove(function () {
            console.log("here")
            $(":input").each(function () {
                //if ($(this).val() === '') {
                    //$(":empty").blur(function(){
                    $(this).blur(function () {
                        console.log("here1")
                        if ($(this).val() === '')
                            $(this).addClass("error")
                            $("#attention").show()
                            $("#attention").html("<p>Заполните пустые поля</p>")
                    })
                    $(this).focus(function () {
                        console.log("here2")
                        $(this).removeClass("error")
                        $("#attention").hide()
                    })
                // }
                // else
                // {
                //     $(this).blur(function(){
                //         console.log("here3")
                //         $(this).removeClass("error")
                //     })
                // }
            })

            $("#rp").blur(function () {
                if ($("#p").val() != $("#rp").val())
                    $("#attention").html("<p>Пароли не совпадают</p>")

            })


    })