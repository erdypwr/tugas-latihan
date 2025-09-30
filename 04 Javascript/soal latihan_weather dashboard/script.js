// Simulasi data cuaca yang lebih kaya dengan ikon
const weatherData = {
  "Jakarta": { temperature: 30, condition: "Cerah", icon: "☀️" },
  "Bandung": { temperature: 22, condition: "Hujan Ringan", icon: "🌦️" },
  "Surabaya": { temperature: 32, condition: "Panas Terik", icon: "🔥" },
  "Semarang": { temperature: 29, condition: "Mendung", icon: "☁️" },
  "Yogyakarta": { temperature: 28, condition: "Berawan", icon: "🌥️" },
  "Medan": { temperature: 31, condition: "Badai Petir", icon: "⛈️" },
  "Makassar": { temperature: 33, condition: "Cerah Berawan", icon: "🌤️" },
  "Denpasar": { temperature: 29, condition: "Cerah", icon: "☀️" }
};

// Mengambil elemen dari DOM
const cityInput = document.getElementById("cityInput");
const checkWeatherBtn = document.getElementById("checkWeather");
const resultDiv = document.getElementById("result");

/**
 * Fungsi untuk memformat input kota (huruf pertama kapital).
 * @param {string} input - Nama kota dari input pengguna.
 * @returns {string} Nama kota yang sudah diformat.
 */
function formatCityName(input) {
  if (!input) return "";
  return input.charAt(0).toUpperCase() + input.slice(1).toLowerCase();
}

/**
 * Fungsi utama untuk memeriksa cuaca.
 */
function checkWeather() {
  const rawCity = cityInput.value.trim();

  if (!rawCity) {
    resultDiv.innerHTML = "Nama kota tidak boleh kosong!";
    resultDiv.style.color = "red";
    return;
<<<<<<< HEAD
  }

  const formattedCity = formatCityName(rawCity);
  const weather = weatherData[formattedCity];

  resultDiv.style.color = "black"; // Reset warna teks

  if (weather) {
    // Data ditemukan, tampilkan hasilnya
    resultDiv.innerHTML = `
      <div class="weather-info">
        <h3>Cuaca di <b>${formattedCity}</b></h3>
        <p class="icon">${weather.icon}</p>
        <p>Suhu: ${weather.temperature}°C</p>
        <p>Kondisi: ${weather.condition}</p>
      </div>
    `;
    console.log(`Cuaca di ${formattedCity}: Suhu ${weather.temperature}°C, Kondisi ${weather.condition}`);
  } else {
    // Data tidak ditemukan
    resultDiv.innerHTML = `Data cuaca untuk kota <b>${formattedCity}</b> tidak ditemukan.`;
    console.log(`Data cuaca tidak ditemukan untuk kota: ${formattedCity}`);
  }
  cityInput.value = ""; // Kosongkan input setelah pengecekan
}

checkWeatherBtn.addEventListener("click", checkWeather);

// Tambahkan event listener untuk tombol "Enter" pada input field
cityInput.addEventListener("keydown", (event) => {
  // Cek jika tombol yang ditekan adalah "Enter"
  if (event.key === "Enter") {
    checkWeather();
=======
>>>>>>> def4845974bc388450898c293e3e043cd81eef01
  }

  const formattedCity = formatCityName(rawCity);
  const weather = weatherData[formattedCity];

  resultDiv.style.color = "black"; // Reset warna teks

  if (weather) {
    // Data ditemukan, tampilkan hasilnya
    resultDiv.innerHTML = `
      <div class="weather-info">
        <h3>Cuaca di <b>${formattedCity}</b></h3>
        <p class="icon">${weather.icon}</p>
        <p>Suhu: ${weather.temperature}°C</p>
        <p>Kondisi: ${weather.condition}</p>
      </div>
    `;
    console.log(`Cuaca di ${formattedCity}: Suhu ${weather.temperature}°C, Kondisi ${weather.condition}`);
  } else {
    // Data tidak ditemukan
    resultDiv.innerHTML = `Data cuaca untuk kota <b>${formattedCity}</b> tidak ditemukan.`;
    console.log(`Data cuaca tidak ditemukan untuk kota: ${formattedCity}`);
  }
  cityInput.value = ""; // Kosongkan input setelah pengecekan
}

checkWeatherBtn.addEventListener("click", checkWeather);
