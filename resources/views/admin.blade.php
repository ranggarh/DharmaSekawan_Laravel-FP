<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="shortcut icon" href="../imagesa/icon.jpg">
  <!--Import Google Icon Font-->
    <link href="../fontsa/material.css" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../cssa/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style type="text/css">
      .btn.modal-trigger{display:block; width:100%; padding:30px;line-height:0px}
    </style>
</head>
<body>
  <div class="row">
    <!--header-->
    <header>
      <!--TopNav-->
          <nav class="row top-nav blue darken-2">
          <div class="container">
            <div class="col offset-l2 nav-wrapper">
              <a href="#" data-activates="slide-out" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a>
              <a href="index.php">Beranda</a>
            </div>
          </div>
      </nav>

      <!--Sidenav-->
      <ul id="slide-out" class="side-nav fixed">

              <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li>
                      <div class="user-view">
                          <div class="background" style="margin-bottom:-20%;">
                            <img src="../imagesa/bg3.jpg">
                          </div>
                        <span class="white-text name"><?php echo $nama; ?><i class="material-icons left">account_circle</i></span>
                      </div>
                    </li>

                    <li><div class="divider" style="margin-top:20%;"></div></li>

                    <li><a class="collapsible-header">Beranda<i class="material-icons">home</i></a></li>

                    <li>
                      <a class="collapsible-header">Menu<i class="material-icons">arrow_drop_down</i></a>
                      <div class="collapsible-body">
                        <ul>
                          <li><a href="pegawai.php">pegawai</a></li>
                          <li><a href="Dokter.php">dokter</a></li>
                          <li><a href="Pasien.php">pasien</a></li>
                          <li><a href="Obat.php">obat</a></li>
                          <li><a href="Kamar.php">kamar</a></li>
                          <li><a href="Perawatan.php">perawatan</a></li>
                          <li><a href="Spesialis.php">spesialis</a></li>
                          <li><a href="Bagian.php">bagian</a></li>
                          <li><a href="Struk.php">struk</a></li>
                </ul>
              </div>
                    </li>

                    <li><a href="../logout.php" class="collapsible-header">Keluar<i class="material-icons">exit_to_app</i></a></li>

                </ul>
              </li>

          </ul>
    </header>
    <!--end of header-->

    <!--content-->
    <main>
      <div class="row container">
        <div class="col s12 m12 l9 offset-l3">

          <!--content user-->
          <div class="col s12 m6 l6">
                    <div class="card blue-grey lighten-5">
                        <div class="card-content blue-text text-darken-2">
                          <span class="card-title">Pegawai

                              <p class="right"><?php echo $jml; ?></p>
                          </span>
                        </div>

                        <div class="card-action">
                          <i class="material-icons left blue-text text-darken-2">visibility</i>
                          <a href="pegawai.php" class="blue-text text-darken-2">Lihat</a>
                        </div>
                    </div>
                  </div>

                  <!--content Barang Masuk-->
          <div class="col s12 m6 l6">
                    <div class="card blue-grey lighten-5">
                        <div class="card-content blue-text text-darken-2">
                          <span class="card-title">Dokter

                              <p class="right"><?php echo $jml2; ?></p>
                          </span>
                        </div>

                        <div class="card-action">
                          <i class="material-icons left blue-text text-darken-2">visibility</i>
                          <a href="dokter.php" class="blue-text text-darken-2">Lihat</a>
                        </div>
                    </div>
                  </div>

                  <!--content Gudang-->
          <div class="col s12 m6 l6">
                    <div class="card blue-grey lighten-5">
                        <div class="card-content blue-text text-darken-2">
                          <span class="card-title">Pasien

                              <p class="right"><?php echo $jml3; ?></p>
                          </span>
                        </div>

                        <div class="card-action">
                          <i class="material-icons left blue-text text-darken-2">visibility</i>
                          <a href="Pasien.php" class="blue-text text-darken-2">Lihat</a>
                        </div>
                    </div>
                  </div>


                  <!--content Barang Keluar-->
          <div class="col s12 m6 l6">
                    <div class="card blue-grey lighten-5">
                        <div class="card-content blue-text text-darken-2">
                          <span class="card-title">Obat

                              <p class="right"><?php echo $jml4; ?></p>
                          </span>
                        </div>

                        <div class="card-action">
                          <i class="material-icons left blue-text text-darken-2">visibility</i>
                          <a href="Obat.php" class="blue-text text-darken-2">Lihat</a>
                        </div>
                    </div>
                  </div>
                    <!--content Gudang-->
          <div class="col s12 m6 l6">
                    <div class="card blue-grey lighten-5">
                        <div class="card-content blue-text text-darken-2">
                          <span class="card-title">Kamar

                              <p class="right"><?php echo $jml5; ?></p>
                          </span>
                        </div>

                        <div class="card-action">
                          <i class="material-icons left blue-text text-darken-2">visibility</i>
                          <a href="kamar.php" class="blue-text text-darken-2">Lihat</a>
                        </div>
                    </div>
                  </div>
                  <!--content Gudang-->
          <div class="col s12 m6 l6">
                    <div class="card blue-grey lighten-5">
                        <div class="card-content blue-text text-darken-2">
                          <span class="card-title">Perawatan

                              <p class="right"><?php echo $jml6; ?></p>
                          </span>
                        </div>

                        <div class="card-action">
                          <i class="material-icons left blue-text text-darken-2">visibility</i>
                          <a href="perawatan.php" class="blue-text text-darken-2">Lihat</a>
                        </div>
                    </div>
                  </div>
                  <!--content Gudang-->
          <div class="col s12 m6 l6">
                    <div class="card blue-grey lighten-5">
                        <div class="card-content blue-text text-darken-2">
                          <span class="card-title">Spesialis

                              <p class="right"><?php echo $jml7; ?></p>
                          </span>
                        </div>

                        <div class="card-action">
                          <i class="material-icons left blue-text text-darken-2">visibility</i>
                          <a href="spesialis.php" class="blue-text text-darken-2">Lihat</a>
                        </div>
                    </div>
                  </div>
                  <!--content Gudang-->
          <div class="col s12 m6 l6">
                    <div class="card blue-grey lighten-5">
                        <div class="card-content blue-text text-darken-2">
                          <span class="card-title">Bagian

                              <p class="right"><?php echo $jml8; ?></p>
                          </span>
                        </div>

                        <div class="card-action">
                          <i class="material-icons left blue-text text-darken-2">visibility</i>
                          <a href="Bagian.php" class="blue-text text-darken-2">Lihat</a>
                        </div>
                    </div>
                  </div>
                  <!--content Gudang-->
          <div class="col s12 m6 l6">
                    <div class="card blue-grey lighten-5">
                        <div class="card-content blue-text text-darken-2">
                          <span class="card-title">Struk

                              <p class="right"><?php echo $jml9; ?></p>
                          </span>
                        </div>

                        <div class="card-action">
                          <i class="material-icons left blue-text text-darken-2">visibility</i>
                          <a href="struk.php" class="blue-text text-darken-2">Lihat</a>
                        </div>
                    </div>
                  </div>
              </div>
        </div>
      </div>
    </main>
        <!--end of content-->


  </div>

  <script type="text/javascript" src="../jsa/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="../jsa/materialize.min.js"></script>
  <script type="text/javascript">
      $(document).ready(function(){
        $('.collapsible').collapsible();
        $(".button-collapse").sideNav();
    });
  </script>
</body>
</html>
