<?php $__env->startSection('content'); ?>
    <h1>Ingrese curso</h1>
    <form method="post" action="/guardar-curso">
        <?php echo csrf_field(); ?>
        <input type="text" name="nombre" placeholder="Ingrese Nombre Curso"> <br>
        <input type="text" name="num_horas" placeholder="Ingrese Cantidad de Horas"> <br>
        <input type="text" name="capitulos" placeholder="Ingrese cantidad de Capitulos"><br>
        <input type="text" name="descripcion" placeholder="Ingrese Descripcion"><br>
        <input type="submit" value="Guardar">
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\proyecto\resources\views/crearCurso.blade.php ENDPATH**/ ?>