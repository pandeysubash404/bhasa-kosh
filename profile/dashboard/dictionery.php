<?php
include("header.php");

if (isset($_GET['word'])) {
    $word = $_GET['word'];

    // Define the API URL
    $api_url = "https://api.dictionaryapi.dev/api/v2/entries/en/$word";

    // Initialize cURL session
    $curl = curl_init();

    // Set cURL options
    curl_setopt_array($curl, [
        CURLOPT_URL => $api_url,
        CURLOPT_RETURNTRANSFER => true,
    ]);

    // Execute the cURL session and get the response
    $response = curl_exec($curl);

    // Check for cURL errors
    if (curl_errno($curl)) {
        echo 'Error: ' . curl_error($curl);
    } else {
        // Decode the JSON response
        $data = json_decode($response, true);

        // Check if data is available
        if (!empty($data[0])) {
            $wordData = $data[0];
        } else {
            $wordData = null;
        }
    }

    // Close the cURL session
    curl_close($curl);
}
?>

<div class="container mt-5">
    <h1 class="text-center">Dictionary</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="word" placeholder="Enter a word" >
                <div class="input-group-append">
                    <button class="btn btn-primary" onclick="lookupWord()" >Lookup</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <?php if ($wordData) : ?>
                        <h5 class="card-title" id="wordTitle"><?php echo $wordData['word']; ?></h5>
                        <p class="card-text" id="wordPhonetic">
                            Phonetic: <?php echo isset($wordData['phonetic']) ? $wordData['phonetic'] : "N/A"; ?>
                        </p>
                        <h6 class="card-subtitle mb-2 text-muted">Definitions:</h6>
                        <ul id="definitions">
                            <?php foreach ($wordData['meanings'] as $meaning) : ?>
                                <li>
                                    <strong><?php echo $meaning['partOfSpeech']; ?></strong>: <?php echo isset($meaning['definitions'][0]['definition']) ? $meaning['definitions'][0]['definition'] : "N/A"; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php if (!empty($wordData['phonetics'])) : ?>
                            <h6 class="card-subtitle mb-2 mt-4 text-muted">Audio Pronunciation:</h6>
                            <div id="audio">
                                <?php foreach ($wordData['phonetics'] as $phonetic) : ?>
                                    <?php if (!empty($phonetic['audio'])) : ?>
                                        <audio controls>
                                            <source src="<?php echo $phonetic['audio']; ?>" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <h6 class="card-subtitle mb-2 mt-4 text-muted">Synonyms:</h6>
                        <p id="synonyms">
                            <?php echo !empty($wordData['synonyms']) ? implode(', ', $wordData['synonyms']) : "N/A"; ?>
                        </p>
                        <h6 class="card-subtitle mb-2 mt-4 text-muted">Antonyms:</h6>
                        <p id="antonyms">
                            <?php echo !empty($wordData['antonyms']) ? implode(', ', $wordData['antonyms']) : "N/A"; ?>
                        </p>
                    <?php else : ?>
                        <h5 class="card-title" id="wordTitle">Word not found</h5>
                        <p class="card-text" id="wordPhonetic"></p>
                        <ul id="definitions"></ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    function lookupWord() {
        const word = document.getElementById("word").value;
        const url = `dictionery.php?word=${word}`;

        fetch(url)
            .then(function (response) {
                return response.json();
            })
            .then(function (data) {
                if (data[0] && data[0].word) {
                    document.getElementById("wordTitle").textContent = data[0].word;
                    document.getElementById("wordPhonetic").textContent = `Phonetic: ${data[0].phonetic || "N/A"}`;
                    
                    const definitionsList = document.getElementById("definitions");
                    definitionsList.innerHTML = "";

                    data[0].meanings.forEach((meaning, index) => {
                        const listItem = document.createElement("li");
                        listItem.innerHTML = `<strong>${meaning.partOfSpeech}</strong>: ${meaning.definitions[0].definition || "N/A"}`;
                        definitionsList.appendChild(listItem);
                    });

                    const audioElement = document.getElementById("audio");
                    audioElement.innerHTML = "";
                    if (data[0].phonetics) {
                        data[0].phonetics.forEach((phonetic, index) => {
                            if (phonetic.audio) {
                                const audio = document.createElement("audio");
                                audio.setAttribute("controls", true);
                                const source = document.createElement("source");
                                source.setAttribute("src", phonetic.audio);
                                source.setAttribute("type", "audio/mpeg");
                                audio.appendChild(source);
                                audioElement.appendChild(audio);
                            }
                        });
                    }

                    document.getElementById("synonyms").textContent = data[0].synonyms.join(', ') || "N/A";
                    document.getElementById("antonyms").textContent = data[0].antonyms.join(', ') || "N/A";
                } else {
                    document.getElementById("wordTitle").textContent = "Word not found";
                    document.getElementById("wordPhonetic").textContent = "";
                    document.getElementById("definitions").innerHTML = "";
                    document.getElementById("audio").innerHTML = "";
                    document.getElementById("synonyms").textContent = "N/A";
                    document.getElementById("antonyms").textContent = "N/A";
                }
            })
            .catch(function (error) {
                console.error(error);
            });
    }
</script>
</body>
</html>
