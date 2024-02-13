 document.addEventListener('DOMContentLoaded', function() {
        var skillBars = document.querySelectorAll('.skill-progress');
        skillBars.forEach(function(bar) {
            var width = bar.style.width; // Breite des Balkens als Prozentwert
            bar.style.width = '0'; // Setze die Breite zuerst auf 0
            bar.style.transition = 'width 1s ease-in-out'; // Füge eine Transition hinzu
            setTimeout(function() {
                bar.style.width = width; // Setze die Breite auf den ursprünglichen Wert
            }, 100); // Verzögere die Animation um 100 Millisekunden
        });
    });