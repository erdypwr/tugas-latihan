import math

class Lingkaran:
    def __init__(self, jari_jari):
        self.jari_jari = jari_jari

    def luas(self):
        return math.pi * self.jari_jari ** 2

    def keliling(self):
        return 2 * math.pi * self.jari_jari


class Persegi:
    def __init__(self, sisi):
        self.sisi = sisi

    def luas(self):
        return self.sisi ** 2

    def keliling(self):
        return 4 * self.sisi


if __name__ == "__main__":
    print("=== KALKULATOR BANGUN DATAR ===")
    print("1. Lingkaran")
    print("2. Persegi")

    pilihan = int(input("Pilih bentuk (1/2): "))

    if pilihan == 1:
        r = float(input("Masukkan jari-jari: "))
        lingkaran = Lingkaran(r)
        print(f"Luas: {lingkaran.luas():.2f}")
        print(f"Keliling: {lingkaran.keliling():.2f}")

    elif pilihan == 2:
        s = float(input("Masukkan panjang sisi: "))
        persegi = Persegi(s)
        print(f"Luas: {persegi.luas():.2f}")
        print(f"Keliling: {persegi.keliling():.2f}")