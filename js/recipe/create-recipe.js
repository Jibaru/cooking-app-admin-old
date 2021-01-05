var modalBtns = document.querySelectorAll("[data-target]");

for (let modalBtn of modalBtns) {
  modalBtn.onclick = function (e) {
    let target = modalBtn.dataset.target;
    let modal = document.getElementById(target);
    let span = modal.getElementsByClassName("app-cerrar-modal")[0];

    modal.style.display = "block";

    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    };

    span.onclick = function (e) {
      modal.style.display = "none";
    };
  };
}