/**
 * Scrivi un programma per la gestione di una rubrica telefonica. 
 * 
 * Definisci una classe che rappresenti un contatto. L'unico vincolo che hai è di inserire almeno il nome, cognome e il numero di telefono come stringhe.
    Definisci un’altra classe che rappresenti la Rubrica che implementa i metodi per le seguenti operazioni:
      - Visualizzazione dell'intera lista contatti con la possibilità di scegliere il tipo di ordinamento (A->Z, Z->A)
      - Inserimento di un nuovo Contatto che non sia già presente in Rubrica.
      - Modifica di uno contatto passando in input l'indice dell'array
      - Cancellazione di un contatto passando in input l'indice dell'array
      - Ricerca passando il nome, o parte del nome, e restituendo il singolo contatto.
 */

      class Contatto {
        constructor(nome, cognome, numeroDiTelefono, email) {
            this.nome = nome;
            this.cognome = cognome;
            this.numeroDiTelefono = numeroDiTelefono;
            this.email = email;
        }
        get nome() {
            return this._nome;
        }
        get cognome() {
            return this._cognome;
        }
        get numeroDiTelefono() {
            return this._numeroDiTelefono;
        }
        get email() {
            return this._email;
        }
        set nome(nome) {
            if (typeof (nome) === "string") {
                this._nome = nome;
            }
        }
        set email(email) {
            if (typeof (email) === "string") {
                this._email = email;
            }
        }
        set cognome(cognome) {
            if (typeof (cognome) === "string") {
                this._cognome = cognome;
            }
        }
        set numeroDiTelefono(numeroDiTelefono) {
            if (typeof (numeroDiTelefono) === "string") {
                this._numeroDiTelefono = numeroDiTelefono;
            }
        }
    }
    
    class Rubrica {
    
        constructor() {
        }
    
        stampaContatti(ordinamento, callback, callbackError) {
            let compare = (a, b) => (a.cognome > b.cognome) ? 1 : ((b.cognome > a.cognome) ? -1 : 0);
            chiamataApiContatto("GET", API_CONTATTI_BASE_URL, null, function (data) {
                if (ordinamento.toLowerCase() === "az") {
                    data.sort(compare);
                } else {
                    data.sort(compare);
                    data.reverse();
                }
                callback(data);
            }, callbackError);
        }
    
        aggiungiContatto(contatto, callback, callbackError) {
            chiamataApiContatto("POST", API_CONTATTI_BASE_URL, contatto, callback, callbackError);
        }
    
        modificaContatto(id, contatto, callback) {
            chiamataApiContatto("PUT", API_CONTATTI_BASE_URL + "/" + id, contatto, callback);
        }
        eliminaContatto(id, callback) {
            chiamataApiContatto("DELETE", API_CONTATTI_BASE_URL + "/" + id, null, callback);
        }
        ricercaContatto(nome) {
            let contatti = chiamataApiSincronaContatto(API_CONTATTI_BASE_URL, function () { });
            let lista = [];
            let valore = nome.toLowerCase();
            for (let i = 0; i < contatti.length; i++) {
                let contatto = contatti[i];
                if (contatto.nome.toLowerCase().indexOf(valore) > -1 || contatto.cognome.toLowerCase().indexOf(valore) > -1) {
                    lista.push(contatto);
                }
            }
    
            return lista;
        }
    }
    
    // definisco 
    const API_CONTATTI_BASE_URL = "https://ifts.adriasonline.com/contatti";
    
    function chiamataApiSincronaContatto(uri, onError) {
        let xhr = new XMLHttpRequest();
        xhr.open("GET", uri, false);
        xhr.onerror = onError;
        xhr.send();
        return JSON.parse(xhr.response);
    }
    
    function chiamataApiContatto(method, uri, body, onRetriveResponse, onError) {
        let xhr = new XMLHttpRequest();
        xhr.open(method, uri);
        xhr.responseType = "json";
        if (body !== null && body !== undefined) {
            xhr.setRequestHeader("Content-Type", "application/json");
            if (typeof body === "object") {
                let newObj = {};
                for (const key in body) {
                    const element = body[key];
                    newObj[key.substring(1)] = element;
                }
                body = JSON.stringify(newObj);
            }
            xhr.send(body);
        } else {
            xhr.send();
        }
    
        xhr.onload = function () {
            onRetriveResponse(xhr.response);
        }
    
        xhr.onerror = function () {
            onError();
        }
    }
    
    
    let rubrica = new Rubrica();
    if (window.rubrica !== undefined) {
        window.rubrica = rubrica;
    }