<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style_form.css">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" class="form" id="authorisation"> Ваша почта:
        <br>
        <input id="email" placeholder="someadress@gmail.com">
        <br> Серия и номер паспорта:
        <br>
        <input id="passport" placeholder="1212 131313">
        <br> Номер телефона:
        <br>
        <input id="phone" placeholder="+7(965)-123-45-67">
        <br>
        <br>
        <button type="button" id="send">Отправить</button>
    </form>
    <script>
        //1. Напишите регулярное выражение для поиска HTML-цвета, заданного как #ABCDEF, то есть # и содержит затем 6 шестнадцатеричных символов.
        // /#[0-9A-F]{6}/i
        //2. Создайте регэксп, который ищет все положительные числа, в том числе и с десятичной точкой. Например, var str = "1.5 0 12. 123.4."
        // var regexp = /\d*[.\d]\d*[.\s]?/g;     
        // 3.Время может быть в формате часы:минуты или часы-минуты. И часы и минуты состоят из двух цифр, например 09:00, 21-30.Напишите регулярное выражение для поиска времени	
        //var regexp = /\d{2}[-:]\d{2}/;
        //4	Написатьрегулярныевыражениядляследующихсущностей: номер телефона в формате +7(965)-123-45-67, email, серии и номера паспорта. Применить написанные регулярные выражения необходимо для валидации произвольной формы, в которой обязательно должны присутствовать описанные выше поля. Поля, которые проходят валидацию подсветить зеленым, остальные – красным.
        
        var regPhone = /\+7\(\d{3}\)\-\d{3}\-\d{2}\-\d{2}/;
        var regEmail = /\w+@\w+\.\w+/;
        var regPassport = /\d{4}\s\d{6}/;
        
        send.addEventListener('click', validateForm);

        function validateForm() {
            if (email.value.match(regEmail) === null) {
                email.classList.add("declined");
            }
            else {
                email.classList.add("validated");
                email.classList.remove("declined");
            }
            if (phone.value.match(regPhone) === null) {
                phone.classList.add("declined");
            }
            else {
                phone.classList.add("validated");
                phone.classList.remove("declined");
            };
            if (passport.value.match(regPassport) === null) {
                passport.classList.add("declined")
            }
            else {
                passport.classList.add("validated");
                passport.classList.remove("declined");
            };
            
            var dataInputs = document.getElementsByTagName("input");
            
            for (var i = 0; i < dataInputs.length; i++) {
                if (dataInputs[i].classList.contains("declined") == true) {
                    alert("Введите данные в указанном формате!");
                    break;
                }
                else {
                    continue;
                };
            };
            
            if (email.classList.contains("validated") == true && phone.classList.contains("validated") == true && passport.classList.contains("validated") == true ) {
                send.setAttribute("type", "submit");
                alert("Ваши данные отправлены");
            };
        };
    </script>
</body>

</html>
