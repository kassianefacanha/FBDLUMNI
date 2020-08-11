function iniciaModal(modalID){
    const modal = document.getElementById(modalID);
    modal.classList.add("mostrar");
    modal.addEventListener('click',(e) =>{
        if(e.target.id == modalID || e.target.className == 'fechar'){
            modal.classList.remove('mostrar');
        }
    });
}


const post = document.getElementById('postvideo');
post.addEventListener('click', function(){
    iniciaModal('modal-post');
});