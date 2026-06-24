
window.onload = () => {
    const boxes = document.querySelectorAll('.box');
    boxes.forEach(box => {
        const botaoAbrir = box.querySelector('.abrirModal');
        const botaoFechar = box.querySelector('.fecharModal');
        const dialog = box.querySelector('.meuModal');

        if (botaoAbrir && dialog) {
            botaoAbrir.addEventListener('click', () => {
                dialog.showModal();
            });
        }

        if (botaoFechar && dialog) {
            botaoFechar.addEventListener('click', () => {
                dialog.close();
            });
        }
    });
}

function atualizarModal (selecElement) {
    const select = document.getElementById('.selectModal');
     const valorSelecionado = select.value;
     if(select && option){
        dialog.showModal();
     }

}
