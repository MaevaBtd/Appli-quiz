var nyan = {
    init: function() {
        console.log('nyan ready');
        nyan.element.addEventListener('mouseover', nyan.handleOver);
        nyan.element.addEventListener('mouseleave', nyan.handleLeave);    
    },

    element: document.querySelector('.nyan'),
    
    
        handleOver: function(event) {
        console.log('Over ok');
        var audio = document.createElement('audio');
        var source = document.createElement('source');
        source.setAttribute('src', 'https://ia801308.us.archive.org/0/items/NyanCatoriginal/Nyan%20Cat%20[original].mp3');
        audio.appendChild(source);
        nyan.element.appendChild(audio);
        audio.play();
    },

    handleLeave: function(event) {
        console.log('Leave ok');

        while (nyan.element.firstChild) {
             nyan.element.removeChild(nyan.element.firstChild);
        }
    },

    handleClickOnNyan: function(event){
        nyan.element.addEventListener("click", handleLeave);
    }
}

document.addEventListener('DOMContentLoaded', nyan.init)



// fabrice : je veux qu'en cliquant sur le nyan cat ça t'emmène autre part (genre un vieux gif bien dégueulasse)
// NICE !
// Mais je cherche comment faire pour mettre une URL sur l'event 
// Parce qu'on est tenté de cliquer sur le Nyan bordel de cul