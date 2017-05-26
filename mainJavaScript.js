
document.write("<script type='text/javascript' src='moment.js'></script>");

function showInput() {
  let aux = document.getElementById('returnDiferentLocation').checked;
  if (aux) {  document.getElementById('returnLocation').type = "text";
    } else {
      document.getElementById('returnLocation').type = "hidden";
      document.getElementById('returnLocation').value = "";
    }
}

function showState(){

    if(document.getElementById('pickCountry').selectedIndex != 0){
        document.getElementById('pickState').setAttribute("hidden","true");
        document.getElementById('pickStateP').setAttribute("hidden","true");
    }else{
        document.getElementById('pickState').removeAttribute("hidden");
        document.getElementById('pickStateP').removeAttribute("hidden");
    }
}

function changeCities(){
    if(document.getElementById('pickCountry').selectedIndex === 0){
        document.getElementById('pickUKCity').setAttribute("hidden","true");
        document.getElementById('pickCanadaCity').setAttribute("hidden","true");
        document.getElementById('pickCostaRicaCity').setAttribute("hidden","true");
        document.getElementById('pickUSCity').removeAttribute("hidden");
        
    }else if(document.getElementById('pickCountry').selectedIndex === 1){
         document.getElementById('pickUKCity').setAttribute("hidden","true");
        document.getElementById('pickCanadaCity').setAttribute("hidden","true");
        document.getElementById('pickCostaRicaCity').removeAttribute("hidden");
        document.getElementById('pickUSCity').setAttribute("hidden","true");
        
    }else if(document.getElementById('pickCountry').selectedIndex === 2){
         document.getElementById('pickUKCity').setAttribute("hidden","true");
        document.getElementById('pickCanadaCity').removeAttribute("hidden");
        document.getElementById('pickCostaRicaCity').setAttribute("hidden","true");
        document.getElementById('pickUSCity').setAttribute("hidden","true");
        
    }else if(document.getElementById('pickCountry').selectedIndex === 3){
         document.getElementById('pickUKCity').removeAttribute("hidden");
        document.getElementById('pickCanadaCity').setAttribute("hidden","true");
        document.getElementById('pickCostaRicaCity').setAttribute("hidden","true");
        document.getElementById('pickUSCity').setAttribute("hidden","true");
    }
}



