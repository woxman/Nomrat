<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>وبگو | ارسال اطلاعات فرم با ای جکس</title>
    <script src="Fr/js/Form_Au.js"></script>
</head>
<body dir="rtl">
<script>
    var div_id = 'show-result';
    var loading_message = '<img src="../../Contact/Loading/Gear-1s-200px.gif" alt="loading" height="16" width="16"> لطفا کمی صبر کنید...';
    function ajaxRequest(){
        var xmlHttp;
        try{
            xmlHttp = new XMLHttpRequest();
            return xmlHttp;
        } catch (e){
            try{
                xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
                return xmlHttp;
            } catch (e){
                try{
                    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
                    return xmlHttp;
                } catch (e){
                    alert('مرورگر شما از ای جکس پشتیبانی نمی کند!');
                    return false;
                }
            }
        }
    }

    function formGet(form, url){
        var post_str = getFormValues(form);
        //alert(post_str);
        postData(url, post_str);
    }

    function postData(url, parameters){
        var xmlHttp = ajaxRequest();

        xmlHttp.onreadystatechange =  function(){
            if(xmlHttp.readyState > 0 && xmlHttp.readyState < 4){
                document.getElementById(div_id).innerHTML = loading_message;
            }
            if(xmlHttp.readyState == 4){
                document.getElementById(div_id).innerHTML = xmlHttp.responseText;
            }
        }

        xmlHttp.open("POST", url, true);
        xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlHttp.setRequestHeader("Content-length", parameters.length);
        xmlHttp.setRequestHeader("Connection", "close");
        xmlHttp.send(parameters);
    }

    function getFormValues(form){
        var str = '';
        for(var i = 0;i < form.elements.length;i++){
            switch(form.elements[i].type){
                case 'text':
                    str += form.elements[i].name +
                        '=' + encodeURI(form.elements[i].value) + '&';
                    break;
                case 'email':
                    str += form.elements[i].name +
                        '=' + encodeURI(form.elements[i].value) + '&';
                    break;
                case 'textarea':
                    str += form.elements[i].name +
                        '=' + encodeURI(form.elements[i].value) + '&';
                    break;
                case 'select-one':
                    str += form.elements[i].name +
                        '=' + form.elements[i].options[form.elements[i].selectedIndex].value + '&';
                    break;
                case 'checkbox':
                    if(form.elements[i].checked == true){
                        str += form.elements[i].name +
                            '=' + form.elements[i].value + '&';
                    } else{
                        str += form.elements[i].name +
                            '=' + '0' + '&';
                    }
                    break;

            }
        }
        str = str.substr(0, (str.length - 1));
        return str;
    }

</script>
<noscript>
    جاوا اسکریپت در مرورگر شما غیر فعال است!
    <br>
</noscript>
<form name="form-name" action="#">
    <label for="name">نام: </label>
    <input id="name" name="name" type="text" size="50" placeholder="نام خود را وارد کنید">
    <br>
    <br>
    <label for="email">پست الکترونیک: </label>
    <input id="email" name="email" type="email" size="50" placeholder="پست الکترونیک خود را وارد کنید">
    <br>
    <br>
    <label for="number">انتخاب شماره: </label>
    <select id="number" name="number">
        <option value="1">1</option>
        <option value="2">2</option>
    </select>
    <br>
    <br>
    <label for="check">تایید: </label>
    <input id="check" name="check" type="checkbox" value="1">
    <br>
    <br>
    <input name="send" type="button" value="ارسال" onclick="formGet(this.form, 'process.php');">
</form>
<div id="show-result"></div>
<hr>
پس از کلیک بر روی دکمه ارسال، تابع جاوا اسکریپتی formGet اجرا شده و فرآیند درخواست ای جکس شروع می شود، در نهایت نتیجه در بلاک div با آی دی فرضی show-result نمایش داده خواهد شد، یکی از بخش های مهم این کد ارسال آبجکت فرم با تابع formGet و استفاده از آن در تابع getFormValues است، از این آبجکت برای دسترسی به زیرمجموعه های تگ form مورد نظر استفاده خواهیم کرد.
    <?php
    $Salt="Hekta";
    $Pass_A ="13wek79hox12ecdfa12#$@T%#%#@##!@#apdfuOALUJSFOfpgwd2";
    $Hash_Pass = hash('sha256',$Salt.$Pass_A);
    $Hash_Pass2 = hash('sha256',$Pass_A);
    echo ("<br><br><br><br><br><br>");
    echo ("Size Of : ".strlen($Pass_A)."<br><br><br><br>");
    echo ($Hash_Pass."<br><br>");
    echo ($Hash_Pass2."<br><br>");
    echo ("Size Of : ".strlen($Hash_Pass)."<br><br><br><br>");

    ?>
</body>
</html>