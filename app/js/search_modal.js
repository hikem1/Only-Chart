const resultModal = new bootstrap.Modal(document.querySelector('#resultModal'), {
    keyboard: false
});
const modalBodyUl = document.querySelector('.modal-body > ul');

modalBodyUl.childElementCount > 1 ? resultModal.show() : resultModal.hide();