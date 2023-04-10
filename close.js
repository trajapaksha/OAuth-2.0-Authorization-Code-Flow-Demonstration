
var window;

window.onbeforeunload = closing;

function closing()
{
    window = window.open("http://localhost/OAuth-2.0/login.php","_blank");
}