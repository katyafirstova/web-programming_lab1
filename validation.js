"use strict"
const form = document.querySelector('#form');
let x = form.elements.namedItem("x");
let y = form.elements.namedItem("y");
let r = form.elements.namedItem("r");
let xError = document.getElementsByClassName("xError");

const pass_reg = /(^-[123]$)|(^[012345]$)/;


window.onload = function () {

    let buttons = document.querySelectorAll("button[name = x]");
    buttons.forEach(click);

    function click(element) {
        element.onclick = function () {
            x = this.value;
            buttons.forEach(function (element) {
                element.style.boxShadow = "";
                element.style.transform = "";
            });
            this.style.boxShadow = "0 0 40px 5px #f41c52";
            this.style.transform = "scale(1.05)";
        }
        return true;
    }

    x.onblur = function () {
        if (x.value == null) {
            xError.innerHTML = 'Выберите значение X'
            this.classList.add("xError");
            y.classList.add('invalid');
        }
    };
    x.onfocus = function () {
        if (this.classList.contains('invalid')) {
            this.classList.remove('invalid');
            xError.innerHTML = "";
        }
    };
};

form.addEventListener('submit', function (e) {
    e.preventDefault();

    return true;
});

form.addEventListener('submit', (e) =>{
    e.preventDefault();

    checkIfBlank();
});

function checkIfBlank() {
    let yValue = y.value.trim();
    if (yValue === '') {
        setErrorFor(y, 'y cannot be blank');
    } else {
        setSuccessFor(y);
    }

}

function setErrorFor(input, message) {
    const formControl = input.parentElement; //.form-control
    const small = formControl.querySelector('small');

    small.innerText = message;
    formControl.className = 'form-control error';
}

function setSuccessFor(input, message) {
    const formControl = input.parentElement;

    formControl.className = 'form-control success';

}

function validateY(e) {
    if (e.target.name === "y") {
        if (pass_reg.test(e.target.value)) {
            e.target.classList.add('valid');
            e.target.classList.remove('invalid');
        } else {
            e.target.classList.add('invalid');
            e.target.classList.remove('valid');
        }
    }
}

y.addEventListener('input', validateY);


let form1 = $('#form1');

form1.on('click', function () {
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
}


// function validateX(elem) {
//     let label = $('label');
//     let val =
//     if(isNaN(elem.value())) {
//         // elem.setAttribute("aria-invalid", true);
//         // x.classList.add("active");
//         // x.innerHTML = x.getAttribute("title")
//
//         alert("no x")
//
//     }
//     else elem.removeAttribute("aria-invalid");
// }
//
// form1.on('click', function () {
//     validateX();
// });

//
// let xError = x.parentElement.querySelector(".xError");
// if (click(x) === false) {
//     x.setAttribute("aria-invalid", true);
//     xError.classList.add("active");
//     xError.innerHTML = x.getAttribute("title");
// } else {
//     x.removeAttribute("aria-invalid");
//     xError.innerHTML = "";
//     xError.classList.remove("active");
//     x = this.value;
// }


// document.getElementById("form1").oncanplay = function () {
//         $.ajax({
//             type: 'GET',
//             url: 'main.php',
//             data: {'x': x, 'y': y, 'r': r},
//             dataType: "json",
//
//         });
// }

// $('#form').submit(function() {
//     $.ajax({
//         type: "GET",
//         url: "main.php",
//         data: {
//             "x": x, "y": y, "r": r,
//             success: function (html) {
//                 $("#content").html(html);
//             }
//         }
//     });
// });
//
// function send() {
//     let params = new URLSearchParams('x=' + x + '&y=' + y + "&r=" + r);
//         fetch("main.php", {
//             method: "GET",
//             body: params
//         })}

























