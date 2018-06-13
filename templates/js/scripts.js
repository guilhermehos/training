
function verificaChecks() {
    var check = document.getElementsByName("itemCheck"); 

    for (var i=0;i<check.length;i++){ 
        if (check[i].checked == true){ 
            

        }  else {
           alert("Você deve aceitar as regras para continuar.");
        }
    }
}