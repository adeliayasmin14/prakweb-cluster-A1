var alat=[
    "Pena","Pensil","Buku"
]

function tampil(){
    var benda = document.getElementById('daftar');
    benda.innerHTML = "";
    for(var i=0;i<alat.length;i++){
        var TEdit = "<a href='#' onclick='edit("+i+")'>Edit</a>";
        var THapus = "<a href='#' onclick='hapus("+i+")'>hapus</a>";
        benda.innerHTML += "<li>"+alat[i]+"["+TEdit+" | "+THapus+"]</li>";
    }
}

function tambah(){
    var masukan = document.querySelector("input[name=benda");
    alat.push(masukan.value);
    tampil();
}

function edit(id){
    var newbenda = prompt("Nama Baru", alat[id]);
    alat[id] = newbenda;
    tampil();
}

function hapus(id){
    alat.splice(id, 1);
    tampil();
}

tampil();