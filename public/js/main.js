function searchFunction(){
    let input = document.getElementsByClassName("search-box")[0];
    let filter = input.value.toUpperCase();
    let card_wrapper = document.getElementsByClassName("card-container")[0];
    let links = card_wrapper.getElementsByClassName("card");
    
    for (let i = 0; i < links.length; i++) {
        let card = links[i].getElementsByClassName("card_title")[0];
        let txtValue = card.textContent || card.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            links[i].style.display = "";
        } else {
            links[i].style.display = "none";
        }
    }
}