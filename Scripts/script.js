function dropDownFunction()
{
  document.getElementById("myDrop").classList.toggle("show");
}

window.onclick = function(event)
{
  if(!event.target.matches('.dropButton'))
  {
    var dropdowns = document.getElementByClassName("theDropContent");

    var i;
    for(i = 0; i < dropdowns.length; i++)
    {
      var openDrop = dropdowns[i];
      if(openDrop.classList.contains('show'))
      {
        openDrop.classList.remove('show');
      }
    }
  }
}
