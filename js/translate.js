async function translateText() {
  const url = "https://ai-translate.p.rapidapi.com/translates";
  const sourceLanguage = document.getElementById("sourceLanguage").value;
  const targetLanguage = document.getElementById("targetLanguage").value;
  const sourceText = document.getElementById("sourceText").value;

  const options = {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
      "X-RapidAPI-Key": "9457ffb866msh3bd4bcdf85ed95fp11aba2jsn1b65a5eef418", // Replace with your RapidAPI key
      "X-RapidAPI-Host": "ai-translate.p.rapidapi.com",
    },
    body: JSON.stringify({
      texts: [sourceText],
      tls: [targetLanguage],
      sl: sourceLanguage,
    }),
  };

  try {
    const response = await fetch(url, options);
    const result = await response.json();

    console.log("Full API Response:", result); // Log the full response for debugging

    if (result[0]) {
      const translatedText = result[0].texts;
      document.getElementById("translationText").value = translatedText;
    } else {
      // Handle the case where the translation data is missing or empty
      console.error("Translation data not found in the response.");
    }
  } catch (error) {
    console.error(error);
  }
}
