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
│   ├───modules                                       # Table of contents
│   │   ├───dashboard                                 
│   │   │   ├───controllers
│   │   │   ├───models
│   │   │   └───views
│   │   ├───gantipassword
│   │   │   ├───config
│   │   │   ├───controllers
│   │   │   ├───models
│   │   │   └───views
│   │   ├───home
│   │   │   ├───controllers
│   │   │   ├───models
│   │   │   └───views
│   │   ├───laporanabsensi
│   │   │   ├───controllers
│   │   │   ├───models
│   │   │   └───views
│   │   │       └───include
│   │   ├───laporangaji
│   │   │   ├───controllers
│   │   │   └───views
│   │   ├───listdataabsensi
│   │   │   ├───controllers
│   │   │   ├───models
│   │   │   └───views
│   │   ├───listdatagaji
│   │   │   ├───controllers
│   │   │   ├───models
│   │   │   └───views
│   │   │       └───include
│   │   ├───listdatajabatan
│   │   │   ├───controllers
│   │   │   ├───models
│   │   │   └───views
│   │   ├───listdatapegawai
│   │   │   ├───controllers
│   │   │   ├───models
│   │   │   └───views
│   │   ├───login
│   │   │   ├───config
│   │   │   ├───controllers
│   │   │   ├───models
│   │   │   └───views
│   │   ├───migration
│   │   │   ├───config
│   │   │   ├───controllers
│   │   │   ├───migrations
│   │   │   └───views
│   │   ├───settingpotongangaji
│   │   │   ├───controllers
│   │   │   ├───models
│   │   │   └───views
│   │   ├───slipgaji
│   │   │   ├───controllers
│   │   │   ├───models
│   │   │   └───views
│   │   │       └───include
│   │   └───templates
│   │       ├───controllers
│   │       └───views
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
