function toggleTesto() {
    // prendo il mio elemento span con id testo
    let testo = document.getElementById("testo");

    // se c'è gia la classe display none la tolgo
    if (testo.className === "d-none") {
        testo.className = "";
    } else {
        // se display none non c'è lo metto
        testo.className = "d-none";
    }
}