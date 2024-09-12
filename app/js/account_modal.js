const accountModal = new bootstrap.Modal(document.querySelector('#signUpModal'), {
    keyboard: false
});
const modalErrorMessage = document.querySelector('#error-message');

if(modalErrorMessage){
    accountModal.show();
}
