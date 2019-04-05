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
    }
}

document.addEventListener('DOMContentLoaded', nyan.init)