<div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="noCliente" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <?php $cliente = VentasController::getTempController();?>
                <h5 class="modal-title" id="exampleModalLabel">
                <?php foreach ($cliente as $key): ?>
                <?php endforeach?>
              <div class="alert alert-info" role="alert">
                <center><span class="text-warning"><?php echo ucwords($key['nombreCliente']) . ' ' . ucwords($key['apellidoCliente']) ?>:</span>
                </center>
                 <small><i class="text-danger">(Es el cliente al que le esta vendiendo.)</i></small>
              </div>
                </h5>
            </div>
            <div class="modal-body">
                <div class="alert alert-warning" role="alert">
                    <strong>Error! </strong> Usted le quiere vender a dos clientes distintos en la misma factura.Por favor verificar dicho campo.
                </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
