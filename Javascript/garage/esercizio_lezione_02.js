/**
 * Scrivi una funzione che prenda in input un numero e 
 * restituisca TRUE se è un numero primo, FALSE altrimenti.
 */
function isNumeriPrimi(num){
    if (typeof num === "number" && num >= 1){
        for (let i = num -1; i > 1; i--){
            if (num%i == 0){
                return false;
            }
        }
        return true;
    }
    return false;
}

/**
 * Scrivi una seconda funzione, 
 * che prenda in input un numero N e stampi i primi N numeri primi.
 */
function stampaNumeriPrimi(n){
    if (typeof n == "number" && n >= 1){
        let i = 1;
        while (n >= 1){
            if (isNumeriPrimi(i)){
                console.log(n);
                n--;
            }
            i++;
        }
    }
}


function checkPalindrome(str) {
    str = str.replace(/\W/g, "");
    var len = str.length;
    for (var i = 0; i < len / 2; i++) {
        if (str[i] !== str[len - 1 - i]) {
            return false;
        }
    }
    return true;
}


function distanza(a, b, n){
    var z = a - n;
    var x = b - n;
    if (z === x){
        return 0;
    }else if (x < z) {
        return 1;
    }else{
        return -1;
    }
}
