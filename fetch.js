
fetch('https://apex.oracle.com/pls/apex/teamworker/sn/hotelData')
    .then((response) => {
        return response.json()
    })
    .then((data) => {
        var i = 0;
        var original = document.getElementById('card');
        var nom_hotel = document.getElementById("nom_hotel").innerHTML;

        function duplicate() {
            while (i <= data.items.length) {
                if (nom_hotel === " ")
                    original.style.visibility = 'hidden';

                var clone = original.cloneNode(true); // "deep" clone 
                console.log(data.items)
                console.log(data.items[i].url_site)
                document.getElementById("nom_hotel").innerHTML = data.items[i].nom_hotel;
                document.getElementById("rapport").innerHTML =data.items[i].rapport;
                document.getElementById("prix").innerHTML = data.items[i].prix+" XOF";
                document.getElementById("infos_supplementaire").innerHTML = data.items[i].infos_supplementaire;
                document.getElementById("site").innerHTML = data.items[i].site;
                document.getElementById("img").src = data.items[i].image;
                document.getElementById("btn").href = data.items[i].url_site;


                // console.log(data.items[i].nom_hotel)
                clone.id = "card"; // there can only be one element with an ID
                original.parentNode.appendChild(clone);
                i++;
            }

        }
        duplicate()
        console.log("data length" + i)
    })
    .catch((err) => {
        // Do something for an error here
    })