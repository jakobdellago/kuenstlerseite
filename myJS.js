function register(){
    
    var username = document.getElementById('user').value;
    var beschreibung = document.getElementById('beschreibung').value;
    var bilddatei = document.getElementById('bild').value;
    
    var xhttp = new XMLHttpRequest();
    
    /*
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            //console.log('<a href="http://localhost/kuenstlerseite/profil.php?username=' + username + '"</a>');
            //return '<a href="http://localhost/kuenstlerseite/profil.php?username=' + username + '"</a>';
        }
    }
    */
    xhttp.open('POST', 'register.php' , true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('username='+ username + '&beschreibung='+ beschreibung + '&bilddatei=' + bilddatei);
    
    
    location.href = "http://localhost/kuenstlerseite/profil.php?username=" + username;
    //var username = document.getElementById('user');
    
}

function login(){
    
    var username = document.getElementById('user').value;
    
    location.href = "http://localhost/kuenstlerseite/profil.php?username=" + username;
    
}