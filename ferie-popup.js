<script>
// Funzione per mostrare/nascondere la popup
function setupFeriePopup() {
    // Elementi DOM
    const popup = document.getElementById('feriePopup');
    const closeBtn = document.querySelector('.ferie-close');
    
    // Verifica se mostrare la popup
    function shouldShowPopup() {
        const lastClosed = localStorage.getItem('feriePopupLastClosed');
        if (!lastClosed) return true;
        
        const now = new Date();
        const lastClosedDate = new Date(parseInt(lastClosed));
        const daysPassed = Math.floor((now - lastClosedDate) / (1000 * 60 * 60 * 24));
        
        return daysPassed >= 7;
    }

    // Mostra/nascondi popup
    if (shouldShowPopup()) {
        popup.style.display = 'flex';
    }

    // Chiudi popup e salva data
    function closePopup() {
        popup.style.display = 'none';
        localStorage.setItem('feriePopupLastClosed', new Date().getTime());
    }

    // Event listeners
    closeBtn.addEventListener('click', closePopup);
    popup.addEventListener('click', function(e) {
        if (e.target === popup) closePopup();
    });
}

// Avvia quando il DOM è pronto
document.addEventListener('DOMContentLoaded', setupFeriePopup);
</script>

<style>
/* Stile overlay */
.ferie-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.7);
    z-index: 9999;
    justify-content: center;
    align-items: center;
}

/* Stile popup */
.ferie-popup {
    background: white;
    padding: 25px;
    border-radius: 8px;
    max-width: 500px;
    width: 90%;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    position: relative;
    animation: fadeIn 0.3s;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Pulsante chiusura */
.ferie-close {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 24px;
    cursor: pointer;
    color: #888;
    transition: color 0.2s;
}
.ferie-close:hover { color: #333; }

/* Contenuto testuale */
.ferie-popup h2 {
    color: #d9534f;
    margin-top: 0;
    margin-bottom: 15px;
    font-size: 1.4em;
}

.ferie-popup p {
    margin: 10px 0;
    line-height: 1.5;
}

.firma {
    font-weight: bold;
    margin-top: 20px;
    font-style: italic;
}
</style>

<!-- HTML Popup -->
<div id="feriePopup" class="ferie-overlay">
    <div class="ferie-popup">
        <span class="ferie-close">&times;</span>
        <h2>Chiusura per ferie – GALLO ALDO S.R.L.</h2>
        <p>Gentile cliente,</p>
        <p>La informiamo che la nostra azienda resterà chiusa per ferie dal 7 al 26 agosto compresi.</p>
        <p>Tutte le richieste pervenute durante questo periodo verranno prese in carico a partire da mercoledì 27 agosto, con la ripresa regolare delle attività.</p>
        <p>Grazie e buone vacanze da parte di tutto il team.</p>
        <div class="firma">GALLO ALDO S.R.L.</div>
    </div>
</div>