
function addedtocart(){



  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          alert(this.responseText);
      }
  };
  xmlhttp.open("GET", "../../../buyers/addtocart.php", true);
  xmlhttp.send();



  return false;


}
