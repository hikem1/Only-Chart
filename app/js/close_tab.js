const closeTabIcons = document.querySelectorAll('.fa-xmark');

async function sendClosedInstrument($id){
    const url = "./app/api/index.php?removeInstrument=";
    try {
        const response = await fetch(url + $id);
        if (!response.ok) {
          throw new Error(`Response status: ${response.status}`);
        }
    
        return response.status;
      } catch (error) {
        console.error(error.message);
      }
}

closeTabIcons.forEach((element)=> {
    element.addEventListener('click', ()=> {
        
        const zbId = element.parentElement.getAttribute("zb-id")
        const btnTabId = element.parentElement.id
        const tabId = element.parentElement.getAttribute("data-bs-target")
        const tabEl = document.querySelector(tabId)
        const btnTabEl = document.querySelector("#" + btnTabId)
        
        sendClosedInstrument(zbId)
        .then(status => {
            if (status === 200) {
                tabEl.remove();
                btnTabEl.remove();
            }
        })
    })
})