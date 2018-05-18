
var customer_service =document.getElementById("customer_service");
//alert("hello world");
function send_customer_service_message() {
  var message = document.getElementById("customer_service_message").value;

  if (message.length == 0) {
      document.getElementById("txtHint").innerHTML = "empty message cant be send";
      return false;
  } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              customer_service.innerHTML = this.responseText;
          }
      };
      xmlhttp.open("GET", "send_message.php?message="+message+"&sendfromme=ok", true);
      xmlhttp.send();
  }
//alert(message);
  return false;
}
