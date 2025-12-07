

let historique = [];

const form = document.getElementById('calculatorForm');
const nombreA = document.getElementById('nombreA');
const nombreB = document.getElementById('nombreB');
const operation = document.getElementById('operation');
const errorMessage = document.getElementById('errorMessage');
const resultMessage = document.getElementById('resultMessage');
const historyContainer = document.getElementById('historyContainer');

// Function to show error message
function afficherErreur(message) {
    errorMessage.textContent = '⚠️ ' + message;
    errorMessage.classList.add('show');
    resultMessage.classList.remove('show');
    
    setTimeout(() => {
        errorMessage.classList.remove('show');
    }, 4000);
}

// Function to show result
function afficherResultat(message) {
    resultMessage.textContent = '✓ ' + message;
    resultMessage.classList.add('show');
    errorMessage.classList.remove('show');
    
    setTimeout(() => {
        resultMessage.classList.remove('show');
    }, 3000);
}

// Function to check input
function validerDonnees(a, b, op) {
    // Check if fields are empty
    if (nombreA.value.trim() === '' || nombreB.value.trim() === '') {
        afficherErreur('Veuillez remplir tous les champs numériques.');
        return false;
    }
    
    // Check if operation is selected
    if (op === '') {
        afficherErreur('Veuillez sélectionner une opération.');
        return false;
    }
    
    // Check if numbers are valid
    if (isNaN(a) || isNaN(b)) {
        afficherErreur('Veuillez entrer des nombres valides.');
        return false;
    }
    
    // No divide by zero
    if (op === '/' && b === 0) {
        afficherErreur('Division par zéro impossible !');
        return false;
    }
    
    return true;
}

// Function to do the calculation
function calculer(a, b, op) {
    let resultat;
    
    switch(op) {
        case '+':
            resultat = a + b;
            break;
        case '-':
            resultat = a - b;
            break;
        case '*':
            resultat = a * b;
            break;
        case '/':
            resultat = a / b;
            break;
        default:
            return null;
    }
    
    return resultat;
}

// Function to get operation symbol
function getOperationSymbol(op) {
    const symbols = {
        '+': '+',
        '-': '−',
        '*': '×',
        '/': '÷'
    };
    return symbols[op] || op;
}

// Function to update history in DOM
function mettreAJourHistorique() {
    if (historique.length === 0) {
        historyContainer.innerHTML = '<p class="empty-history">Aucune opération effectuée pour le moment.</p>';
        return;
    }
    
    historyContainer.innerHTML = '';
    
    // Show operations newest first
    for (let i = historique.length - 1; i >= 0; i--) {
        const item = historique[i];
        const div = document.createElement('div');
        div.className = 'history-item';
        
        div.innerHTML = `
            <div class="operation">${item.a} ${item.symbol} ${item.b}</div>
            <div class="result">= ${item.resultat}</div>
            <div class="timestamp">${item.timestamp}</div>
        `;
        
        historyContainer.appendChild(div);
    }
}

// Function to get current time
function getTimestamp() {
    const now = new Date();
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');
    const seconds = String(now.getSeconds()).padStart(2, '0');
    return `${hours}:${minutes}:${seconds}`;
}

// Form submit handler
form.addEventListener('submit', function(e) {
    e.preventDefault(); // Stop page reload
    
    // Get values
    const a = parseFloat(nombreA.value);
    const b = parseFloat(nombreB.value);
    const op = operation.value;
    
    // Check input
    if (!validerDonnees(a, b, op)) {
        return;
    }
    
    // Do calculation
    const resultat = calculer(a, b, op);
    
    // Round result to 4 decimals
    const resultatFormate = Math.round(resultat * 10000) / 10000;
    
    // Add to history
    historique.push({
        a: a,
        b: b,
        operation: op,
        symbol: getOperationSymbol(op),
        resultat: resultatFormate,
        timestamp: getTimestamp()
    });
    
    // Show result
    afficherResultat(`Résultat : ${a} ${getOperationSymbol(op)} ${b} = ${resultatFormate}`);
    
    // Update history display
    mettreAJourHistorique();
    
    // Reset form
    form.reset();
});

// Clear error when user types
nombreA.addEventListener('input', () => {
    errorMessage.classList.remove('show');
});

nombreB.addEventListener('input', () => {
    errorMessage.classList.remove('show');
});

operation.addEventListener('change', () => {
    errorMessage.classList.remove('show');
});