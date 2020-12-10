<?php
include_once('lib/cab.php');
?>
<?php
require_once('lib/conexionBD.php');
$id_emp = $_SESSION['id_emp'];
$sql = "SELECT * FROM clientes WHERE clientes.id_emp = $id_emp";
$result =  $con->query($sql);
$roles = array();
while ($fila =  $result->fetch_array()) {
    $roles[] = $fila;
}
?>

<h2 class="center">Nuevo Prestamo</h2>



<div class="section container ">
    <div class="row">
        <form action="prestamo-insertar-procesa.php" class="col s12" method="post" autocomplete="off">

            <div class="row card-panel">
                <div class="input-field col s6">
                    <input type="text" name="" id="id" value="<? echo $_SESSION['id_emp'] ?> | <? echo $_SESSION['nombre'] ?> <? echo $_SESSION['apellidos'] ?>" readonly>
                    <label for="id">Datos del Asesor</label>
                </div>

                <div class="input-field col s6">
                    
                    <select name="id_cli" class="form-control" id="sele" required autofocus>

                        <option value="">-- Seleccione --</option>

                        <?php foreach ($roles as $item) : ?>
                            <option value="<?= $item['id_cli'] ?>"><?= $item['nombre']; ?> <?= $item['apellidos'] ?> | CI.: <?= $item['ci']; ?></option>
                        <?php endforeach ?>

                    </select>
                    <label for="sele"> Datos del Cliente</label>    
                </div>

                <div class="input-field col s6">

                    <label for="">Monto del Prestamo</label>
                    <input id="a" type="number" name="monto" class="form-control" required autofocus>
                </div>


                <div class="input-field col s6">

                    <label for="">Nro. de Meses a pagar</label>
                    <input id="b" type="number" name="t_pago" class="form-control" onChange="AddMes()" required autofocus>

                </div>
                <div class="input-field col s6">
                    
                    <input id="r" type="number" name="cuota" placeholder="" class="form-control" readonly>
                    <label for="">Couta Mensual en Bs.</label>

                    <div class="py-2" align="center">
                        <button class="btn blue waves-effect waves-light" type="button" onclick="division()">Calcular</button>
                    </div>
                </div>
                <div class="input-field col s6">
                    <label for="">Fecha de Prestamo</label>


                    <input type="text" id="MyDate" name="fecha_ini" class="form-control" >

                </div>

                <div class="input-field col s6">
                
                    <input type="text" id="MyDate3" name="fecha_fin" placeholder="" class="form-control">
                    <label for="">Fecha de Conclusion de Prestamo</label>
                </div>






                <div align="center">
                    <button type="submit" class="btn green waves-effect waves-light">Guardar</button>

                    <a class="btn red waves-effect waves-light" href="prestamos.php">Volver</a>
                </div>
            </div>

        </form>


        <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script>
            function division() {
                var numero1 = Number($("#a").val());
                var numero2 = Number($("#b").val());
                var div = numero1 / numero2;
                var resultado = $("#r").val(div);
            }

            function interes() {
                var numero1 = Number($('#'))
            }
        </script>




        <script>
            var obj = document.getElementById('MyDate');
            var obj2 = document.getElementById('b');
            var obj3 = document.getElementById('MyDate3');
            obj.value = setFormato(new Date());

            function AddMes() {
                var fecha = new Date(obj.value);

                fecha.setMonth(fecha.getMonth() + +(obj2.value));
                obj3.value = setFormato(fecha);
            }

            function setFormato(fecha) {
                var day = ("0" + fecha.getDate()).slice(-2);
                var month = ("0" + (fecha.getMonth() + 1)).slice(-2);
                var date = (month) + "-" + (day) + "-" + fecha.getFullYear();
                return date;
            }
        </script>

        <?php
        include_once('lib/pie.php');
        ?>