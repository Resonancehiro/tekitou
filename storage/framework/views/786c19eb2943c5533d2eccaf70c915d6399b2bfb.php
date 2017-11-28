

<?php $__env->startSection('content'); ?>
<html lang="<?php echo e(config('app.locale')); ?>">


<title>TOP</title>

<div  align="center">

<p>TOP</p>

<th>

    <a href="/error"><input type="submit" value="ITパスポート"></a></br></br>

    <a href="/FE_top"><input type="submit" value="基本情報技術者試験"></a></br></br>

    <a href="/error"><input type="submit" value="応用情報技術者試験"></a>

</th>


</html>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>