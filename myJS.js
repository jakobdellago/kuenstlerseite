function register(){
    
    var username = document.getElementById('user').value;
    var beschreibung = document.getElementById('beschreibung').value;
    var bilddatei = document.getElementById('bild').value;
    
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
        }
    }
    xhttp.open('POST', 'register.php' , true);
    xhttp.send('username='+ username + '&beschreibung='+ beschreibung + '&bilddatei=' + bilddatei);
    
    //var username = document.getElementById('user');
    
}