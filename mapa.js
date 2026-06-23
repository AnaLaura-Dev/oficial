const select = document.getElementById("selectModal");
const modal = document.getElementById("meuModal");
const botaoAbrir = document.getElementById("abrirModal");
const botaoFechar = document.getElementById("fecharModal");
 
botaoAbrir.addEventListener("click", () => {
  modal.showModal();
});

botaoFechar.addEventListener("click", () => {
  modal.close();
});

//select
select.addEventListener('click', function() {
    urlDestino = this.value;
    if (urlDestino) {
        modal.classList.add('visivel');
         modal.showModal();
    }
});
