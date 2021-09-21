var tab = new Array();

$('.card').click(function (arg) {
  var check = $(this).toggleClass('is-checked')
  check

  if (check.context.className === "card is-checked") {
    myFunction1($(this).context.title, "false")
  }
  else
    myFunction1($(this).context.title, "true")
});

function myFunction1(args, delet) {

  if (delet === "false") {
    tab.push(args);
  }
  else {
    var index = tab.indexOf(args);
    if (index !== -1) {
      tab.splice(index, 1);
    }
  }
  var ids="";
  for (let index = 0; index < tab.length; index++) {
    
    ids=ids+"id"+(index+1)+"="+tab[index]+"&"
    console.log(ids)
  }
  document.getElementById("suivant").href = 'page1.html?'+ids;
  console.log(document.getElementById("suivant"))

}

