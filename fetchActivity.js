// var tab = new Array();
// $('.card').click(function (arg) {
//   var check = $(this).toggleClass('is-checked')
//   check

//   if (check.context.className === "card is-checked") {
//     myFunction1($(this).context.title, "false")
//   }
//   else
//     myFunction1($(this).context.title, "true")
// });

// function myFunction1(args, delet) {

//   if (delet === "false") {
//     tab.push(args);
//   }
//   else {
//     var index = tab.indexOf(args);
//     if (index !== -1) {
//       tab.splice(index, 1);
//     }
//   }


// 

    //the website url
    const url= window.location.href
    // encryption
    var newUrl = "url" + encodeURIComponent(url);

    const urlParams = new URLSearchParams(window.location.search);
    const param1 = urlParams.get('id1');
    const param2 = urlParams.get('id2');
    const param3 = urlParams.get('id3');
    const param4 = urlParams.get('id4');
    const param5 = urlParams.get('id5');
    const param6 = urlParams.get('id6');
    const param7 = urlParams.get('id7');
    let tab = new Array(param1,param2,param3,param4,param5,param6,param7);
    for (let index = 0; index < tab.length; index++) {
        if(tab[index]!=null)
            getData(tab[index])
        
    }
    


function getData(arg) {
    fetch('https://apex.oracle.com/pls/apex/teamworker/sn/activiteDataByID?id='+arg)
        .then((response) => {
            return response.json()
        })
        .then((data) => {
            var i = 0;
            var original = document.getElementById('card');
            console.log(data.items)
            function duplicate() {
                while (i <= data.items.length) {
                    var clone = original.cloneNode(true); // "deep" clone 
                    document.getElementById("nom_activite").innerHTML = data.items[i].nom_activite;
                    document.getElementById("description").innerHTML = data.items[i].description;
                    document.getElementById("duree").innerHTML = "Durée : " + "<strong>" + data.items[i].duree + "</strong>";
                    if (data.items[i].prix == 0) {
                        document.getElementById("prix").innerHTML = "Gratuit";
                    }
                    else {
                        document.getElementById("prix").innerHTML = '<span style="font-size: 16px">A partir de &ensp;</span>' + data.items[i].prix * 652 + " CFA";
                    }
                    document.getElementById("localisation").href = data.items[i].localisation;
                    // document.getElementById("phone").onclick ='<div onclick="'+data.items[i].telephone+'">Text</div>' ;
                    // document.getElementById("mail").href = data.items[i].mail;

                    // document.getElementById("limite_age").innerHTML = data.items[i].limite_age;
                    // document.getElementById("site").innerHTML = data.items[i].site;
                    document.getElementById("img").src = data.items[i].photo;


                    // // console.log(data.items[i].nom_activite)
                    // clone.id = "card"; // there can only be one element with an ID
                    original.parentNode.appendChild(clone);
                    i++;
                }


            }
            duplicate()
            console.log(data.items)
        })
        .catch((err) => {
            // Do something for an error here
        })
}

