// Simulasi data cuaca
const weatherData = {
  "Jakarta": { temperature: 30, condition: "Cerah" },
  "Bandung": { temperature: 22, condition: "Hujan Ringan" },
  "Surabaya": { temperature: 32, condition: "Panas Terik" },
  "Semarang": { temperature: 29, condition: "Mendung" }
};

document.getElementById("checkWeather").addEventListener("click", () => {
  const city = document.getElementById("cityInput").value;
  const resultDiv = document.getElementById("result");

  if (weatherData[city]) {
    const weather = weatherData[city];

    // Menampilkan di halaman
    resultDiv.innerHTML = `
      Cuaca di <b>${city}</b><br>
      Suhu: ${weather.temperature}°C<br>
      Kondisi: ${weather.condition}
    `;

    // Menampilkan di console log
    console.log(`Cuaca di ${city}:`);
    console.log(`Suhu: ${weather.temperature}°C`);
    console.log(`Kondisi: ${weather.condition}`);
  } else {
    resultDiv.innerHTML = "Data cuaca tidak ditemukan!";
    console.log("Data cuaca tidak ditemukan untuk kota:", city);
  }
});
