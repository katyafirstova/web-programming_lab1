function ajaxRequest() {
    let request = new ajaxRequest();
    request.open("GET", "check.php", true);
    request.onreadystatechange = function () {
        if (this.readyState === 4) {
            if (this.status === 200) {
                if (this.responseText != null)
                    alert("Ошибка AJAX: Данные не получены ")
            } else alert("Ошибка AJAX: " + this.statusText)
        }
    }
    request.send(null)

};




