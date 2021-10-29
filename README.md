# ci3hmvc-websystempenggajian

## Overview

Web System Penggajian An Example Website For Set Up Payroll System.

## What's Inside

- Web System Penggajian
  - User :
    - Admin
    - Pegawai
  - Menus :
    - Master Data
      - List Data Pegawai
      - List Data Jabatan
    - Transaksi
      - List Data Absensi
      - Setting Potongan Gaji
      - List Data Gaji
    - Laporan
      - Laporan Gaji
      - Laporan Absensi
      - Slip Gaji
    - Ganti Password
    - Logout
  - Menus Privilege :
    - Admin : All Menus.
    - Pegawai : Dashboard, List Data Gaji, Ganti Password, Logout.
- PHP v5.2.0
- Code Igniter 3 With HMVC Pattern
- Authentication
- Session
- Form Validation
- SB Admin 2
- Bootstrap v4.1.3
- Query SQL
- etc..

## File Structure
```bash
├───application
│   ├───...
│   ├───...
│   ├───modules                                      
│   │   ├───dashboard
│   │   │   ├───controllers
│   │   │   │       Dashboard.php
│   │   │   │       DashboardPegawai.php
│   │   │   │
│   │   │   ├───models
│   │   │   │       MDashboard.php
│   │   │   │       MDashboardpegawai.php
│   │   │   │
│   │   │   └───views
│   │   │           v_dashboard.php
│   │   │           v_dashboardpegawai.php
│   │   │
│   │   ├───gantipassword
│   │   │   ├───config
│   │   │   │       routes.php
│   │   │   │
│   │   │   ├───controllers
│   │   │   │       GantiPassword.php
│   │   │   │       GantiPasswordPegawai.php
│   │   │   │
│   │   │   ├───models
│   │   │   │       MGantipassword.php
│   │   │   │       MGantipasswordpegawai.php
│   │   │   │
│   │   │   └───views
│   │   │           v_gantipassword.php
│   │   │           v_gantipasswordpegawai.php
│   │   │
│   │   ├───home
│   │   │   ├───controllers
│   │   │   │       Home.php
│   │   │   │
│   │   │   ├───models
│   │   │   │       MHome.php
│   │   │   │
│   │   │   └───views
│   │   │           v_home.php
│   │   │
│   │   ├───laporanabsensi
│   │   │   ├───controllers
│   │   │   │       LaporanAbsensi.php
│   │   │   │
│   │   │   ├───models
│   │   │   │       MLaporanabsensi.php
│   │   │   │
│   │   │   └───views
│   │   │       │   v_laporanabsensi.php
│   │   │       │   v_printlaporanabsensi.php
│   │   │       │
│   │   │       └───include
│   │   │               load-script
│   │   │               load-scripts.php
│   │   │               load-styles.php
│   │   │
│   │   ├───laporangaji
│   │   │   ├───controllers
│   │   │   │       LaporanGaji.php
│   │   │   │
│   │   │   └───views
│   │   │           v_laporangaji.php
│   │   │
│   │   ├───listdataabsensi
│   │   │   ├───controllers
│   │   │   │       ListDataAbsensi.php
│   │   │   │
│   │   │   ├───models
│   │   │   │       MListdataabsensi.php
│   │   │   │
│   │   │   └───views
│   │   │           v_addlistdataabsensi.php
│   │   │           v_listdataabsensi.php
│   │   │
│   │   ├───listdatagaji
│   │   │   ├───controllers
│   │   │   │       ListDataGaji.php
│   │   │   │       ListDataGajiPegawai.php
│   │   │   │
│   │   │   ├───models
│   │   │   │       MListdatagaji.php
│   │   │   │       MListdatagajipegawai.php
│   │   │   │
│   │   │   └───views
│   │   │       │   v_listdatagaji.php
│   │   │       │   v_listdatagajipegawai.php
│   │   │       │   v_printlistdatagaji.php
│   │   │       │   v_printlistdatagajipegawai.php
│   │   │       │
│   │   │       └───include
│   │   │               load-scripts.php
│   │   │               load-styles.php
│   │   │
│   │   ├───listdatajabatan
│   │   │   ├───controllers
│   │   │   │       ListDataJabatan.php
│   │   │   │
│   │   │   ├───models
│   │   │   │       MLIstdatajabatan.php
│   │   │   │
│   │   │   └───views
│   │   │           v_addlistdatajabatan.php
│   │   │           v_editlistdatajabatan.php
│   │   │           v_listdatajabatan.php
│   │   │
│   │   ├───listdatapegawai
│   │   │   ├───controllers
│   │   │   │       ListDataPegawai.php
│   │   │   │
│   │   │   ├───models
│   │   │   │       MListdatapegawai.php
│   │   │   │
│   │   │   └───views
│   │   │           v_addlistdatapegawai.php
│   │   │           v_editlistdatapegawai.php
│   │   │           v_listdatapegawai.php
│   │   │
│   │   ├───login
│   │   │   ├───config
│   │   │   │       routes.php
│   │   │   │
│   │   │   ├───controllers
│   │   │   │       Login.php
│   │   │   │
│   │   │   ├───models
│   │   │   │       MLogin.php
│   │   │   │
│   │   │   └───views
│   │   │           v_login.php
│   │   │
│   │   ├───migration
│   │   │   ├───config
│   │   │   │       migration.php
│   │   │   │       routes.php
│   │   │   │
│   │   │   ├───controllers
│   │   │   │       Migration.php
│   │   │   │
│   │   │   ├───migrations
│   │   │   │       001_tbl_data_pegawai.php
│   │   │   │       002_tbl_data_jabatan.php
│   │   │   │       003_tbl_data_kehadiran.php
│   │   │   │       004_tbl_potongan_gaji.php
│   │   │   │       005_tbl_hak_akses.php
│   │   │   │
│   │   │   └───views
│   │   │           v_runmigration.php
│   │   │
│   │   ├───settingpotongangaji
│   │   │   ├───controllers
│   │   │   │       SettingPotonganGaji.php
│   │   │   │
│   │   │   ├───models
│   │   │   │       MSettingpotongangaji.php
│   │   │   │
│   │   │   └───views
│   │   │           v_addlistsettingpotongangaji.php
│   │   │           v_editlistsettingpotongangaji.php
│   │   │           v_listsettingpotongangaji.php
│   │   │
│   │   ├───slipgaji
│   │   │   ├───controllers
│   │   │   │       SlipGaji.php
│   │   │   │
│   │   │   ├───models
│   │   │   │       MSlipgaji.php
│   │   │   │
│   │   │   └───views
│   │   │       │   v_printslipgaji.php
│   │   │       │   v_slipgaji.php
│   │   │       │
│   │   │       └───include
│   │   │               load-scripts.php
│   │   │               load-styles.php
│   │   │
│   │   └───templates
│   │       ├───controllers
│   │       │       Templates.php
│   │       │
│   │       └───views
│   │               v_exampletemplates.php
│   │               v_templatesadmin.php
│   │               v_templateslogin.php
│   │               v_templatespegawai.php
│   ├───...
├───assets
│   ├───...
└───system
    ├───...
```


## Quick Start

- Clone the project to your htdocs directory
- Configure the Database(application/config/database.php)
- Configure the config file(application/config/config.php)
- Run Migration with url http://your-hostname/ci3hmvc-websystempenggajian/migration
- Open file websystempenggajian.sql in the root folder of the project, run it(Query INSERT)
- Run Web System Penggajian with url http://your-hostname/ci3hmvc-websystempenggajian/login
- Login with username & password (Usernames and passwords are on the tbl_data_pegawai)
- Its :coffee: time!!! 

## KnownIssues

- No Issues (Let me know if there are issues).
