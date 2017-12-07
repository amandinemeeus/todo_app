
//REQUETES AJAX//

//créer un objet
var xhr = new XMLHttpRequest ();

//créer une fonction de rappel callback
xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200){
        //code à exécuter une fois la réponse récupérée
        // if(xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200){
    }
};

//ouvrir un erequête AJAX
xhr.open ('post', "./core/request.php", true);
xhr.setRequestHeader("content-Type", "application/x-www.form-urlencoded");
//envoyer une requête AJAX
xhr.send('');



// let url = "./core/request.php"
//
// $(document).ready(function(){
//
//     $.ajax({
//         type: 'POST',
//         url: url,
//         data: {},
//         dataType: 'json',
//         cache: false,
//         success: function(result){
//             console.log(result);
//         },
//     });
//
//     $.post(url, {}, function(data, textStatus){
//         console.log(data, textStatus);
//         console.log(typeof(data));
//         let d = JSON.parse(data)
//         console.log (d);
//         console.log(typeof(d));
//         for(let i in d){
//             console.log(d[i]);
//         }
//     })
//
// })
