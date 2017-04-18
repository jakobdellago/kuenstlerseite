function register(){
    
    var username = document.getElementById('user').value;
    var beschreibung = document.getElementById('beschreibung').value;
    var bilddatei = document.getElementById('bild').value;
    
    var xhttp = new XMLHttpRequest();
    
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            location.href = "http://localhost/kuenstlerseite/profil.php?username=" + username;
        }
    }
    xhttp.open('POST', 'register.php' , true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('username='+ username + '&beschreibung='+ beschreibung + '&bilddatei=' + bilddatei);
    
}

function login(){
    var username = document.getElementById('user').value;
    location.href = "http://localhost/kuenstlerseite/profil.php?username=" + username;   
}

function addWerk(){
    var erstellerID = document.getElementById("erstellerID").innerHTML;
    var titel = document.getElementById("titel").value;
    var beschreibung = document.getElementById("beschreibung").value;
    var bilddatei = document.getElementById("bild").value;
    
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            location.href = "http://localhost/kuenstlerseite/werk.php?titel=" + titel;
        }
    }
    xhttp.open('POST', 'insertWerk.php' , true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('erstellerID=' + erstellerID + '&titel='+ titel + '&beschreibung='+ beschreibung + '&bilddatei=' + bilddatei);
    
    
}

function suche(input){
    location.href = "http://localhost/kuenstlerseite/suche.php?suche=" + input
}