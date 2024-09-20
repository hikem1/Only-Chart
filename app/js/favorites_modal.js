const favoritesModalBody = document.querySelector("#favorites-list")
const favoritesBtn = document.querySelector('[data-bs-target="#favoriteModal"]')

favoritesBtn.addEventListener('click', ()=>{
    
    favoritesModalBody.replaceChildren();

    let favorites = JSON.parse(localStorage.getItem("favorites"));
    favorites.forEach(fav => {
        
        let li = document.createElement("li");
        let form = document.createElement("form");
        let button = document.createElement("button");
        let pCode = document.createElement("p");
        let pPlace = document.createElement("p");
        let inputId = document.createElement("input");
        let inputName = document.createElement("input");
        let inputCode = document.createElement("input");
        let inputPlace = document.createElement("input");
        let inputPath = document.createElement("input");
        
        form.setAttribute("method", "POST");
        form.setAttribute("action", "./app/api/index.php");
        form.className = "d-flex border-bottom align-items-center";
    
        button.setAttribute("type", "submit")
        button.className = "me-4 w-25 text-nowrap overflow-hidden instrument-name btn btn-link text-primary text-start text-decoration-none";
        button.textContent = fav.name;
    
        pCode.className = "d-flex w-25 m-0";
        pCode.textContent = fav.code;
        
        pPlace.className = "d-flex m-0";
        pPlace.textContent = fav.place;
        
        inputId.setAttribute("type", "hidden");
        inputId.setAttribute("name", "fav-id");
        inputId.setAttribute("value", fav.id);

        inputName.setAttribute("type", "hidden");
        inputName.setAttribute("name", "name");
        inputName.setAttribute("value", fav.name);

        inputCode.setAttribute("type", "hidden");
        inputCode.setAttribute("name", "code");
        inputCode.setAttribute("value", fav.code);

        inputPlace.setAttribute("type", "hidden");
        inputPlace.setAttribute("name", "place");
        inputPlace.setAttribute("value", fav.place);

        inputPath.setAttribute("type", "hidden");
        inputPath.setAttribute("name", "path");
        inputPath.setAttribute("value", fav.path);
        
        form.append(button);
        form.append(pCode);
        form.append(pPlace);
        form.append(inputId);
        form.append(inputName);
        form.append(inputCode);
        form.append(inputPlace);
        form.append(inputPath);
        li.append(form);
        favoritesModalBody.append(li);
    });
})