var i=0,text;
text = "OMAYMA HAJJAMI,"

function typing() {
  if(i<text.length){
    document.getElementById("text").innerHTML += text.charAt(i);
    i++;
    setTimeout(typing,160);
  }
}
typing();