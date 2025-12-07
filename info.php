<?php
// info.php

// Set string variables
$etablissement = "FSSM";
$module = "Développement Web Avancé";
$niveau = "IAP S5";
$responsable = "Ahaytar Mohamed";

// Set number variables
$annee = 2025;
$nombreEtudiants = 45;
$nombreTP = 8;
$dureeTP = 3; // hours

// Notes for calculation
$note1 = 15.5;
$note2 = 17.0;
$note3 = 13.75;
$coefficient = 2;

// Simple calculations
$sommeNotes = $note1 + $note2 + $note3;
$moyenne = $sommeNotes / 3;
$moyenneCoeff = $moyenne * $coefficient;

$heuresTotal = $nombreTP * $dureeTP;
$etudiantsPresents = round($nombreEtudiants * 0.92); // 92% present

// Math operations
$addition = 125 + 275;
$soustraction = 500 - 178;
$multiplication = 15 * 23;
$division = 1000 / 8;
$puissance = pow(2, 10);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations PHP - TP6</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 2rem;
        }
        
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2rem;
            text-align: center;
        }
        
        header h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }
        
        header p {
            font-size: 1.1rem;
            opacity: 0.9;
        }
        
        .content {
            padding: 2rem;
        }
        
        .section {
            margin-bottom: 2.5rem;
        }
        
        .section h2 {
            color: #667eea;
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 3px solid #667eea;
        }
        
        .info-card {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 1.5rem;
            border-radius: 8px;
            margin-bottom: 1rem;
            border-left: 4px solid #667eea;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        
        .info-card:hover {
            transform: translateX(5px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.75rem 0;
            border-bottom: 1px solid rgba(102, 126, 234, 0.1);
        }
        
        .info-row:last-child {
            border-bottom: none;
        }
        
        .info-label {
            font-weight: 600;
            color: #555;
        }
        
        .info-value {
            color: #667eea;
            font-weight: 700;
            font-size: 1.1rem;
        }
        
        .calcul-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-top: 1rem;
        }
        
        .calcul-item {
            background: white;
            padding: 1rem;
            border-radius: 8px;
            text-align: center;
            border: 2px solid #667eea;
            transition: all 0.3s ease;
        }
        
        .calcul-item:hover {
            background: #667eea;
            color: white;
            transform: scale(1.05);
        }
        
        .calcul-operation {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            color: #666;
        }
        
        .calcul-item:hover .calcul-operation {
            color: rgba(255, 255, 255, 0.9);
        }
        
        .calcul-resultat {
            font-size: 1.8rem;
            font-weight: 700;
            color: #667eea;
        }
        
        .calcul-item:hover .calcul-resultat {
            color: white;
        }
        
        .highlight {
            background: linear-gradient(135deg, #ffeaa7 0%, #fdcb6e 100%);
            padding: 1.5rem;
            border-radius: 8px;
            border-left: 4px solid #e17055;
            margin-top: 1rem;
        }
        
        .highlight strong {
            color: #d63031;
            font-size: 1.2rem;
        }
        
        footer {
            background: #f8f9fa;
            padding: 1.5rem;
            text-align: center;
            color: #666;
        }
        
        footer a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }
        
        footer a:hover {
            color: #764ba2;
            text-decoration: underline;
        }
        
        .php-code {
            background: #2d2d2d;
            color: #f8f8f2;
            padding: 1rem;
            border-radius: 8px;
            font-family: 'Courier New', monospace;
            overflow-x: auto;
            margin-top: 1rem;
        }
        
        .php-code span {
            color: #66d9ef;
        }
        
        @media (max-width: 600px) {
            .container {
                margin: 0;
                border-radius: 0;
            }
            
            header h1 {
                font-size: 2rem;
            }
            
            .content {
                padding: 1rem;
            }
            
            .calcul-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>🔷 Informations PHP</h1>
            <p>TP6 - Introduction au PHP</p>
        </header>
        
        <div class="content">
            <!-- Section 1: Informations de l'établissement -->
            <div class="section">
                <h2>📚 Informations de l'Établissement</h2>
                <div class="info-card">
                    <div class="info-row">
                        <span class="info-label">Établissement :</span>
                        <span class="info-value"><?php echo $etablissement; ?></span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Module :</span>
                        <span class="info-value"><?php echo $module; ?></span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Niveau :</span>
                        <span class="info-value"><?php echo $niveau; ?></span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Responsable :</span>
                        <span class="info-value"><?php echo $responsable; ?></span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Année universitaire :</span>
                        <span class="info-value"><?php echo $annee . "/" . ($annee + 1); ?></span>
                    </div>
                </div>
            </div>
            
            <!-- Section 2: Variables numériques -->
            <div class="section">
                <h2>🔢 Variables Numériques</h2>
                <div class="info-card">
                    <div class="info-row">
                        <span class="info-label">Nombre d'étudiants :</span>
                        <span class="info-value"><?php echo $nombreEtudiants; ?> étudiants</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Nombre de TP :</span>
                        <span class="info-value"><?php echo $nombreTP; ?> travaux pratiques</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Durée par TP :</span>
                        <span class="info-value"><?php echo $dureeTP; ?> heures</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Total heures TP :</span>
                        <span class="info-value"><?php echo $heuresTotal; ?> heures</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Présence moyenne :</span>
                        <span class="info-value"><?php echo $etudiantsPresents; ?> étudiants (92%)</span>
                    </div>
                </div>
            </div>
            
            <!-- Section 3: Calculs sur les notes -->
            <div class="section">
                <h2>📊 Calculs sur les Notes</h2>
                <div class="info-card">
                    <div class="info-row">
                        <span class="info-label">Note 1 :</span>
                        <span class="info-value"><?php echo $note1; ?> / 20</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Note 2 :</span>
                        <span class="info-value"><?php echo $note2; ?> / 20</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Note 3 :</span>
                        <span class="info-value"><?php echo $note3; ?> / 20</span>
                    </div>
                </div>
                
                <div class="highlight">
                    <div class="info-row">
                        <span class="info-label">Somme des notes :</span>
                        <strong><?php echo number_format($sommeNotes, 2); ?></strong>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Moyenne :</span>
                        <strong><?php echo number_format($moyenne, 2); ?> / 20</strong>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Moyenne × Coefficient (<?php echo $coefficient; ?>) :</span>
                        <strong><?php echo number_format($moyenneCoeff, 2); ?></strong>
                    </div>
                </div>
            </div>
            
            <!-- Section 4: Opérations mathématiques -->
            <div class="section">
                <h2>➗ Exemples d'Opérations Mathématiques</h2>
                <div class="calcul-grid">
                    <div class="calcul-item">
                        <div class="calcul-operation">125 + 275</div>
                        <div class="calcul-resultat"><?php echo $addition; ?></div>
                    </div>
                    <div class="calcul-item">
                        <div class="calcul-operation">500 − 178</div>
                        <div class="calcul-resultat"><?php echo $soustraction; ?></div>
                    </div>
                    <div class="calcul-item">
                        <div class="calcul-operation">15 × 23</div>
                        <div class="calcul-resultat"><?php echo $multiplication; ?></div>
                    </div>
                    <div class="calcul-item">
                        <div class="calcul-operation">1000 ÷ 8</div>
                        <div class="calcul-resultat"><?php echo number_format($division, 2); ?></div>
                    </div>
                    <div class="calcul-item">
                        <div class="calcul-operation">2<sup>10</sup></div>
                        <div class="calcul-resultat"><?php echo $puissance; ?></div>
                    </div>
                </div>
            </div>
            
        </div>
        
        <footer>
            <p><strong>Ahaytar Mohamed</strong></p>
            <p>HTML + CSS + JavaScript + PHP</p>
            <p><a href="index.html">← Retour à la calculatrice</a></p>
        </footer>
    </div>
</body>
</html>