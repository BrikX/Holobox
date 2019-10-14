<?php require_once 'header.php' ?>

<div class="modal fade" id="ConfirmMail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4><?php echo $gracias; ?></h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><span><?php echo $aceptar; ?></span></button>
      </div>
    </div>
  </div>
</div>

<section id="ventas">
    <div class="container-fluid">
      <div class="row">
        <div class="ventas-container">
          <div class="col-md-6">
          	<img src="img/ventas-phone.png" class="img-responsive">
          </div>

          <div class="col-md-6">
      		<div class="ventas-text">
                <h1><?php echo $ventas; ?></h1>
                <p><?php echo $productos1; ?><span>Holobox</span>,<br><?php echo $productos2; ?></p>
                <button class="btn btn-default" type="button"  id="buttonVideo"><span><?php echo $video; ?></span></button>
          	</div>
          </div>
        </div>
      </div>
    </div>
</section>

<section id="clientes">
    <div class="container">
      <div class="row">
        <div class="clientes-container">
          <div class="col-md-6">
      		<div class="clientes-text">
                <h1><?php echo $clientes; ?></h1>
                <p><?php echo $vinculos; ?></p>
          	</div>
          </div>

          <div class="col-md-6">
            <img src="img/holobox-cel.png" class="img-responsive">
          </div>
        </div>
      </div>
    </div>
</section>

<section id="pasos">
    <div class="container">
      <div class="row">
        <div class="pasos-container">
          <h1 class="title"><?php echo $pasos; ?></h1>
          <div class="col-sm-4">
      		<div class="clientes-item1">
      			<img src="img/clientes-icon1.png" class="img-responsive">
                <h1><?php echo $modelado; ?></h1>
                <p><?php echo $modelarProd; ?></p>
          	</div>
          </div>

          <div class="col-sm-4">
      		<div class="clientes-item2">
      			<img src="img/clientes-icon2.png" class="img-responsive">
                <h1><?php echo $ra; ?></h1>
                <p><?php echo $tecnoAR; ?></p>
          	</div>
          </div>

          <div class="col-sm-4">
      		<div class="clientes-item3">
      			<img src="img/clientes-icon3.png" class="img-responsive">
                <h1><?php echo $tienda; ?></h1>
                <p><?php echo $vincularTienda; ?></p>
          	</div>
          </div>
      </div>
    </div>
</section>

<section id="contacto">
    <div class="container">
      <div class="row">
        <div class="contacto-container">
          <div class="col-md-6">
      		<div class="contacto-text">
                <h1><?php echo $expVentas; ?></h1>
                <p><?php echo $proyecto; ?></p>
          	</div>
          </div>

          <div class="col-md-6">
          	<div class="clientes-form">

                <form id="infoform" action="contacto-email.php" method="post">
                  <h5 class="title"><?php echo $formulario; ?></h5>
                  <div class="form1">
                    <p>
                      <label>
                        <input type="text" class="inp" name="nomape" id="nomape" placeholder="Name"/>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input type="text" class="inp" name="emp" id="emp" placeholder="Company"/>
                      </label>
                    </p>
                  </div>
                  <div class="form2">
                    <p>
                      <label>
                        <input type="text" class="inp" name="emailf" id="emailf" placeholder="Mail" required/>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input type="text" class="inp" name="sitio" id="sitio" placeholder="Web Site"/>
                      </label>
                    </p>
                  </div>

                  <p>
                    <label>
                      <textarea name="mensaje" id="mensaje" placeholder="Message (Optional)"></textarea>
                    </label>
                  </p>

                  <div class="buttonBox">
                    <?php if(!isset($_GET['send'])){ ?>
                      <button type='submit' class="link" id="btnsolicitar"><span><?php echo $solicitar; ?></span></button>
                    <?php }else{ ?>
                      <button type='submit' class="link" id="btnsolicitar"><span><?php echo $solicitar; ?></span></button>
                      <script>
                        $( document ).ready(function() {
                            $('#ConfirmMail').modal('show')
                        });
                      </script>
                    <?php } ?>

                    <!-- <button type='submit' class="link" id="btnsolicitar"><span>Solicitar Info</span></button> -->
                  </div>
                </form>
          	</div>
          </div>
        </div>
      </div>
    </div>
</section>

<?php require_once 'footer.php' ?>
