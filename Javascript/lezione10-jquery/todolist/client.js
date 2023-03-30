function eseguiGet() {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "https://jsonplaceholder.typicode.com/todos")
    xhr.responseType = "json";
    xhr.send();

    xhr.onload = function () {
        disegnaContenuto(xhr.response);
    }

    xhr.onerror = function () {

    }
}

function disegnaContenuto(resp) {
    let divRoot = document.getElementById("result");
    divRoot.innerHTML = "";
    for (let index = 0; index < resp.length; index++) {
        const element = resp[index];
        let riga = creaDivRighe(index);
        riga.appendChild(creaDivColonne(element.id));
        riga.appendChild(creaDivColonne(element.title));
        riga.appendChild(creaDivColonne(creaStato(element.completed)));
        divRoot.appendChild(riga);
    }
}


function creaStato(stato) {
    if (stato) {
        return '<i class="bi bi-check-circle-fill"></i>';
    } else {
        return '<i class="bi bi-check-circle"></i>'
    }
}
function creaDivColonne(valoreTesto) {
    let divCol = document.createElement("div");
    divCol.className = "col-md-3";
    divCol.innerHTML = valoreTesto;
    return divCol;
}

function creaDivRighe(indice) {
    let divRow = document.createElement("div");
    divRow.setAttribute("data-id", indice);

    if (indice % 2 === 0) {
        divRow.className = "row";
    } else {
        divRow.className = "row bg-light";
    }

    return divRow;
}


//eseguiGet();


function validaNumero(valore) {
    if (typeof valore !== "number") {
        let error = new Error("Valore numerico non valido");
        throw error;
    }

    //continua il mio codice
}

//validaNumero(1);


function getHttp() {
    return new Promise(
        function (resolve, reject) {
            let xhr = new XMLHttpRequest();
            xhr.responseType = "json";
            xhr.onload = function () {
                if (xhr.status === 200 && 50 / 0) {
                    resolve(xhr.response);
                } else {
                    reject(new Error(xhr.statusText));
                }
            }
            xhr.open("GET", "https://jsonplaceholder.typicode.com/todos");
            xhr.send();
        }
    );
}


let promessa = getHttp();

promessa.then((data) => console.log(data))
.catch((error) => console.dir(error));


function provaPromesse() {
    return new Promise(
        function (resolve, reject) {
            let array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
            let totale = 0;
            for (let index = 0; index < array.length; index++) {
                const element = array[index];
                totale = totale + element;
                let x = 0;
                while (x <= 1000000) {
                    x++;
                }
                if (totale > 4) {
                    resolve(totale);
                } else {
                    reject(index);
                }
            }
        }
    );
}

//let promessa2 = provaPromesse();

//promessa2.then((totale) => console.log("Totale: " + totale), (error) => console.log("Indice: " + error));

for (let index = 0; index < 1000; index++) {
    console.log("ciao");
}
