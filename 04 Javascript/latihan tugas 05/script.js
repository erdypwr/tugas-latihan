function ubahKonten() {
    const judul = document.getElementById("judul");
    const paragraf = document.getElementById("paragraf");

    // Ubah textContent
    judul.textContent = "Judul Baru";
    paragraf.textContent = "Paragraf telah diubah dengan textContent";

    // Ubah style
    judul.style.color = "blue";
    judul.style.fontSize = "2rem";
    paragraf.style.padding = "10px";
    paragraf.style.borderRadius = "5px";
    paragraf.style.backgroundColor = "#f0f0f0";

    console.log("Konten berhasil diubah!");
}

function resetKonten() {
    const judul = document.getElementById("judul");
    const paragraf = document.getElementById("paragraf");

    // Reset textContent
    judul.textContent = "Judul Awal";
    paragraf.textContent = "Ini adalah teks awal paragraf.";

    // Reset style
    judul.style.color = "";
    judul.style.fontSize = "";
    paragraf.style.backgroundColor = "transparent";
    paragraf.style.padding = "";
    paragraf.style.borderRadius = "";

    console.log("Konten berhasil direset!");
}