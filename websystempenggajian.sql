SHOW DATABASES;

CREATE DATABASE websystempenggajian;

DROP DATABASE websystempenggajian;

USE websystempenggajian;

SHOW TABLES;

CREATE TABLE `tbl_data_pegawai` (
  `id_pegawai` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(25) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `nama_jabatan` varchar(25) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `status` varchar(25) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `hak_akses` int(11) NOT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `tbl_data_jabatan` (
  `id_jabatan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(25) NOT NULL,
  `gaji_pokok` varchar(25) NOT NULL,
  `tunjangan_transport` varchar(50) NOT NULL,
  `uang_makan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `tbl_data_kehadiran` (
  `id_kehadiran` int(11) NOT NULL AUTO_INCREMENT,
  `bulan` varchar(25) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `nama_jabatan` varchar(25) NOT NULL,
  `hadir` int(11) NOT NULL,
  `sakit` int(11) NOT NULL,
  `alpha` int(11) NOT NULL,
  KEY `id_kehadiran` (`id_kehadiran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `tbl_potongan_gaji` (
  `id_potongangaji` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_potongan` varchar(25) NOT NULL,
  `jumlah_potongan` int(11) NOT NULL,
  KEY `id_potongangaji` (`id_potongangaji`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `tbl_hak_akses` (
  `id_hakakses` int(11) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(50) NOT NULL,
  `hak_akses` int(11) NOT NULL,
  KEY `id_hakakses` (`id_hakakses`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

SELECT * FROM tbl_data_pegawai;

SELECT * FROM tbl_data_jabatan;

SELECT * FROM tbl_data_kehadiran;

SELECT * FROM tbl_potongan_gaji;

SELECT * FROM tbl_hak_akses;

INSERT INTO tbl_data_pegawai(	nik,
								nama_pegawai,
                                username,
                                password,
                                jenis_kelamin,
                                nama_jabatan,
                                tanggal_masuk,
                                status,
                                foto,
                                hak_akses)
						VALUES(	"1234123412341234",
								"Muhammad Ali Albair",
                                "ali1",
                                "123",
                                "Laki-Laki",
                                "Admin",
								STR_TO_DATE('01, 10, 2021', '%d, %m, %Y')
                                "Permanen",
                                "profile.jpg",
                                "1");
                                
INSERT INTO tbl_data_jabatan(	nama_jabatan,
								              gaji_pokok,
                              tunjangan_transport,
                              uang_makan
                              )
                        VALUES(	"Admin",
								                "6000000",
                                "1000000",
                                "500000"
								                );                             
                                
INSERT INTO tbl_data_kehadiran(	bulan,
								                nik,
                                nama_pegawai,
                                jenis_kelamin,
                                nama_jabatan,
                                hadir,
                                sakit,
                                alpha)
						              VALUES(	
								                "102021",
                                "1234567890123124",
                                "Sabilaa",
                                "laki-laki",
                                "Admin",
                                "24",
                                "4",
                                "2");
                                
INSERT INTO tbl_potongan_gaji(	potongan,
								                jumlah_potongan)
                        VALUES(	"200000",
                                "2");
INSERT INTO tbl_hak_akses(	keterangan,
							              hak_akses)
                    VALUES(	"Pegawai",
							              "2");
