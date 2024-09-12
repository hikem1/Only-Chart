const resultModal = new bootstrap.Modal(document.querySelector('#resultModal'), {
    keyboard: false
});
const modalBody = document.querySelector('.modal-body');

modalBody.childElementCount > 1 ? resultModal.show() : resultModal.hide();