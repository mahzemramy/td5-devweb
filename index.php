<?php
// ============================================
// EXERCICE 2 : Fonction liste non ordonnée
// ============================================
function construireListeHello() {
    $liste = "<ul>\n";
    for ($i = 1; $i <= 20; $i++) {
        $liste .= "    <li>hello numéro $i</li>\n";
    }
    $liste .= "</ul>\n";
    return $liste;
}

// ============================================
// EXERCICE 4 : Liste des chiffres hexadécimaux
// ============================================
function construireListeHexa() {
    $liste = "<ul class='liste-horizontale'>\n";
    for ($i = 0; $i <= 15; $i++) {
        $hexa = dechex($i);
        $liste .= "    <li>$hexa</li>\n";
    }
    $liste .= "</ul>\n";
    return $liste;
}

// ============================================
// EXERCICE 5 : Tableau des conversions de bases
// ============================================
function construireTableauConversions() {
    $tableau = "<table>\n";
    $tableau .= "    <caption>Conversions des nombres de 0 à 17 en différentes bases</caption>\n";
    $tableau .= "    <thead>\n";
    $tableau .= "        <tr>\n";
    $tableau .= "            <th>Binaire</th>\n";
    $tableau .= "            <th>Octal</th>\n";
    $tableau .= "            <th>Décimal</th>\n";
    $tableau .= "            <th>Hexadécimal</th>\n";
    $tableau .= "        </tr>\n";
    $tableau .= "    </thead>\n";
    $tableau .= "    <tbody>\n";
    
    for ($i = 0; $i <= 17; $i++) {
        $tableau .= "        <tr>\n";
        $tableau .= "            <td>" . sprintf("%08b", $i) . "</td>\n";
        $tableau .= "            <td>" . sprintf("%02o", $i) . "</td>\n";
        $tableau .= "            <td>" . sprintf("%02d", $i) . "</td>\n";
        $tableau .= "            <td>" . sprintf("%02X", $i) . "</td>\n";
        $tableau .= "        </tr>\n";
    }
    
    $tableau .= "    </tbody>\n";
    $tableau .= "</table>\n";
    return $tableau;
}

// ============================================
// EXERCICE 3 : Conversions ASCII
// ============================================
function afficherConversionsASCII() {
    $resultat = "<div class='ascii-conversions'>\n";
    $hex1 = "0x41";
    $dec1 = hexdec("41");
    $char1 = chr($dec1);
    $resultat .= "<p><strong>$hex1</strong> = $dec1 = '$char1'</p>\n";
    
    $charA = 'A';
    $decA = ord($charA);
    $hexA = dechex($decA);
    $resultat .= "<p><strong>'$charA'</strong> = $decA = 0x" . strtoupper($hexA) . "</p>\n";
    
    $hex2 = "0x2B";
    $dec2 = hexdec("2B");
    $char2 = chr($dec2);
    $resultat .= "<p><strong>$hex2</strong> = $dec2 = '$char2'</p>\n";
    
    $charPlus = '+';
    $decPlus = ord($charPlus);
    $hexPlus = dechex($decPlus);
    $resultat .= "<p><strong>'$charPlus'</strong> = $decPlus = 0x" . strtoupper($hexPlus) . "</p>\n";
    $resultat .= "</div>\n";
    return $resultat;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="TD5 - Développement Web : pages dynamiques avec PHP">
    <meta name="author" content="VOTRE NOM">
    <title>TD5 - Pages Dynamiques PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body { font-family: 'Segoe UI', sans-serif; line-height: 1.6; max-width: 1200px; margin: 0 auto; padding: 20px; background: #f5f5f5; }
        header { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 2rem; border-radius: 10px; margin-bottom: 2rem; }
        h1 { margin: 0; }
        .time-display { font-size: 2rem; font-weight: bold; margin: 1rem 0; }
        nav ul { list-style: none; padding: 0; display: flex; gap: 1rem; flex-wrap: wrap; }
        nav ul li a { color: white; text-decoration: none; padding: 0.5rem 1rem; border: 2px solid white; border-radius: 5px; }
        section { background: white; padding: 1.5rem; border-radius: 8px; margin-bottom: 2rem; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        h2 { color: #764ba2; border-bottom: 3px solid #667eea; padding-bottom: 0.5rem; }
        .liste-horizontale { list-style: none; padding: 0; display: flex; flex-wrap: wrap; gap: 10px; }
        .liste-horizontale li { background: #667eea; color: white; padding: 10px 15px; border-radius: 5px; }
        table { width: 100%; border-collapse: collapse; margin: 1rem 0; }
        th { background: #667eea; color: white; padding: 12px; }
        td { padding: 10px; border: 1px solid #ddd; }
        tr:nth-child(even) { background-color: #f8f9fa; }
        .ascii-conversions { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; }
        .ascii-conversions p { background: #e9ecef; padding: 1rem; border-radius: 5px; font-family: monospace; }
        footer { text-align: center; padding: 1.5rem; background: #333; color: white; border-radius: 8px; }
    </style>
</head>
<body>
    <header>
        <h1>TD5 : Pages Dynamiques avec PHP</h1>
        <div class="time-display"><?php echo date('d/m/Y H:i:s'); ?></div>
        <nav>
            <ul>
                <li><a href="#exercice1">Ex1</a></li>
                <li><a href="#exercice2">Ex2</a></li>
                <li><a href="#exercice3">Ex3</a></li>
                <li><a href="#exercice4">Ex4</a></li>
                <li><a href="#exercice5">Ex5</a></li>
                <li><a href="#exercice6">Ex6</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="exercice1">
            <h2>Exercice 1 : Heure du serveur</h2>
            <p>Heure : <strong><?php echo date('H:i:s'); ?></strong></p>
            <p>Date : <strong><?php echo date('l jS F Y'); ?></strong></p>
        </section>

        <section id="exercice2">
            <h2>Exercice 2 : Liste des messages</h2>
            <?php echo construireListeHello(); ?>
        </section>

        <section id="exercice3">
            <h2>Exercice 3 : Conversions ASCII</h2>
            <?php echo afficherConversionsASCII(); ?>
        </section>

        <section id="exercice4">
            <h2>Exercice 4 : Chiffres hexadécimaux</h2>
            <?php echo construireListeHexa(); ?>
        </section>

        <section id="exercice5">
            <h2>Exercice 5 : Tableau des conversions</h2>
            <?php echo construireTableauConversions(); ?>
        </section>

        <section id="exercice6">
            <h2>Exercice 6 : CSS</h2>
            <p>Styles : externe (style.css), interne (cette page), local : <span style="color: #f39c12; font-weight: bold;">exemple</span></p>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> - TD5 Développement Web</p>
    </footer>
</body>
</html>
