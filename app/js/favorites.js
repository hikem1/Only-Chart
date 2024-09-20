const stars = document.querySelectorAll('.fa-star');

stars.forEach((element)=> {
    element.addEventListener('click', ()=>{
        if(element.classList.contains('fa-regular')){
            element.classList.remove('fa-regular')
            element.classList.add('fa-solid');
            addFavorite(element)
        }else{
            element.classList.remove('fa-solid')
            element.classList.add('fa-regular');
            removeFavorite(element)
        }
    })    
})

function addFavorite(starEl){

    let favorites = JSON.parse(localStorage.getItem("favorites"))
    let favorite = {
        "id": starEl.parentElement.getAttribute('zb-id'),
        "name": starEl.parentElement.getAttribute('zb-name'),
        "code": starEl.parentElement.getAttribute('zb-code'),
        "place": starEl.parentElement.getAttribute('zb-place'),
        "path": starEl.parentElement.getAttribute('zb-path')
    }

    if(favorites !== null){
        favorites.push(favorite)
    }else{
        favorites = [favorite]
    }

    localStorage.setItem("favorites", JSON.stringify(favorites))
}

function removeFavorite(starEl){

    const favorites = JSON.parse(localStorage.getItem("favorites"))
    const favId = starEl.parentElement.getAttribute('zb-id')

    let newFavorites = favorites.filter(fav => parseInt(fav.id) !== parseInt(favId))

    localStorage.setItem("favorites", JSON.stringify(newFavorites))

}

function setFavorites(){

    const favorites = JSON.parse(localStorage.getItem("favorites"))

    stars.forEach((element)=> {
        let id = element.parentElement.getAttribute('zb-id')
        favorites.forEach((fav)=> {
            if(parseInt(id) === parseInt(fav.id)){
                element.classList.remove('fa-regular')
                element.classList.add('fa-solid');
            }
        })
    })

}

setFavorites()