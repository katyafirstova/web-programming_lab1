"use strict"
const form = document.querySelector('#form');
let x = form.elements.namedItem("x");
let y = form.elements.namedItem("y");
let r = form.elements.namedItem("r");
let xError = document.getElementsByClassName("xError");
let submitForm = $('#submit');
let result;


const pass_reg = /(^-[123]$)|(^[012345]$)/;

window.onload = function () {

    let buttons = document.querySelectorAll("button[name = x]");
    buttons.forEach(click);

    function click(element) {
        element.onclick = function () {
            x = element.value;
            buttons.forEach(function (element) {
                element.style.boxShadow = "";
                element.style.transform = "";
            });
            this.style.boxShadow = "0 0 40px 5px #f41c52";
            this.style.transform = "scale(1.05)";
        }
        return true;
    }


    function validateX() {
        if (x.value === "") {
            printError("xError", "выберите x");
        } else {
            printError("xError", "");
            xError = false;
        }
    }

    submitForm.on('click', function () {
        validateX();
    });
};

form.addEventListener('submit', function (e) {
    e.preventDefault();

    return true;
});

function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}


submitForm.on('click', function () {
    checkIfBlank();
});

function checkIfBlank() {
    let yValue = y.value;
    if (yValue === '') {
        setErrorFor(y, 'поле не может быть пустым');
    } else {
        setSuccessFor(y);
    }
}

function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');

    small.innerText = message;
    formControl.className = 'form-control error';
}

function setSuccessFor(input) {
    const formControl = input.parentElement;

    formControl.className = 'form-control success';

}

function validateY(e) {
    if (e.target.name === "y") {
        if (pass_reg.test(e.target.value)) {
            e.target.classList.add('valid');
            e.target.classList.remove('invalid');
            y.value = e.target.value;
        } else {
            e.target.classList.add('invalid');
            e.target.classList.remove('valid');
        }
    }
}

y.addEventListener('input', validateY);


submitForm.on('click', function () {
    validateR();
});

function validateR() {
    let label = $('label');
    let selectedVal = $(".selectR");
    label.removeClass('reallyRequired');
    if (selectedVal.val() === "" || selectedVal.val() == null) {
        selectedVal.focus();
        selectedVal.prev('label').addClass('reallyRequired');
        return false;
    } else {
        label.removeClass('reallyRequired');
    }
    r = selectedVal.val();


}


document.getElementById("submit").onclick = function () {
    $.ajax({
        type: 'GET',
        url: 'main.php',
        data: {'x': x, 'y': y.value, 'r': r},
        dataType: "json",

    });
}


    function getTable() {
        document.getElementById("submit").onclick = function () {

            $.get('main.php', function (data) {
                result = data;
                let array = result;
                add_table(array[0], array[1], array[2], array[3], array[4], array[5]);
            })

            function add_table(x, y, r, res, current_time, computation_time) {
                if (res === undefined) {
                    alert(" ");
                } else {
                    let tbody = document.getElementById('result-table').getElementsByTagName('TBODY')[0];
                    let row = document.createElement("TR");
                    tbody.appendChild(row);

                    let td1 = document.createElement("TH");
                    let td2 = document.createElement("TH");
                    let td3 = document.createElement("TH");
                    let td4 = document.createElement("TH");
                    let td5 = document.createElement("TH");
                    let td6 = document.createElement("TH");

                    row.appendChild(td1);
                    row.appendChild(td2);
                    row.appendChild(td3);
                    row.appendChild(td4);
                    row.appendChild(td5);
                    row.appendChild(td6);


                    y = document.getElementById("y").value;
                    r = document.getElementById("select").value;


                    $("button").click(function () {
                        td1.innerHTML = $(this).value;
                    });

                    td2.innerHTML = y;
                    td3.innerHTML = r;
                    td4.innerHTML = res;
                    td5.innerHTML = current_time;
                    td6.innerHTML = computation_time;
                }


            }
        }
    }




























