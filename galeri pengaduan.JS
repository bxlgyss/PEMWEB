// Membuat tombol "Kembali"
var kembaliButton = document.createElement("button");
kembaliButton.setAttribute("id", "kembaliButton");
kembaliButton.textContent = "Kembali";

// Menambahkan event listener untuk mengarahkan kembali saat tombol diklik
kembaliButton.addEventListener("click", function() {
    history.back();
});

// Menambahkan tombol ke dalam body dokumen
document.body.appendChild(kembaliButton);
