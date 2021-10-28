<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'login/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Routes Modules Global

// Routes Home
// $route['home'] = "home/callHome";

// Routes User Admin
// Routes Dashboard 
$route['admin/dashboard'] = 'dashboard/Dashboard/dashboard';

// Routes List Data Pegawai
$route['admin/listdatapegawai'] = 'listDataPegawai/listDataPegawai/listdatapegawai';
$route['admin/listdatapegawai/addlistdatapegawai'] = 'listDataPegawai/Listdatapegawai/addListDataPegawai';
$route['admin/listdatapegawai/updateaddlistdatapegawai'] = 'listDataPegawai/ListDataPegawai/updateAddListDataPegawai';
$route['admin/listdatapegawai/editlistdatapegawai/(:any)'] = 'listDataPegawai/ListDataPegawai/editListDataPegawai/$1';
$route['admin/listdatapegawai/updateeditlistdatapegawai'] = 'listDataPegawai/ListDataPegawai/updateEditListDataPegawai';
$route['admin/listdatapegawai/deletelistdatapegawai/(:any)'] = 'listDataPegawai/ListDataPegawai/deleteListDataPegawai/$1';

// Routes List Data Jabatan
$route['admin/listdatajabatan'] = 'listdatajabatan/Listdatajabatan/listDataJabatan';
$route['admin/listdatajabatan/addlistdatajabatan'] = 'listdatajabatan/Listdatajabatan/addListDataJabatan';
$route['admin/listdatajabatan/updateaddlistdatajabatan'] = 'listdatajabatan/Listdatajabatan/updateAddListDataJabatan';
$route['admin/listdatajabatan/editlistdatajabatan/(:any)'] = 'listdatajabatan/Listdatajabatan/editListDataJabatan/$1';
$route['admin/listdatajabatan/updateeditlistdatajabatan'] = 'listdatajabatan/Listdatajabatan/updateEditListDataJabatan';
$route['admin/listdatajabatan/deletelistdatajabatan/(:any)'] = 'listdatajabatan/Listdatajabatan/deleteListDataJabatan/$1';

// Routes List Data Absensi
$route['admin/listdataabsensi'] = 'listdataabsensi/Listdataabsensi/listDataAbsensi';
$route['admin/listdataabsensi/addlistdataabsensi'] = 'listdataabsensi/Listdataabsensi/addListDataAbsensi';

//Routes Settingan Potongan Gaji
$route['admin/settingpotongangaji'] = 'settingpotongangaji/Settingpotongangaji/listSettingPotonganGaji';
$route['admin/settingpotongangaji/addlistsettingpotongangaji'] = 'settingpotongangaji/Settingpotongangaji/addListSettingPotonganGaji';
$route['admin/settingpotongangaji/updateaddlistsettingpotongangaji'] = 'settingpotongangaji/Settingpotongangaji/updateAddListSettingPotonganGaji';
$route['admin/settingpotongangaji/editlistsettingpotongangaji/(:any)'] = 'settingpotongangaji/Settingpotongangaji/editListSettingPotonganGaji/$1';
$route['admin/settingpotongangaji/updateeditlistsettingpotongangaji'] = 'settingpotongangaji/Settingpotongangaji/updateEditListSettingPotonganGaji';
$route['admin/settingpotongangaji/deletelistsettingpotongangaji/(:any)'] = 'settingpotongangaji/Settingpotongangaji/deleteListSettingPotonganGaji/$1';

// Routes List Data Gaji
$route['admin/listdatagaji'] = 'listdatagaji/Listdatagaji/listDataGaji';
$route['admin/listdatagaji/printlistdatagaji'] = 'listdatagaji/Listdatagaji/printListDataGaji';

// Routes Laporan Gaji
$route['admin/laporangaji'] = "laporangaji/Laporangaji/laporanGaji";
$route['admin/laporangaji/printlaporangaji'] = "laporangaji/Laporangaji/printLaporanGaji";

// Route Laporan Absensi
$route['admin/laporanabsensi'] = "laporanabsensi/Laporanabsensi/laporanAbsensi";
$route['admin/laporanabsensi/printlaporanabsensi'] = "laporanabsensi/Laporanabsensi/printLaporanAbsensi";

// Routes Slip Gaji
$route['admin/slipgaji'] = "slipgaji/Slipgaji/slipGaji";
$route['admin/slipgaji/printslipgaji'] = "slipgaji/Slipgaji/printSLiptGaji";

// Routes Ganti Password
$route['admin/gantipassword'] = "gantipassword/Gantipassword/gantiPassword";
$route['admin/gantipassword/updategantipassword'] = "gantipassword/Gantipassword/updateGantiPassword";

// Login
$route['login/dologin'] = 'login/doLogin';

// Routes User Pegawai
// Routes Dashboard
$route['pegawai/dashboard'] = "dashboard/DashboardPegawai/dashboardPegawai";

// Routes List Data Gaji
$route['pegawai/listdatagaji'] = "listdatagaji/ListDataGajiPegawai/listDataGajiPegawai";
$route['pegawai/printlistdatagaji/(:any)'] = "listdatagaji/ListDataGajiPegawai/printListDataGajiPegawai/$1";

// Routes Ganti Password
$route['pegawai/gantipassword'] = "gantipassword/GantiPasswordPegawai/gantiPasswordPegawai";
$route['pegawai/updategantipasswordpegawai'] = "gantipassword/GantiPasswordPegawai/updateGantiPasswordPegawai";
