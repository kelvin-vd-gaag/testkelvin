<?php
// Een array van arrays met de groepen en hun leden
$groepen = [
    ["Yvan", "Mathieu", "Tim", "Diyar"],
    ["Jairo", "Brandon", "Joran", "Davey"],
    ["Firas", "Zakaria", "Gani", "Lukas"],
    ["Joaquin", "Daan"],
    ["Dylan", "Danillio", "Lisa"],
    ["Mouadh", "Jaimy", "Anas", "Leandre", "Dilshad"]
];

$koppels = []; // array om de koppels op te slaan

foreach ($groepen as $groep) {
    foreach ($groep as $lid) {
        // Selecteer een andere groep
        do {
            $andereGroepIndex = array_rand($groepen);
        } while ($andereGroepIndex === array_search($groep, $groepen) || empty($groepen[$andereGroepIndex]));

        $andereGroep = $groepen[$andereGroepIndex];

        // Selecteer een lid uit de andere groep
        $partnerIndex = array_rand($andereGroep);
        $partner = $andereGroep[$partnerIndex];

        // Verwijder het geselecteerde lid uit de andere groep, zodat ze niet nogmaals geselecteerd worden
        array_splice($groepen[$andereGroepIndex], $partnerIndex, 1);

        // Voeg het koppel toe aan de lijst van koppels
        $koppels[] = [$lid, $partner];
    }
}

var_dump($koppels);
?>
