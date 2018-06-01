create table pns(
	nik varchar(64) not null primary key,
	nama_pns varchar(64) not null,
	skpd varchar(64) not null ,
	jabatan varchar(64) not null ,
	eselon int not null
);

create table login(
	username varchar(64) not null primary key,
	password varchar(64) not null,
	akses int not null,
	foreign key (username) references pns(nik)
);

create table kendaraan_dimiliki(
	nik varchar(64) not null,
	nama_kendaraan varchar(64) not null,
	merek varchar(64) not null,
	type varchar(64) not null,
	cc int not null,
	warna varchar(64) not null,
	nomor_mesin varchar(64) not null,
	nomor_rangka varchar(64) not null,
	tahun_pembuatan date not null,
	tahun_pembelian date not null,
	nomor_polisi varchar(64) not null primary key,
	foreign key (nik) references pns(nik)
);

create table usulan_kendaraan(
	nik varchar(64) not null,
	nama_kendaraan varchar(64) not null,
	jumlah int not null,
	jenis_kendaraan varchar(64) not null,
	cc int not null,
	estimasi_harga bigint not null,
	tahun_pengadaan date not null,
	status_pengadaan varchar(64) not null,
	foreign key (nik) references pns(nik),
	primary key (nik,nama_kendaraan,tahun_pengadaan)
);