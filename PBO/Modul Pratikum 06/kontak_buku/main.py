from models.kontak import Kontak

if __name__ == "__main__":
    daftar_kontak = []

    kontak1 = Kontak("Budi", "08123456789")
    kontak2 = Kontak("Siti", "08223344556")
    kontak3 = Kontak("Rudi", "08331234123")

    daftar_kontak.extend([kontak1, kontak2, kontak3])

    print("=== DAFTAR KONTAK ===")
    for kontak in daftar_kontak:
        kontak.tampilkan_info()
