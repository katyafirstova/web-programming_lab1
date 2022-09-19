let d = document;
let X,Y,R, result;

document.getElementById("submit").onclick = function () {

        // let inp = document.getElementsByName('x');
        // for (let i = 0; i < inp.length; i++) {
        //     if (inp[i].type === "button" && inp[i].clicked) {
        //         X = inp[i].value;
        //     }
        // }
        Y = document.getElementById("y").value;
        R = document.getElementById("select").value;

        $.get('check.php', {x: X, y: Y, r: R}, function (data) {
            result = data; // ответ от сервера
            let array;
            array = result.split("#");
            add_table(array[0], array[1], array[2], array[3], array[4], array[5]);
        })

    function add_table(x, y, r, res, current_time, computation_time) {

            // Находим нужную таблицу
            let tbody = d.getElementById('result-table').getElementsByTagName('TBODY')[0];
            // Создаем строку таблицы и добавляем ее
            let row = d.createElement("TR");
            tbody.appendChild(row);

            //if (first) {
            //    first = false;
            //    d.getElementById("no_result").remove();
            //}


            // Создаем ячейки в вышесозданной строке
            // и добавляем тх
            let td1 = d.createElement("TH");
            let td2 = d.createElement("TH");
            let td3 = d.createElement("TH");
            let td4 = d.createElement("TH");
            let td5 = d.createElement("TH");
            let td6 = d.createElement("TH");

            row.appendChild(td1);
            row.appendChild(td2);
            row.appendChild(td3);
            row.appendChild(td4);
            row.appendChild(td5);
            row.appendChild(td6);


            // Наполняем ячейки
            td1.innerHTML = x;
            td2.innerHTML = y;
            td3.innerHTML = r;
            td4.innerHTML = res;
            td5.innerHTML = current_time;
            td6.innerHTML = computation_time;
        }

}