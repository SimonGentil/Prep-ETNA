var body = document.querySelector("body");
var button = document.getElementById("submit");

button.onclick = on_click;
function on_click ()
{
    var id = document.getElementById("com");
    var div = id.appendChild(document.createElement("div"));
    div.id = "comment";
    var div1 = div.appendChild(document.createElement("div"));
    var div2 = div.appendChild(document.createElement("div"));

    var value = document.getElementById("commentaire").value;
    var value2 = document.getElementById("pseudo").value;
    value2 = value2 + ":";
    div1.textContent = value2;
    div2.textContent = value;
    document.getElementById("commentaire").value = "";
    document.getElementById("pseudo").value = "";
    var button2 = div2.appendChild(document.createElement("button"));
    var br = id.appendChild(document.createElement("br"));

    button2.textContent = 'x';
    button2.onclick = on_click2;
    function        on_click2 ()
    {
        id.removeChild(div);
        id.removeChild(br);
    };
}

function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}


function verifPseudo(champ)
{
   if(champ.value.length < 1)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifCom(champ)
{
   if(champ.value.length < 1)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}