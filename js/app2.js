
if(navigator.serviceWorker){
   navigator.serviceWorker.register('sw.js'); 
}


function ingresaIncubadoraIdeas(){
    
    let marcoSaludo = document.getElementById('marcoSaludoId');
    document.getElementById('marcoMenuInicioId').style.display = 'none';
    document.getElementById('bancoIdeas').style.display = 'flex';
    document.getElementById('marcoIncubadoraIdeasId').style.display = 'flex';
    
    marcoSaludo.innerHTML = '';
    marcoSaludo.innerHTML = '<h1>INCUBADORA DE IDEAS</h1>';
    
}