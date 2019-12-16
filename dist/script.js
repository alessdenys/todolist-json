function dragstart_handler(ev) {
    // On ajoute l'identifiant de l'élément cible à l'objet de transfert
    ev.dataTransfer.setData("text/plain", ev.target.innerText);
}

document.querySelector('#dropper').addEventListener('dragover', function(e) {
    e.preventDefault(); 
});

document.querySelector('#dropper').addEventListener('drop', function(e) {
    e.preventDefault(); // Cette méthode est toujours nécessaire pour éviter une éventuelle redirection inattendue
    console.log("first drop")
});
