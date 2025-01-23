function start() {
  // Event listeners for Buttons
  document.getElementById("umaButton").addEventListener("click", umaDetails, false);
  document.getElementById("krishnaButton").addEventListener("click", krishnaDetails, false);
  document.getElementById("akshayaButton").addEventListener("click", akshayaDetails, false);
}

function umaDetails() {
  document.getElementById("umaWork").innerHTML =
    "My name is Suroju Uma Maheshwari holding student ID -700747932.<br>Ph.No.: +1 (913) 762-3129<br>mail id:uxs79320@ucmo.edu<br>My contribution to the project includes fabrics, About US pages</br><br>We together contributed for DataBase Connection</br>";
}

function krishnaDetails() {
  document.getElementById("krishnaWork").innerHTML =
    "My name is Krishna Reddy Kallem and holding student ID -700741863.<br>Ph.No.:+1 (816) 682-2115<br>mail id:kxk18630@ucmo.edu<br>My contribution to the project includes cart, review pages</br><br>We together contributed for DataBase Connection</br>";
}

function akshayaDetails() {
  document.getElementById("akshayaWork").innerHTML =
    "My name is Akshaya Kadari and holding student ID -700756009.<br>Ph.No.: +1 (816) 263-8860<br>mail id:axk60090@ucmo.edu<br>My contribution to the project includes home, payment pages</br><br>We together contributed for DataBase Connection</br>";
}

window.addEventListener("load", start, false);
