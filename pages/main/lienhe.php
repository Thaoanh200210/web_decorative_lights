
<?php 
    $sql_lh = "SELECT * FROM lienhe WHERE id=1 ";
    $query_lh = mysqli_query($mysqli,$sql_lh);
?>
<style>
    /* #tieude{
    font-weight: bold;
    font-size:40px;
    font-family: Georgia; */
    

    @-webkit-keyframes my {
	 0% { color: #F8CD0A; } 
	 50% { color: #fff;  } 
	 100% { color: #F8CD0A;  } 
    }
    @-moz-keyframes my { 
        0% { color: #F8CD0A;  } 
        50% { color: #fff;  }
        100% { color: #F8CD0A;  } 
    }
    @-o-keyframes my { 
        0% { color: #F8CD0A; } 
        50% { color: #fff; } 
        100% { color: #F8CD0A;  } 
    }
    @keyframes my { 
        0% { color: #F8CD0A;  } 
        50% { color: #fff;  }
        100% { color: #F8CD0A;  } 
    } 
    .tieude {
            background-color: white ;
            font-size:24px;
            font-weight:bold;
        -webkit-animation: my 3000ms infinite;
        -moz-animation: my 3000ms infinite; 
        -o-animation: my 3000ms infinite; 
        animation: my 3000ms infinite;
        font-size: 40px;

    }
    
    .baophu{
        border-radius: 5px;
    }

</style>
<div class="container" style="padding:0px 50px">
        <div class="row"></div>
        <div class="baophu">
        <h2 class="text-center p-2 mt-2 ml-5 mr-5 tieude rounded" id="tieude" >LIÊN HỆ</h2>
        </div>
        <div class="row">
        <div class="col-3">

                    <div class="card mt-3">
                        <article class="card-group-item">
                            <header class="card-header"><h6 class="title" style="font-weight: bold;font-size:20px;">DANH MỤC ĐÈN</h6></header>
                            <div class="filter-content">
                                <div class="list-group list-group-flush">
                                <?php 
                                    $sql_danhmuc ="SELECT * FROM danhmuc ORDER BY id DESC";
                                    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                                    while($row = mysqli_fetch_array($query_danhmuc)){
                                ?>

                                <a style="text-decoration: none;font-weight: bold;font-size:17px;" href="index.php?quanly=danhmucsanpham&id=<?php echo ($row["id"]) ?>" class="list-group-item  border border-white"><?php echo ($row["tendanhmuc"]) ?>  </a>

                                <?php 
                                }
                                ?>
                            </div>  <!-- list-group .// -->
                            </div>
                        </article> <!-- card-group-item.// -->

                    </div> <!-- card.// -->



                    <!-- khoảng giá -->
                    <div class="card mt-3">
                        <article class="card-group-item">
                            <header class="card-header"><h6 class="title" style="font-weight: bold;font-size:20px;">KHOẢNG GIÁ</h6></header>
                            <div class="filter-content">
                                <div class="list-group list-group-flush">
                                <?php 
                                    $sql_giasp ="SELECT * FROM giasanpham ORDER BY id_gia DESC";
                                    $query_giasp = mysqli_query($mysqli,$sql_giasp);
                                    while($row = mysqli_fetch_array($query_giasp)){
                                ?>

                                <a style="text-decoration: none;font-weight: bold;font-size:17px;" 
                                href="index.php?quanly=giasanpham&id=<?php echo ($row["id_gia"]) ?>" 
                                class="list-group-item  border border-white">
                                <?php echo ($row["khoanggia"]) ?>  </a>

                                <?php 
                                }
                                ?>
                            </div>  <!-- list-group .// -->
                            </div>
                        </article> <!-- card-group-item.// -->

                    </div> <!-- card.// -->
            </div>

            <div class="col-9">
                <div class="p-2 m-2 text-center border border-warning"  
                style="background-color: white; box-shadow: 0px 2px 10px rgba(255, 215, 0,0.7); height:600px; width:100%">
                        <?php 
                            while($dong = mysqli_fetch_array($query_lh)){ 
                        ?>

                                <h4 class=""> <?php echo $dong['thongtinlienhe'] ?> </h4>
                        <?php
                        } 
                        ?>

                </div>
            </div>
        </div>
</div>