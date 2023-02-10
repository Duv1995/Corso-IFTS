<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funzioni principali</title>
</head>
<body>
    <?php
// FUNZIONI DEFAULT
// Su PHP ci sono un sacco di funzioni di default che iniziano tutte
// con array_ per quelle che si usano per gli array, etc
// Se mi servono funzioni specifiche vado su google e cerco quello che mi serve!


// array_sum (array $array) : int|float (restituisce o un intero o un num decimale)

// count — Counts all elements in an array or in a Countable object
// count(Countable|array $value, int $mode = COUNT_NORMAL): int

// array_key_exists — Checks if the given key or index exists in the array
// array_key_exists(string|int $key, array $array): bool (ti restituisce ture o false)

// array_keys — Return all the keys or a subset of the keys of an array
// array_keys(array $array, mixed $filter_value, bool $strict = false): array

// array_push — Push one or more elements onto the end of array
// array_push(array &$array, mixed ...$values): int

// extract — Import variables into the current symbol table from an array
// extract(array &$array, int $flags = EXTR_OVERWRITE, string $prefix = ""): int

// substr — Returns the portion of string specified by the offset and length parameters.
// substr(string $string, int $offset, ?int $length = null): string
// offset è lo spostamento, se è 1 mi sposto di un carattere nella stringa "pippo" => "ippo"
// se l'offset è negativo lo spostamento lo faccio dal fondo "pippo" => "pipp"
// ?int $length = null è un parametro opzionale che quando richiami la funzione
// può esserci o meno, nella funzione viene sempre definito un valore di default
// che viene inserito automaticamente se non lo si specifica nella chiamata

// i parametri opzionali si segnano come ultimi di una funzione e gli si da un = valore default


// str_replace — Replace all occurrences of the search string with the replacement string
// str_replace(
//     array|string $search, (elemento da cercare = lettera P)
//     array|string $replace, (elemento da sostituire = lettera C)
//     string|array $subject, (elemento in cui cercare = pippo)
//     int &$count = null
// ): string|array (restituirà pippo => cicco)


// explode — Split a string by a string
// explode(string $separator, string $string, int $limit = PHP_INT_MAX): array
// mi restituisce un array come risultato, perche ogni funzione può restituire
// un singolo dato, quindi qui siccome saranno molti te li mette in un array


// number_format — Format a number with grouped thousands
// può servire perche nei database separiamo i numeri decimali con il punto
// mentre sul browser ci servono scritti con la virgola
// number_format(
//     float $num, (numero decimale)
//     int $decimals = 0, (numero di decimali con cui voglio scriverlo)
//     ?string $decimal_separator = ".", (simbolo che rappresenta il separatore dei decimali)
//     ?string $thousands_separator = "," (separatore delle migliaia)
// ): string


// strpos — Find the position of the first occurrence of a substring in a string
// strpos(string $haystack, string $needle, int $offset = 0): int|false
// con === si verifica se il contenuto e il tipo di dato è uguale








?>

</body>
</html>