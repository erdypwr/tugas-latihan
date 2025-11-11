from bangun_datar.lingkaran import Lingkaran
from bangun_datar.persegi import Persegi

if __name__ == "__main__":
    print("=== KALKULATOR BANGUN DATAR ===")
    print("1. Lingkaran")
    print("2. Persegi")

    pilihan = int(input("Pilih bentuk (1/2): "))

    if pilihan == 1:
        r = float(input("Masukkan jari-jari: "))
        lingkaran = Lingkaran(r)
        print(f"Luas Lingkaran: {lingkaran.luas():.2f}")
        print(f"Keliling Lingkaran: {lingkaran.keliling():.2f}")

    elif pilihan == 2:
        s = float(input("Masukkan panjang sisi: "))
        persegi = Persegi(s)
        print(f"Luas Persegi: {persegi.luas():.2f}")
        print(f"Keliling Persegi: {persegi.keliling():.2f}")
