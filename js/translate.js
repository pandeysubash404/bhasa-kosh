async function translateText() {
  const url = "https://ai-translate.p.rapidapi.com/translates";
  const sourceLanguage = document.getElementById("sourceLanguage").value;
  const targetLanguage = document.getElementById("targetLanguage").value;
  const sourceText = document.getElementById("sourceText").value;

  const options = {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
      "X-RapidAPI-Key": "YOUR-API-KEY", // Replace with your RapidAPI key
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
