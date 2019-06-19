<?php
$menuopt = $_GET['page'];

$sub_kib = "";
$sub_kir = "";
$sub_bib = "";
$sub_rbib = "";
$sub_mb = "";
$sub_dubd = "";
$sub_dbmdd = "";
$sub_usulan = "";

$sub_dkpbmd = "";
$sub_jp = "";
$sub_kpb = "";

$menu_dashb = "";
$menu_invent = "";
$menu_pem = "";

$style_invent = "";
$style_pem = "";

$show_sub_invent = "";
$show_sub_pem = "";

// elseif(in_array($menuopt, array('kib', 'kir', 'bib', 'rbib', 'lmb', 'dmb', 'rmb', )))

if (in_array($menuopt, array('home'))) {
  $menu_dashb = "active";
} elseif (in_array($menuopt, array('kib', 'insert-kib-a', 'edit-kib-a', 'insert-kib-b', 'edit-kib-b'))) {
  $sub_kib = "active";
} elseif (in_array($menuopt, array('kir', 'insert-kir', 'edit-kir'))) {
  $sub_kir = "active";
} elseif (in_array($menuopt, array('bi', 'bi-input', 'bi-edit'))) {
  $sub_bib = "active";
} elseif (in_array($menuopt, array('rbib'))) {
  $sub_rbib = "active";
} elseif (in_array($menuopt, array('mb', 'insert-lmb', 'edit-lmb', 'insert-dmb', 'edit-dmb'))) {
  $sub_mb = "active";
} elseif (in_array($menuopt, array('dubd'))) {
  $sub_dubd = "active";
} elseif (in_array($menuopt, array('bmd-gunausaha','bmd-gunausaha-input'))) {
  $sub_dbmdd = "active";
} else if (in_array($menuopt, array('kir', 'insert-kir', 'edit-kir'))) {
  $sub_kir = "active";
} else if (in_array($menuopt, array('usulan-penghapusan', 'usulan-penghapusan-input', 'usulan-penghapusan-edit'))) {
  $sub_usulan = "active";
}

if (in_array($menuopt, array('dkpbmd', 'dkpbmd-edit', 'dkpbmd-input', 'dkpbmd-delete'))) {
  $sub_dkpbmd = "active";
} else if (in_array($menuopt, array('jadwal-pemeliharaan', 'jadwal-pemeliharaan-input', 'jadwal-pemeliharaan-edit'))) {
  $sub_jp = "active";
} else if (in_array($menuopt, array('kartu-pemeliharaan','kartu-pemeliharaan-input','kartu-pemeliharaan-edit'))) {
  $sub_kpb = "active";
}

if (in_array("active", array($sub_kib, $sub_kir, $sub_bib, $sub_rbib, $sub_mb, $sub_dubd, $sub_dbmdd, $sub_kir, $sub_usulan))) {
  $menu_invent = "active";
  $style_invent = "style='color: #f76232;'";
  $show_sub_invent = "show";
}

if (in_array("active", array($sub_dkpbmd, $sub_jp, $sub_kpb))) {
  $menu_pem = "active";
  $style_pem = "style='color: #f76232;'";
  $show_sub_pem = "show";
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
          <h5 class="font-weight-bold mb-0">Home</h5>
        </a>
      </li>
      <?php if ($_SESSION['kd_bagian'] != 1 && $_SESSION['kd_bagian'] != 4) { ?>

        <li class="<?php echo $menu_invent; ?>">
          <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle d-flex align-items-center" <?php echo $style_invent; ?>>
            <i class="now-ui-icons ui-1_bell-53" <?php echo $style_invent; ?>></i>
            <h5 class="font-weight-bold mb-0">Inventarisasi Aset</h5>
          </a>
          <ul class="collapse list-unstyled text-center <?php echo $show_sub_invent; ?>" id="pageSubmenu">
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
              <a href="index.php?page=bi">
                <span style="font-size:10pt;"><strong>Buku Inventaris Barang</strong></span>
              </a>
            </li>

            <li class="<?php echo $sub_mb; ?> logo">
              <a href="index.php?page=mb">
                <span style="font-size:10pt;"><strong>Mutasi Barang</strong></span>
              </a>
            </li>
            <?php if ($_SESSION['kd_bagian'] != 3) { ?>
            <li class="<?php echo $sub_usulan; ?> logo">
              <a href="index.php?page=usulan-penghapusan">
                <span style="font-size:10pt;"><strong>Daftar Usulan Barang Yang Dihapuskan</strong></span>
              </a>
            </li>
            <li class="<?php echo $sub_dbmdd; ?> mb-2 logo">
              <a href="index.php?page=bmd-gunausaha">
                <span style="font-size:10pt;"><strong>Daftar Barang Milik Daerah Yang Digunausahakan</strong></span>
              </a>
            </li>
            <?php } ?>
          </ul>
        </li>
      <?php } ?>
      <?php
      if ($_SESSION['kd_bagian'] != 2) { ?>
        <li class="<?php echo $menu_pem; ?>">
          <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle d-flex align-items-center" <?php echo $style_pem; ?>>
            <i class="now-ui-icons ui-1_bell-53" <?php echo $style_pem; ?>></i>
            <h5 class="font-weight-bold mb-0">Pemeliharaan Aset</h5>
          </a>
          <ul class="collapse list-unstyled text-center <?php echo $show_sub_pem; ?>" id="pageSubmenu2">
            <?php if ($_SESSION['kd_bagian'] != 4) { ?>
            <li class="<?php echo $sub_dkpbmd; ?> mt-2 logo">
              <a href="index.php?page=dkpbmd">
                <span style="font-size:10pt;"><strong>Daftar Kebutuhan Pemeliharaan Barang Milik Daerah</strong></span>
              </a>
            </li>
            <?php } ?>
            <?php if ($_SESSION['kd_bagian'] != 1 && $_SESSION['kd_bagian'] != 2) { ?>
              <?php if ($_SESSION['kd_bagian'] != 4) { ?>
              <li class="<?php echo $sub_jp; ?> logo">
                <a href="index.php?page=jadwal-pemeliharaan">
                  <span style="font-size:10pt;"><strong>Jadwal Pemeliharaan</strong></span>
                </a>
              </li>
              <?php } ?>
              <li class="<?php echo $sub_kpb; ?> logo">
                <a href="index.php?page=kartu-pemeliharaan">
                  <span style="font-size:10pt;"><strong>Kartu Pemeliharaan Barang</strong></span>
                </a>
              </li>
            <?php } ?>
          </ul>
        </li>
      <?php } ?>
    </ul>
  </div>
</div>