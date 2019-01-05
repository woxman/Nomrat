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
            case "password":
                str += formobj.elements[i].name +
                    "=" + encodeURI(form.elements[i].value) + "&";
                break;
            case "email":
                str += formobj.elements[i].name +
                    "=" + encodeURI(form.elements[i].value) + "&";
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
