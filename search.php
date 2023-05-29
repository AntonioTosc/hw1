
<link rel="stylesheet"  href="style.css">
<?php
if (isset($_GET['pokemon_name'])) {
    $pokemonName = $_GET['pokemon_name'];

    // Effettua la richiesta all'API di PokeAPI
    $url = "https://pokeapi.co/api/v2/pokemon/{$pokemonName}";
    $data = file_get_contents($url);
    $pokemonData = json_decode($data, true);

    // Recupera le informazioni desiderate
    $pokemonName = $pokemonData['name'];
    $pokemonType = $pokemonData['types'][0]['type']['name'];
    $pokemonImage = $pokemonData['sprites']['front_default'];

    // Visualizza le informazioni
    echo "<h2>Informazioni Pokémon</h2>";
    echo "<p><b>Nome:</b> {$pokemonName}</p>";
    echo "<p><b>Tipo:</b> {$pokemonType}</p>";
    echo "<img src='{$pokemonImage}' alt='{$pokemonName}'>";
} else {
    echo "Inserisci il nome o l'ID del Pokémon nella barra di ricerca.";
}
?>