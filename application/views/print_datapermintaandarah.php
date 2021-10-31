<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/img/logo-title.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Apochecker</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/pe-icon-7-stroke.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/demo.css');?>">
    <!-- Animation library for notifications   -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.min.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sass/light-bootstrap-dashboard.scss');?>">

    <!--  Light Bootstrap Table core CSS    -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/light-bootstrap-dashboard.css');?>" />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Roboto:400,700,300'>
    <link rel='stylesheet' type='text/css' href="<?php echo base_url('assets/css/pe-icon-7-stroke.css');?>" />

    <!--  Table CSS    -->
    <style>
    table,
    th,
    td {
        border: 2px solid black;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 10px;
    }

    th {
        background-color: black;
        color: white;
    }
    </style>

    <!--  JQuery Slide and Show/Hidden    -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#flip").click(function() {
            $("#panel").slideToggle("slow");
        });
    });
    </script>
    <style>
    #panel,
    #flip {
        text-align: left;
    }

    #panel {
        display: none;
    }
    </style>

</head>

<body>

    <div class="wrapper">

        <!--  SIDEBAR    -->
        <?php require("application/include/sidebar.php"); ?>

        <div class="main-panel">
            <!--  HEADER    -->
            <?php require("application/include/header.php"); ?>

            <!-- Content Was Here -->
            <div class="content">
                <div class="container-fluid">

                    <h3>Data Permintaan Darah UTD PMI Kabupaten Bandung April 2017 - Maret 2018</h3>
                    <table align="center" cellspacing="0" cellpadding="5" width="100%">
                        <thead>
                            <th>
                                <center>No.</center>
                            </th>
                            <th>
                                <center>Bulan</center>
                            </th>
                            <th>
                                <center>Tahun</center>
                            </th>
                            <th>
                                <center>Golongan A/Labu</center>
                            </th>
                            <th>
                                <center>Golongan B/Labu</center>
                            </th>
                            <th>
                                <center>Golongan O/Labu</center>
                            </th>
                            <th>
                                <center>Golongan AB/Labu</center>
                            </th>
                            <!--hapus aksi-->
                        </thead>
                        <tbody>
                            <?php
                            $no=1;
                                 foreach ($permintaan_darah as $a) {
                                   echo "<tr>
                                            <td>$no</td>
                                            <td>$a->bulan</td>
                                            <td>$a->tahun</td>
                                            <td>$a->gol_a</td>
                                            <td>$a->gol_b</td>
                                            <td>$a->gol_o</td>
                                            <td>$a->gol_ab</td>
                                        </tr>";
                                    $no++;
                                    //hapus tombol edit dan delete
                                }
                            ?>
                        </tbody>
                    </table>
                    <br />
                    <!--hapus tombol tambah data dan cetak laporan-->
                </div>
            </div>

            <script>
            window.load = print_l();

            function print_l() {
                window.print();
            }
            </script>
            <!-- Content Was Here -->
            <!-- hapus footer -->

        </div>
    </div>


</body>

<!--   Core JS Files   -->
<script src="http://localhost/Prediksistokdarah/assets/js/jquery.min.js" type="text/javascript"></script>
<script src="http://localhost/Prediksistokdarah/assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script type="text/javascript" src="http://localhost/Prediksistokdarah/assets/js/bootstrap-checkbox-radio-switch.js">
</script>

<!--  Charts Plugin -->
<script type="text/javascript" src="http://localhost/Prediksistokdarah/assets/js/chartist.min.js"></script>
<script type="text/javascript" src="http://localhost/Prediksistokdarah/assets/js/demo.js"></script>
<script type="text/javascript" src="http://localhost/Prediksistokdarah/assets/js/docs.js"></script>

<!--  Notifications Plugin    -->
<script type="text/javascript" src="http://localhost/Prediksistokdarah/assets/js/bootstrap-notify.js"></script>
<script type="text/javascript" src="http://localhost/Prediksistokdarah/assets/js/bootstrap-select.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script type="text/javascript" src="http://localhost/Prediksistokdarah/assets/js/light-bootstrap-dashboard.js"></script>
<script type="text/javascript" src="http://localhost/Prediksistokdarah/assets/js/ie-emulation-modes-warning.js">
</script>
<script type="text/javascript" src="http://localhost/Prediksistokdarah/assets/js/ie10-viewport-bug-workaround.js">
</script>


</html>