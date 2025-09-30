function runExercises() {
    // Latihan Variabel & Tipe Data
    
    // 1. Deklarasi variabel
    let nama = "John Doe";
    const umur = 25;
    var isActive = true;
    
    // 2. Tipe data berbeda
    let angka = 100;
    let desimal = 3.14;
    let teks = "Hello World";
    let boolean = false;
    let array = [1, 2, 3, 4, 5];
    let objek = {
        nama: "Jane",
        kota: "Jakarta",
        usia: 30
    };
    
    // 3. Output ke console
    console.log("=== LATIHAN VARIABEL & TIPE DATA ===");
    console.log("Nama:", nama);
    console.log("Umur:", umur);
    console.log("Status Aktif:", isActive);
    console.log("Angka:", angka);
    console.log("Desimal:", desimal);
    console.log("Teks:", teks);
    console.log("Boolean:", boolean);
    console.log("Array:", array);
    console.log("Objek:", objek);
    
    // 4. Operasi variabel
    let a = 10;
    let b = 5;
    let hasilTambah = a + b;
    let hasilKali = a * b;
    
    console.log("Hasil Penambahan:", hasilTambah);
    console.log("Hasil Perkalian:", hasilKali);
    
    // 5. Mengubah nilai variabel
    let counter = 0;
    console.log("Counter awal:", counter);
    counter += 1;
    console.log("Counter setelah ditambah:", counter);
    
    alert("Latihan selesai! Lihat hasil di console (F12 > Console)");
}