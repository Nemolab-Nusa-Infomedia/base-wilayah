function copyText() {
        // Mendapatkan elemen <p> yang ingin disalin
        var text = document.getElementById("textToCopy").innerText;

        // Membuat elemen textarea sementara untuk menampung teks
        var tempInput = document.createElement("textarea");
        tempInput.value = text;
        document.body.appendChild(tempInput);

        // Menyalin teks dari textarea sementara ke clipboard
        tempInput.select();
        document.execCommand("copy");

        // Menghapus textarea sementara setelah menyalin
        document.body.removeChild(tempInput);

        // Memberi notifikasi bahwa teks telah disalin (opsional)
        alert("Teks telah disalin ke clipboard!");
    }

function getDesa() {
    console.log(jsonDesa);
    fetch(jsonDesa)
        .then(response => response.json())
        .then(data => {
            // Mengubah objek JSON menjadi string yang rapi
            const jsonString = JSON.stringify(data, null, 4);
            
            // Memasukkan string JSON ke dalam elemen <pre> dengan ID jsonData
            document.getElementById('getDesaJson').textContent = jsonString;
        })
        .catch(error => console.error('Error loading JSON:', error));
} 