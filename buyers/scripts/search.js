var placetoshow = document.getElementById('show_searched');


function showHint(str) {
  if (str.length == 0) {
        placetoshow.innerHTML = "";

        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                placetoshow.innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "searchforkeyword.php?key=" + str, true);
        xmlhttp.send();
    }





}
