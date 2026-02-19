<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Multi-Step Form Condizionale</title>
    <style>
        .step { display: none; }
        .step.active { display: block; }
        .progress-bar {
            width: 100%;
            background-color: #f3f3f3;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        .progress-bar-fill {
            height: 20px;
            background-color: #4caf50;
            width: 0%;
            border-radius: 4px;
            transition: width 0.3s;
        }
    </style>
    <script>
        function showStep(step) {
            var steps = document.getElementsByClassName('step');
            for (var i = 0; i < steps.length; i++) {
                steps[i].classList.remove('active');
            }
            steps[step].classList.add('active');
            updateProgressBar(step);
        }

        function nextStep(currentStep) {
            var uso = document.getElementById('uso').value;
            var stepToShow = currentStep + 1;
            if (currentStep === 1) {
                if (uso === 'interno') {
                    stepToShow = 3; // Salta a step 3 per "interno"
                } else if (uso === 'esterno') {
                    stepToShow = 2; // Continua con step 2 per "esterno"
                }
            }
            if (currentStep === 2 && uso === 'esterno') {
                stepToShow = 3; // Step per supporto per "esterno"
            }
            if (currentStep === 3 || (currentStep === 2 && uso === 'interno')) {
                reviewInputs();
            }
            showStep(stepToShow);
        }

        function prevStep(currentStep) {
            var uso = document.getElementById('uso').value;
            var stepToShow = currentStep - 1;
            if (currentStep === 3) {
                if (uso === 'interno') {
                    stepToShow = 1; // Torna a step 1 per "interno"
                }
            } else if (currentStep === 4) {
                if (uso === 'esterno') {
                    stepToShow = 2; // Torna a step 2 per "esterno"
                }
            }
            showStep(stepToShow);
        }

        function reviewInputs() {
            document.getElementById('reviewName').innerText = document.getElementById('name').value;
            document.getElementById('reviewEmail').innerText = document.getElementById('email').value;
            document.getElementById('reviewUso').innerText = document.getElementById('uso').value;
            var sizeElement = document.getElementById('size');
            if (sizeElement) {
                document.getElementById('reviewSize').innerText = sizeElement.value;
            }
            var supportElement = document.getElementById('supporto');
            if (supportElement) {
                document.getElementById('reviewSupporto').innerText = supportElement.value;
            }
            var esternoSupportElement = document.getElementById('esternoSupporto');
            if (esternoSupportElement) {
                document.getElementById('reviewEsternoSupporto').innerText = esternoSupportElement.value;
            }
        }

        function updateProgressBar(step) {
            var totalSteps = document.getElementsByClassName('step').length;
            var progress = ((step + 1) / totalSteps) * 100;
            document.getElementById('progressBarFill').style.width = progress + '%';
        }

        window.onload = function() {
            showStep(0);
        }
    </script>
</head>
<body>
    <p>Ci occupiamo da oltre vent'anni di tutto ciò che ruota attorno al grande mondo delle bandiere. 
    <br>Abbiamo deciso di creare questo form per permettere a chiunque di richiedere un preventivo rispetto ad un articolo specifico.<br>
    Sei alla ricerca di qualcosa di specifico? Facci comprendere i tuoi bisogni, ti daremo indicazioni precise.<br>
    </p>

    <!-- Barra di progresso -->
    <div class="progress-bar">
        <div id="progressBarFill" class="progress-bar-fill"></div>
    </div>

    <form action="sendit.php" method="post" id="multiStepForm">
        <!-- Step 1 -->
        <div class="step active">
            <b>Conferma nome, cognome ed e-mail, grazie</b><br>
            <label for="name">Nome e Cognome:</label>
            <input type="text" id="name" name="name" required><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
            <button type="button" onclick="nextStep(0)">Avanti</button>
        </div>

        <!-- Step 2 -->
        <div class="step">
            <b>Hai bisogno di accessori per bandiere per quale tipologia di impiego?</b><br>
            <select name="uso" id="uso" required>
                <option value="esterno">Esterno</option>
                <option value="interno">Interno</option>
            </select><br>
            <button type="button" onclick="prevStep(1)">Indietro</button>
            <button type="button" onclick="nextStep(1)">Avanti</button>
        </div>

        <!-- Step 3 (solo per esterno) -->
        <div class="step">
            <b>Disponi già delle bandiere, che misure hanno?</b><br>
            <select name="size" id="size" required>
                <option value="nada">Non dispongo ancora delle bandiere</option>
                <option value="70x100">70x100</option>
                <option value="100x150">100x150</option>
                <option value="150x225">150x225</option>
                <option value="200x300">200x300</option>
                <option value="300x450">300x450</option>
            </select><br>
            <button type="button" onclick="prevStep(2)">Indietro</button>
            <button type="button" onclick="nextStep(2)">Avanti</button>
        </div>

        <!-- Step 4 (solo per esterno) -->
        <div class="step">
            <b>Hai bisogno di un supporto a parete o di un supporto a terra?</b><br>
            <select name="esternoSupporto" id="esternoSupporto" required>
                <option value="parete">Supporto a parete</option>
                <option value="terra">Supporto a terra</option>
            </select><br>
            <button type="button" onclick="prevStep(3)">Indietro</button>
            <button type="button" onclick="nextStep(3)">Avanti</button>
        </div>

        <!-- Step 5 (solo per interno) -->
        <div class="step">
            <b>Che tipo di supporto desideri per l'interno?</b><br>
            <select name="supporto" id="supporto" required>
                <option value="bastone">Bastone</option>
                <option value="base">Base</option>
                <option value="gancio">Gancio</option>
            </select><br>
            <button type="button" onclick="prevStep(4)">Indietro</button>
            <button type="button" onclick="nextStep(4)">Avanti</button>
        </div>

        <!-- Step 6 -->
        <div class="step">
            <h2>Rivedi le informazioni</h2>
            <p>Per favore, rivedi le tue informazioni prima di inviare.</p>
            <p><b>Nome e Cognome:</b> <span id="reviewName"></span></p>
            <p><b>Email:</b> <span id="reviewEmail"></span></p>
            <p><b>Tipo di impiego:</b> <span id="reviewUso"></span></p>
            <p><b>Misure delle bandiere:</b> <span id="reviewSize"></span></p>
            <p><b>Tipo di supporto:</b> <span id="reviewSupporto"></span></p>
            <p><b>Tipo di supporto (esterno):</b> <span id="reviewEsternoSupporto"></span></p>
            <button type="button" onclick="prevStep(5)">Indietro</button>
            <button type="submit">Invia</button>
        </div>
    </form>
</body>
</html>