/*Esercitazione 1
https://github.com/Adrias-Online/corso-ifts/blob/
main/esercizi-lezione-08/esercizio01.html

Aggiungiamo al tag form l’evento Submit
attraverso il metodo addEventListener e
fermiamo la sua esecuzione. Stampiamo i valori
dell’oggetto event sulla console.*/

document.getElementById("formContatto").addEventListener("submit",
    function (event) {

        let nome = document.getElementById("nome").value;
        let cognome = document.getElementById("cognome").value;
        let telefono = document.getElementById("telefono").value;
        let email = document.getElementById("email").value;
        // alert(nome + " " + cognome + " " + telefono + " " + email);
        console.log(nome + " " + cognome + " " + telefono + " " + email);

        event.preventDefault();
    });