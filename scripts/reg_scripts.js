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