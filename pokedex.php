<!DOCTYPE html>
<html>
<head>
  <title>Pokedex</title>
  
</head>
<body>
  <h1>Pokedex</h1>
  <link rel="stylesheet" href="pokedex.css">
  <div class="pokemon-container">
    <?php
    // Funzione per effettuare una richiesta GET alla PokeAPI
    function makeRequest($url) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        return json_decode($response, true);
    }

    // Endpoint per ottenere una lista di tutti i Pokémon
    function getAllPokemons() {
        $url = "https://pokeapi.co/api/v2/pokemon?limit=20";
        return makeRequest($url);
    }

    // Ottieni la lista di tutti i Pokémon
    $pokemons = getAllPokemons();

    // Verifica se ci sono Pokémon nella risposta
    if ($pokemons && isset($pokemons['results'])) {
        foreach ($pokemons['results'] as $pokemon) {
            $pokemonDetails = makeRequest($pokemon['url']);
            if ($pokemonDetails) {
                $pokemonName = $pokemonDetails['name'];
                $pokemonImage = $pokemonDetails['sprites']['front_default'];
                $pokemonTypes = $pokemonDetails['types'];

                echo '<div class="pokemon-card">';
                echo '<div class="pokemon-image"><img src="' . $pokemonImage . '" alt="' . $pokemonName . '"></div>';
                echo '<div class="pokemon-name">' . ucfirst($pokemonName). '</div>';
                echo '<div class="pokemon-types">';
                foreach ($pokemonTypes as $type) {
                $typeName = $type['type']['name'];
                echo '<span class="type-' . $typeName . '">' . ucfirst($typeName) . '</span>';
                }
                echo '</div>';
                echo '</div>';
                }
                }
                } else {
                echo 'Nessun Pokémon trovato.';
                }
                ?>
                
                  </div>
                </body>
                </html>



