﻿<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>اینستالر</title>
    <?php require_once "Include.php"?>
</head>
<body  onload="ShowDate();">
<script>
    var div_id = 'show-result';
    var loading_message = '<img src="Contact/Loading/Gear-1s-200px.gif" alt="loading" height="16" width="16"> لطفا کمی صبر کنید...';
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
                    case 'file':
                    str += form.elements[i].name +
                        '=' + encodeURI(form.elements[i].value) + '&';
                    break;
                    case 'password':
                    str += form.elements[i].name +
                        '=' + encodeURI(form.elements[i].value) + '&';
                    break;
                case 'textarea':
                    str += form.elements[i].name +
                        '=' + encodeURI(form.elements[i].value) + '&';
                    break;
                    case 'hidden':
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

<!--------------------------Start Header---------------------------------------->
<div>
    <?php print_r(Clock_Data()); ?>
    <div class="header_in" align="center">
        <div class="btn btn-light border"><?php Global_Var(); global $I_T; echo ($I_T);?>&nbsp;<i class="fa fa-toolbox" ></i></div>
    </div>
</div>

<div class="btnz">
    <br>
</div>
<!--------------------------End Header---------------------------------------->
<!--------------------------Start Body---------------------------------------->
<div class="body" dir="ltr" align="center">
    <div id="show-result"></div>
    <div align="left" dir="ltr" class="form_in">
        <noscript>
            جاوا اسکریپت در مرورگر شما غیر فعال است!
            <br>
        </noscript>
        <?php
        $FileName = 'Definitions/Config.php';
        A:
        if (file_exists($FileName))
        {
            global $Link_C ;
            $Link_C = new mysqli($DB_Host,$DB_User,$DB_Pass,$DB_Name);
            if ($Link_C)
            {
                B:
                if ($Link_C ->select_db($DB_Name))
                {
                    $record=0;
                    $result = $Link_C->query("SELECT id FROM admins");
                    if (mysqli_num_rows($result) != 0)
                    {
                        Goto C;
                    }
                    else
                    {
                        return(form_2());
                        #Insert Data Form 2 in Admins Table
                    }

                }else
                {
                    echo "Select Faild";
                    //Create Database And Tables
                    exit(0);
                    Goto B;
                }
            }else
            {
                echo "Error Code : 59 ";;
            }
        }else
        {

                return(Form_1());
            //if form data connect to phpmyadmin
                #create file config.php
            Goto A;
        }
        C:
        redirect("Panel.php")
        ?>
        <!--------------------------End Body---------------------------------------->
    <!--------------------------Start Footer---------------------------------------->
    <?php #print_r(Copy_Right());?>
    <!--------------------------End Footer---------------------------------------->
</div>
</body>
</html>
