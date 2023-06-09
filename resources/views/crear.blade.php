<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>Vista Crear</center>
    <br>
    <form action="{{ route('productos.formdata')}}" method="POST">
        <div class="mb-2" align="right">
			<script>
                var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                var f=new Date();
                document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                </script>
		</div>
        <label for="">
            nombre:
            <input type="text" name="nombre">
        </label><br>
        <label for="">
            Precio:
            <input type="text" name="precio">
        </label><br>
        <label for="">
            Existencias:
            <input type="text" name="existencias">
        </label><br>
        <button type="submit">Eviar</button>
    </form>
</body>
</html>
