<?php
$menuopt = $_GET['page'];

$sub_kib = "";
$sub_kir = "";
$sub_bib = "";
$sub_rbib = "";
$sub_mb = "";
$sub_dubd = "";
$sub_dbmdd = "";

$menu_dashb = "";
$menu_invent = "";

$style_invent = "";

// elseif(in_array($menuopt, array('kib', 'kir', 'bib', 'rbib', 'lmb', 'dmb', 'rmb', )))

if (in_array($menuopt, array('home'))) {
  $menu_dashb = "active";
} elseif (in_array($menuopt, array('kib', 'insert-kib-a', 'edit-kib-a'))) {
  $sub_kib = "active";
} elseif (in_array($menuopt, array('kir', 'insert-kir', 'edit-kir'))) {
  $sub_kir = "active";
} elseif (in_array($menuopt, array('bib'))) {
  $sub_bib = "active";
} elseif (in_array($menuopt, array('rbib'))) {
  $sub_rbib = "active";
} elseif (in_array($menuopt, array('mb', 'insert-lmb', 'edit-lmb', 'insert-dmb', 'edit-dmb'))) {
  $sub_mb = "active";
} elseif (in_array($menuopt, array('dubd'))) {
  $sub_dubd = "active";
} elseif (in_array($menuopt, array('bmd-gunausaha'))) {
  $sub_dbmdd = "active";
}

if (in_array("active", array($sub_kib, $sub_kir, $sub_bib, $sub_rbib, $sub_mb, $sub_dubd, $sub_dbmdd))) {
  $menu_invent = "active";
  $style_invent = "style='color: #f76232;'";
}

?>
<div class="sidebar" data-color="orange">
  <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
  <div class="logo">
    <div style="padding: 5px; background-color:white; border-radius:10px; margin-bottom:5px;"><img src="assets/img/Logo-Asipat-Disperkim.png" height="40dpi"></div>
  </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
      <li class="<?php echo $menu_dashb; ?>">
        <a href="index.php" class="d-flex align-items-center">
          <i class="now-ui-icons design_app"></i>
          <h5 class="font-weight-bold mb-0">Dashboard</h5>
        </a>
      </li>

      <li class="<?php echo $menu_invent; ?>">
        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle d-flex align-items-center" <?php echo $style_invent; ?>>
          <i class="now-ui-icons ui-1_bell-53" <?php echo $style_invent; ?>></i>
          <h5 class="font-weight-bold mb-0">Inventarisasi Aset</h5>
        </a>
        <ul class="collapse list-unstyled text-center" id="pageSubmenu">
          <li class="<?php echo $sub_kib; ?> mt-2 logo">
            <a href="index.php?page=kib">
              <span style="font-size:10pt;"><strong>Kartu Inventaris Barang</strong></span>
            </a>
          </li>

          <li class="<?php echo $sub_kir; ?> mb-2 logo">
            <a href="index.php?page=kir">
              <span style="font-size:10pt;"><strong>Kartu Inventaris Ruangan</strong></span>
            </a>
          </li>

          <li class="<?php echo $sub_bib; ?> logo">
            <a href="index.php?page=bib">
              <span style="font-size:10pt;"><strong>Buku Inventaris Barang</strong></span>
            </a>
          </li>
          <li class="<?php echo $sub_rbib; ?> logo">
            <a href="index.php?page=rbib">
              <span style="font-size:10pt;"><strong>Rekap Buku Inventaris Barang</strong></span>
            </a>
          </li>

          <li class="<?php echo $sub_mb; ?> logo">
            <a href="index.php?page=mb">
              <span style="font-size:10pt;"><strong>Mutasi Barang</strong></span>
            </a>
          </li>

          <li class="<?php echo $sub_dubd; ?> logo">
            <a href="index.php?page=usulan-penghapusan">
              <span style="font-size:10pt;"><strong>Daftar Usulan Barang Yang Dihapuskan</strong></span>
            </a>
          </li>
          <li class="<?php echo $sub_dbmdd; ?> mb-2 logo">
            <a href="index.php?page=bmd-gunausaha">
              <span style="font-size:10pt;"><strong>Daftar Barang Milik Daerah Yang Digunausahakan</strong></span>
            </a>
          </li>
        </ul>
      </li>
      <li class="<?php echo $menu_pemeliharaan; ?>">
        <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle d-flex align-items-center">
          <i class="now-ui-icons ui-1_bell-53"></i>
          <h5 class="font-weight-bold mb-0">Pemeliharaan Aset</h5>
        </a>
        <ul class="collapse list-unstyled text-center" id="pageSubmenu2">
          <li class="mt-2 logo">
            <a href="index.php?page=dkpbmd">
              <span style="font-size:10pt;"><strong>Daftar Kebutuhan Pemeliharaan Barang Milik Daerah</strong></span>
            </a>
          </li>
          <li class="ogo">
            <a href="index.php?page=jadwal-pemeliharaan">
              <span style="font-size:10pt;"><strong>Jadwal Pemeliharaan</strong></span>
            </a>
          </li>
          <li class="logo">
            <a href="index.php?page=kartu-pemeliharaan">
              <span style="font-size:10pt;"><strong>Kartu Pemeliharaan Barang</strong></span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</div>