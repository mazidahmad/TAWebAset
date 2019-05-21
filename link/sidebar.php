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

    if(in_array($menuopt, array('home'))){$menu_dashb="active";}
    elseif(in_array($menuopt, array('kib', 'insert-kib-a', 'edit-kib-a'))){$sub_kib="active";}
    elseif(in_array($menuopt, array('kir', 'insert-kir', 'edit-kir'))){$sub_kir="active";}
    elseif(in_array($menuopt, array('bib'))){$sub_bib="active";}
    elseif(in_array($menuopt, array('rbib'))){$sub_rbib="active";}
    elseif(in_array($menuopt, array('mb', 'insert-lmb', 'edit-lmb', 'insert-dmb', 'edit-dmb'))){$sub_mb="active";}
    elseif(in_array($menuopt, array('dubd'))){$sub_dubd="active";}
    elseif(in_array($menuopt, array('bmd-gunausaha'))){$sub_dbmdd="active";}

    if(in_array("active", array($sub_kib, $sub_kir, $sub_bib, $sub_rbib, $sub_mb, $sub_dubd, $sub_dbmdd))){$menu_invent = "active"; $style_invent="style='color: #f76232;'";}
    
?>
<div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a class="simple-text logo-mini">
          SD
        </a>
        <a class="simple-text logo-normal">
          SIPAT DISPERKIM
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="<?php echo $menu_dashb;?>">
            <a href="index.php" class="d-flex align-items-center">
              <i class="now-ui-icons design_app"></i>
              <h5 class="font-weight-bold mb-0">Dashboard</h5>
            </a>
          </li>
          
          <li class="<?php echo $menu_invent;?>">
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle d-flex align-items-center" <?php echo $style_invent; ?>>
              <i class="now-ui-icons ui-1_bell-53" <?php echo $style_invent; ?>></i>
              <h5 class="font-weight-bold mb-0">Inventarisasi Aset</h5>
            </a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
              <li class="<?php echo $sub_kib;?>">
                  <a href="index.php?page=kib"><h5>Kartu Inventaris Barang</h5></a>
              </li>
              
              <li class="<?php echo $sub_kir;?>">
                  <a href="index.php?page=kir"><h5>Kartu Inventaris Ruangan</h5></a>
              </li>

              <li class="<?php echo $sub_bib;?>">
                  <a href="index.php?page=bib"><h5>Buku Inventaris Barang</h5></a>
              </li>
              <li class="<?php echo $sub_rbib;?>">
                  <a href="index.php?page=rbib"><h5>Rekap Buku Inventaris Barang</h5></a>
              </li>

              <li class="<?php echo $sub_mb;?>">
                  <a href="index.php?page=mb"><h5> Mutasi Barang</h5></a>
              </li>

              <li class="<?php echo $sub_dubd;?>">
                  <a href="index.php?page=usulan-penghapusan"><h5>Daftar Usulan Barang Yang Dihapuskan</h5></a>
              </li>
              <li class="<?php echo $sub_dbmdd;?>">
                  <a href="index.php?page=bmd-gunausaha"><h5>Daftar Barang Milik Daerah Yang Digunausahakan</h5></a>
              </li>
            </ul>
          </li>
          <li class="<?php echo $menu_pemeliharaan;?>">
            <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle d-flex align-items-center">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <h5 class="font-weight-bold mb-0">Pemeliharaan Aset</h5>
            </a>
            <ul class="collapse list-unstyled" id="pageSubmenu2">
              <li>
                  <a href="#"><h5>Daftar Kebutuhan Pemeliharaan Barang Milik Daerah</h5></a>
              </li>
              <li>
                  <a href="#"><h5>Jadwal Pemeliharaan</h5></a>
              </li>
              <li>
                  <a href="#"><h5>Kartu Pemeliharaan Barang</h5></a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>