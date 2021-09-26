function hitung() {
    var nama = document.getElementById("nama").value;
    //var p = parseInt(document.getElementById('p').value);
    // var l = parseInt(document.getElementById('l').value);
    //var fo =document.forms['pp'];
    //var p = parseInt(fo['p'].value);
    var sisi = parseInt(document.forms['pp']['sisi'].value);
    var alas = parseInt(document.forms['pp']['alas'].value);
    var tinggi = parseInt(document.forms['pp']['tinggi'].value);

    if (isNaN(sisi) || isNaN(alas) || isNaN(tinggi)) { // error handling
        // alert('nilai panjang dan lebar harus diisi');
        document.getElementById('hsl').innerText = 'nilai sisi, alas dan tinggi harus diisi';
        document.getElementById('hsl').style.background = 'red';
        document.getElementById('hsl').style.color = 'white';
    } else {
        if ((sisi < 1) || (alas < 1) || (tinggi < 1)) {
            document.getElementById('hsl').innerText = 'nilai sisi, alas dan tinggi harus di atas 0';
            document.getElementById('hsl').style.background = '#2BF3EF';
            document.getElementById('hsl').style.color = 'blue';
        } else {
            var t = 'HASIL PERHITUNGAN - Javascript';
            t += `\nHalo,  ${nama}`;
            t += '\nKeliling Segitiga =  ' + ((sisi * 2) + alas);
            t += '\nLuas Segitiga =  ' + (1/2 * alas * tinggi);
            document.getElementById('hsl').innerText = t;
            document.getElementById('hsl').style.background = document.forms['pp']['col'].value;
        }
    }
}