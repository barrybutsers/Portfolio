//Functions

//Huidige datum berekenen.
function writeDate() {
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1;
    var yyyy = today.getFullYear();
    if (dd < 10) {
        dd = '0' + dd
    }
    if (mm < 10) {
        mm = '0' + mm
    }
    today = dd + '/' + mm + '/' + yyyy;
    document.write(today);
};
// Kijken of het antwoord correct is en de volgende vraag aanroepen.
function isCorrect(A) {
    
    if (A == Awnsers[Teller]) {
        $('#yayOrNay').text('Gefeliciteerd u krijgt er 15 punten bij!');
        Score = Score + 15;
        console.log("Goed antwoord");
    }
    else if (A != Awnsers[Teller]) {
        $('#yayOrNay').text('Helaas het goede antwoord was ' + Awnsers[Teller] + ' u verliest 3 punten.');
        Score = Score - 3;
        console.log("Fout antwoord");
    }
    else{
        $('#yayOrNay').text('Helaas de tijd is op u verliest 3 punten');
        Score = Score - 3;
        console.log("Geen antwoord");
    }
    if (Teller < Questions.length - 1) {
        Vraag(Teller);
    }
    else {
        $('#Quiz').attr("hidden", "hidden");
        $('#endForm').removeAttr("hidden");
        $('#endScore').text(Score);
        $('#endScore').fadeIn(5000);
    }
}
// De vraag weergeven
function Vraag() {
    Teller++;
    $('#Questions').text(Questions[Teller]);
    $('#Options').text(Options[Teller]);
    $('#Percentage').text('U bent momenteel op ' + Percentage + "0% van de quiz."); 
    Percentage = Percentage + 2;
}

//quiz vragen
var Questions = [
        'Welke Hoogte heeft de eifeltoren?',
        'Wat was de achternaam van de Franse politieke leider Napoleon?',
        'Wie was de eerste europeaan die stap zette in Amerika?',
        'Op 22 november 1963 werd de president van Amerika doodgeschoten, welke president was dit?',
        'In welke provincie ligt Tilburg?'
];
var Options = [
        'A: 324 meter B: 200 meter C: 163 meter',
        'A: Bonaparte B: Lodewijk C: Bernard',
        'A: Michiel de Ruyter B: Christoffel Columbus C: Biarni Heriulfsson',
        'A: George Washington B: John F. Kennedy C: Ronald Reagan',
        'A: Tilburg is een provincie B: Friesland C: Noord-Brabant'
];
var Awnsers = [
        'A',
        'A',
        'C',
        'B',
        'C'
];

//Quiz standaardwaarden
var Score = 0;
var Teller = -1;
var Percentage = 0;

//De quiz zelf
window.onload = function(){
    $("#Name").focus();
    $('#Button').click(function () {
        var name = document.getElementById("Name").value;
        $('#inputName').attr("hidden", "hidden");
        $('#startReady').removeAttr("hidden");
        $('#Greet').text("Gegroet " + name);
        $('#Start').click(function () {
            $('#startReady').attr("hidden", "hidden");
            $('#Quiz').removeAttr("hidden");
            Vraag();
        });
    });
    console.log("Lars van Alphen IO1D4");
};