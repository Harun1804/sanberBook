var items = [
    ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpg'],
    ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpg'],
    ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
    ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpg']
]

function card(items) {
    var output = "";
    for (var i = 0; i < items.length; i++) {
        var item = items[i];
        output += `
        <div class="col-md-4 mt-3">
        <div class="card mt-3">
    <img src="assets/img/${item[4]}" class="card-img-top" alt="..." height="250px">
    <div class="card-body">
        <h5 class="card-title" id="itemName">${item[1]}</h5>
        <p class="card-text" id="itemDesc">${item[3]}</p>
        <p class="card-text">Rp ${item[2]}</p>
        <a href="#" class="btn btn-primary hitung" id="addCart" onclick="pencet()">Tambahkan ke keranjang</a>
    </div>
</div>
</div>
        `
    }
    return output;
}

document.getElementById('listBarang').innerHTML = card(items);

var btnCari = document.getElementById('searchItem');
btnCari.addEventListener("click", function () { 
    var kata = document.getElementById('keyword').value;
    var hasil = kata.search();
    var index = items.indexOf(kata);
    if (index !== -1) { 
        document.getElementById('listBarang').innerHTML = card(hasil);
    }
});


var click = 0;
function pencet() {
    click += 1
    document.getElementById('cart').innerHTML = click;
}