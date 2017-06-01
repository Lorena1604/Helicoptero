<?php $title = "Bienvenido"; ?>
<?php include_once '../plantillas/head.php'; ?>
<?php include_once '../plantillas/nav.php'; ?>
</div>
<div class="content">
    <br/>
    <div class="fondo">
        <br/>
        <br/>
        <center>
            <img class="img" src="../../estilos/img/helirep.png" alt=""/>
        </center>
        <h1 class="letra">BIENVENIDO<br/>
            <?php echo $_SESSION['cedu'];?>
        </h1>
        <br/>
        <br/>
    </div>
    <br/>
</div>
<style>
    .fondo{
        background-image: url(../../estilos/img/03.jpg);
        background-size: 100% auto;
        border-radius: 10px;
    }
    .img{
        width: 20%;
    }
    .letra{
        font-weight:bold;
        color: #ff990e;
        text-align: center;
    }
</style>
<?php include_once '../plantillas/footer.php'; ?>