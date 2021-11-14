function tampil() {
    alert("Halo");
}

let warna = document.getElementById('warna');

warna.addEventListener('change', (event) => {
    document.body.style.backgroundColor = warna.value;
});

let x = window.prompt("Masukkan Nama Anda");
alert('Halo ' + x);