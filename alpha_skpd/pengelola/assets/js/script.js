function isNumber(evt) {
	/* 
	Fungsi ini memiliki fungsi untuk mengembalikan character angka,
	Sehingga field yang mengimplemen fungsi ini secara otomatis hanya dapat diisi
	oleh karakter angka
	*/
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

function isOnlySpace(obj){
	/* 
	Fungsi ini melakukan pengecekan apakah field yang tersedia isi nya oleh spasi tanpa katakter lain,
	jika memang field tersebut hanya diisi oleh spasi, maka JS akan memberikan peringatan kepada user
	*/
	var teks = obj.value;
	var rep = teks.split(' ').join('');
	//tmp.replace(/ /g,'');
	
	if(rep == ''){
		window.alert("Maaf, Field "+obj.name+" Harus diisi");
	}else{
		console.log(teks);
	}
}

function numberFormat(obj){
	/* 
	Fungsi ini memiliki tugas untuk mengubah format angka menjadi angka kelipatan 1000, 
	misalnya angka 1000 akan diubah menjadi 1.000 oleh fungsi JavaScript ini
	*/
	var uang = obj.value;
	var newUang = "";
	var temp;
	
	uang = uang.replace(/[.,+-\s]/g,'');
	//uang = uang.replace('Rp','');
	uang = uang.split('').reverse().join('');
	
	while(uang.length != 0){
		temp  = uang.substr(0,3);
		newUang = newUang+"."+temp;
		uang = uang.replace(temp,'');
	}
	newUang = newUang.substr(1);
	newUang = newUang.split('').reverse().join('');
	//newUang = "Rp"+newUang;
	
	obj.value = newUang;
}

function angsuran(obj){
	numberFormat(obj);
	howMuchAngsuran();
}

function isValid(obj1,obj2){
	/* 
	Fungsi ini berfungsi untuk melakukan pengecekan apakah password 
	yang diinputkan oleh user valid atau tidak
	*/
	var password = obj1.value;
	var validWith = obj2.value;
	
	if(password === validWith && password.length >= 8){
		obj1.setAttribute("style","border-color:green");
		document.getElementById("btnsub").disabled = false;
	}else{
		obj1.setAttribute("style","border-color:red");
		document.getElementById("btnsub").disabled = true;
	}
}

function howMuchAngsuran(){
	/* 
	Fungsi ini bertugas untuk melakukan proses pemilihan jumlah angsuran
	yang sesuai dengan user, berdasarkan gaji dan jumlah persentasi gaji
	yang akan dialokasikan untuk pembayaran cicilan
	*/
	var harga = document.getElementById("harga").value;
	var gaji = document.getElementById("gaji").value;
	var persen = document.getElementById("persen").value;
	var bayarMaksPerBulan;
	var angsur;
	var index;

	harga = harga.replace(/[.,+-\s]/g,'');
	bayarMaksPerBulan = (persen/100)*gaji;
	angsur = Math.ceil(harga/bayarMaksPerBulan);

	console.log(harga, bayarMaksPerBulan, angsur);
	document.getElementById('angsur').innerHTML = "<option value='0'>Pilih Jumlah Angsuran</option>";
	
	index = angsur;
	while(index <= 42) {
		if(index % 6 == 0){
			document.getElementById('angsur').innerHTML = document.getElementById('angsur').innerHTML + 
													  "<option value='"+ index +"'>"+ index +" Bulan</option>";
			index = index + 6;
		}else{
			index = index + 1;
		}
	}
}

function hargaSetelahTambahan(obj){
	/* 
	Fungsi ini berfungsi untuk menampilkan harga angsuran 
	setelah tambahan 10% keuntungan dari koperasi
	*/
	var uang = obj.value;
	var tambahan = 10;
	var akhir;
	var newUang = "";
	var temp;

	uang = uang.replace(/[.,+-\s]/g,'');
	akhir = (tambahan + 100)/100 * uang;
	akhir = Math.round(akhir);

	akhir = akhir.toString().split('').reverse().join('');
	while(akhir.length != 0){
		temp  = akhir.substr(0,3);
		newUang = newUang+"."+temp;
		akhir = akhir.replace(temp,'');
	}
	newUang = newUang.substr(1);
	newUang = newUang.split('').reverse().join('')

	document.getElementById('tambahan').innerHTML = "Rp"+newUang;
	numberFormat(obj);
}

function isMinimum(obj, minimum){
	/* 
	Fungsi ini bertugas untuk melakukan pengecekan apakah nilai uang 
	yang diangsurkan melebihi dari minimum pembayaran setiap angsuran 
	*/
	var bayar = obj.value;
	var newUang = "";
	var temp;
	var min;

	min = Math.ceil(minimum);
	bayar = bayar.replace(/[.,+-\s]/g,'');

	min = min.toString().split('').reverse().join('');
	while(min.length != 0){
		temp  = min.substr(0,3);
		newUang = newUang+"."+temp;
		min = min.replace(temp,'');
	}
	newUang = newUang.substr(1);
	newUang = newUang.split('').reverse().join('');

	if(bayar < minimum){
		document.getElementById('notif').innerHTML = "Maaf, angsuran minimum sebesar Rp"+newUang;
		document.getElementById('notif').classList.add("red-color");
		document.getElementById("btnSub").disabled = true;
	}else{
		document.getElementById('notif').innerHTML = "Angsuran minimum Rp"+newUang;
		document.getElementById('notif').classList.remove("red-color");
		document.getElementById("btnSub").disabled = false;
	}

	numberFormat(obj);
}

function gantiHalaman(a_page){
	//Fungsi ini awalnya untuk mengatur pagination yang terdapat pada halaman admin dan anggota
	console.log("Last Night");

	var xhttp = new XMLHttpRequest();
	xhttp.open("GET","../proses/gantiHalaman-"+a_page, true);
	xhttp.send();
	
}

function not16Digit(obj){
	/* 
	Fungsi ini melakukan pengecekan apakah NIK yang diinputkan sesuai 
	atau tidak dengan NIK yang berlaku, karena NIK berdigit 16, 
	maka kami melakukan pengecekan bila kurang dari atau lebih dari 16 digit
	*/
	var nik = obj.value;

	if(nik.length != 16){
		document.getElementById('notif').innerHTML = "NIK yang anda masukan tidak sesuai";
		document.getElementById('notif').classList.add("red-color");
		document.getElementById("btnSub").disabled = true;
	}else{
		document.getElementById('notif').innerHTML = "";
		document.getElementById('notif').classList.remove("red-color");
		document.getElementById("btnSub").disabled = false;
	}
}

function moreThan100(obj){
	/* 
	Fungsi ini berfungsi untuk mengecek apakah persentasi gaji 
	yang diinputkan melebihi 100% atau tidak
	*/
	var persen = obj.value;

	if(persen > 100){
		document.getElementById('notif2').innerHTML = "Persentasi anda lebih dari 100%";
		document.getElementById('notif2').classList.add("red-color");
		document.getElementById("btnSub").disabled = true;
	}else{
		document.getElementById('notif2').innerHTML = "";
		document.getElementById('notif2').classList.remove("red-color");
		document.getElementById("btnSub").disabled = false;
	}
}

function isMinimumDP(obj, minimum){
	/* 
	Fungsi ini bertugas untuk melakukan pengecekan apakah nilai uang 
	yang dibayarkan untuk DP melebihi dari minimum pembayaran DP untuk suatu barang 
	*/
	var bayar = obj.value;
	var newUang = "";
	var temp;
	var min;

	min = Math.ceil(minimum);
	bayar = bayar.replace(/[.,+-\s]/g,'');

	min = min.toString().split('').reverse().join('');
	while(min.length != 0){
		temp  = min.substr(0,3);
		newUang = newUang+"."+temp;
		min = min.replace(temp,'');
	}
	newUang = newUang.substr(1);
	newUang = newUang.split('').reverse().join('');

	if(bayar < minimum){
		document.getElementById('notif').innerHTML = "Maaf, DP minimum adalah Rp"+newUang;
		document.getElementById('notif').classList.add("red-color");
		document.getElementById("btnSub").disabled = true;
	}else{
		document.getElementById('notif').innerHTML = "DP minimum Rp"+newUang;
		document.getElementById('notif').classList.remove("red-color");
		document.getElementById("btnSub").disabled = false;
	}

	numberFormat(obj);
}

function makeID(lama,nomor,ch){
	/* 
	Fungsi ini berfungsi untuk melakukan pembuatan ID dari barang yang akan diinputkan oleh user
	*/
	var baru = "";
	var i;
	var old = lama.value;
	baru = nomor.toString();

	for(i=1;i<old.length-1;i++){
		baru = "0"+baru;
	}
	baru = ch+baru;

	document.getElementById("id").value = baru;
	document.getElementById("id2").value = baru;
}

function closeDiv(){
	/* 
	Fungsi ini berfungsi untuk menutup alert yang ditampilkan
	*/
	document.getElementById("alert").style.display = "none";
}