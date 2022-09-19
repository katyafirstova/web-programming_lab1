var o = document.getElementById('submit');
function ajaxRequest() {
    try {
        var request = new XMLHttpRequest()
    }
    catch (e1) {
        try{
            request = new ActiveXObject("Msxml2.XMLHTTP")
        }
        catch (e2) {
            try {
                request = new ActiveXObject("Microsoft.XMLHTTP")
            }
            catch (e3) {
                request = false
            }
        }
    }
    return request
}

function check() {
    request = new ajaxRequest();
    request.open("GET", "check.php" , true);
    request.onreadystatechange = function()
    {
        if (this.readyState === 4)
        {
            if (this.status === 200)
            {
                if (this.responseText != null)
                alert("Ошибка AJAX: Данные не получены ")
            }
            else alert( "Ошибка AJAX: " + this.statusText)
        }
    }
    request.send(null)

};