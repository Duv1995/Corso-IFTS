import React, { useState } from "react";
import Display from "./Display";
import PulsanteAzione from "./PulsanteAzione";
import PulsanteNumero from "./PulsanteNumero";

export default function Calcolatrice(props) {
  const [displayNumero, setDisplayNumero] = useState(0);
  // usestate 0 fa si che di default ci sia 0 sul displaynumero
  const [operatore, setOperatore] = useState("");
  // aggiungo un operatore per vedere se ho gia eseguito l'operazione
  const [hasEseguito, setHasEseguito] = useState(false);
  const [refresh, setRefresh] = useState(false);
  // variabile che memorizza se un pulsante è stato premuto e refresha 
  const [operatoreUno, setOperatoreUno] = useState(null);
  const [operatoreDue, setOperatoreDue] = useState(null);
  // mettere tutti questi operatore uno due etc mi permette di memorizzare
  // i vari numeri che inserisco ad ogni click sulla calcolatrice
  // i vari set--- sono variabili per poter utilizzare i miei valori inseriti
  // come fossero variabili
  const [classeBtnOnClick, setClasseBtnOnClick] = useState();
  // in questa variabile memorizziamo se un tasto è stato premuto
  // così lo evidenziamo di un colore diverso per una migliore user experience

  function handlerClickButton(valore) {
    if (valore !== undefined && valore !== null) {
      // salvo il valore che inserisco nella calcolatrice
      // dentro displaynumero, ma devo concatenare i numeri che spingo
      // finche non si preme un tasto operatore,
      // altrimenti non posso scrivere numeri superiori a 9 lol
      if ((displayNumero !== 0 || valore === ".") && hasEseguito === false) {
        // se l'operatore selezionato è null quindi ancora non è stato premuto
        // nessun pulsante operatore, allora concateno i numeri che spingo!
        // inoltre non devo considerare lo zero iniziale
        // tranne quando voglio mettere 0.qualcosa (che casino...)
        valore = displayNumero.toString() + valore.toString();
      }

      if (operatoreUno === null || operatore === null || operatore === "") {
        // se operatore 1 non è ancora stato valorizzato gli assegno un valore
        setOperatoreUno(parseFloat(valore));
        console.log("Selezione valore operatore 1", valore);
        // parsefloat perche valore può essere una stringa se formato da due pulsanti (es 7 e 0 => 70)
      } else if (operatore !== null && operatore !== "") {
        // else if per far si che operatore 2 prenda un valore
        // solo dopo che operatore 1 è gia stato settato
        // e solo dopo che un qualsiasi operatore è stato selezionato
        setOperatoreDue(valore);
        console.log("Selezione valore operatore 2", valore);
      }
      setDisplayNumero(valore);
      setHasEseguito(false);
      // resetto eseguito a false cosi torna tutto come prima e posso continuare a concatenare numeri
    }
  }

  // funzione per le operazioni della calcolatrice
  function eseguiOperazioneMatematica(azione, operatoreUno, operatoreDue) {
    console.log(azione, operatoreUno, operatoreDue);
    // consolelog per vedere come fa
    if (azione === "+") {
      return operatoreUno + operatoreDue;
    } else if (azione === "-") {
      return operatoreUno - operatoreDue;
    } else if (azione === "/") {
      return operatoreUno / operatoreDue;
    } else {
      return operatoreUno * operatoreDue;
    }
  }

  //   da qui gestisco come funzionano i pulsanti per le operazioni
  function handlerAzioneButton(azione) {
    if (azione !== undefined && azione !== null) {
    setRefresh(true);

      switch (azione) {
        case "AC":
          // il pulsante AC mi reimposta tutto a zero
          setOperatore(null);
          setOperatoreUno(null);
          setOperatoreDue(null);
          setDisplayNumero(0);
          // setdisplay aggiorna il display col mio risultato!
          setHasEseguito(false);
          break;

        case "=":
          // richiamo la funzione per fare le operazioni, easy
          let risultato = eseguiOperazioneMatematica(
            azione,
            operatoreUno,
            operatoreDue
          );
          setDisplayNumero(risultato);
          // mostro il risultato nel display
          setOperatore(null);
          // resetto l'operatore
          setOperatoreUno(risultato);
          // tengo in memoria il risultato come primo operatore,
          // cosi posso continuare a utilizzarlo per calcoli successivi
          setOperatoreDue(null);
          setHasEseguito(true);
          break;

        default:
          // l'operazione di default è quando premi un qualsiasi altro tastino
          // senza premere uguale (operatori compresi)
          if (
            operatore !== null &&
            operatore !== "" &&
            operatoreUno !== null &&
            operatoreDue !== null
          ) {
            console.log("eseguo operazione");
            let risultato = eseguiOperazioneMatematica(
              operatore,
              operatoreUno,
              operatoreDue
            );
            setDisplayNumero(risultato);
            setOperatore(azione);
            // azione non va reinizializzata come con "="
            setOperatoreUno(risultato);
            // il risultato rimane memorizzato ogni volta
            setOperatoreDue(null);
            setHasEseguito(true);
          } else {
            setDisplayNumero(0);
            setOperatore(azione);
            setHasEseguito(false);
          }
          break;
      }
    }
  }
  
  return (
    <div className="border border-dark rounded-start rounded-end w-200px">
        <div className="row p-4">
            <Display risultato={displayNumero} operatore={operatoreUno} azione={operatore} />
            {/* nel display devono apparire i numeri digitati man mano che premi i tasti */}
        </div>
        <div className="row p-2">
            <div className="col-6">
                <PulsanteAzione refresh={false} onClick={() => { handlerAzioneButton("AC"); }} label="AC" />
            </div>
            <div className="col-3">
                <PulsanteAzione refresh={refresh} onClick={() => { handlerAzioneButton("/"); }} label="/" />
            </div>
            <div className="col-3">
                <PulsanteAzione refresh={refresh} onClick={() => { handlerAzioneButton("*") }} label="*" />
            </div>
        </div>
        <div className="row p-2">
            <div className="col-3"><PulsanteNumero onClick={() => { handlerClickButton(1) }} label="1" /></div>
            <div className="col-3"><PulsanteNumero onClick={() => { handlerClickButton(2) }} label="2" /></div>
            <div className="col-3"><PulsanteNumero onClick={() => { handlerClickButton(3) }} label="3" /></div>
            <div className="col-3"><PulsanteAzione refresh={refresh} onClick={() => { handlerAzioneButton("-") }} label="-" /></div>
        </div>
        <div className="row p-2">
            <div className="col-3"><PulsanteNumero onClick={() => { handlerClickButton(4) }} label="4" /></div>
            <div className="col-3"><PulsanteNumero onClick={() => { handlerClickButton(5) }} label="5" /></div>
            <div className="col-3"><PulsanteNumero onClick={() => { handlerClickButton(6) }} label="6" /></div>
            <div className="col-3"><PulsanteAzione refresh={refresh} onClick={() => { handlerAzioneButton("+") }} label="+" /></div>
        </div>
        <div className="row p-2">
            <div className="col-3"><PulsanteNumero onClick={() => { handlerClickButton(7) }} label="7" /></div>
            <div className="col-3"><PulsanteNumero onClick={() => { handlerClickButton(8) }} label="8" /></div>
            <div className="col-3"><PulsanteNumero onClick={() => { handlerClickButton(9) }} label="9" /></div>
            <div className="col-3"><PulsanteAzione refresh={refresh} onClick={() => { handlerAzioneButton("=") }} label="=" /></div>
        </div>
        <div className="row p-2">
            <div className="col-9"><PulsanteNumero onClick={() => { handlerClickButton(0) }} label="0" /></div>
            <div className="col-3"><PulsanteNumero onClick={() => { handlerClickButton(".") }} label="." /></div>
        </div>
    </div>
);
}