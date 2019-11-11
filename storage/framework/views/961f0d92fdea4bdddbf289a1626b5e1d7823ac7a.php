<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Code Challenge</title>
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: sans-serif;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .img {
            width: 5vw
        }

        .search {
            margin-left: 100px;
        }
    </style>
</head>
<body>
<div class="flex-center full-height">
    <div>
      <table>
              <?php $__currentLoopData = $track; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img src='<?php echo e($info->album->images[1]->url); ?>'>
            <tr><td>Track name:</td><td><?php echo e($info->name); ?></td></tr>
            <tr><td>Track number:</td><td><?php echo e($info->track_number); ?></td></tr>
            <tr><td>From Album:</td><td><?php echo e($info->album->name); ?></td></tr>
            <tr><td>Album artist:</td>
                <?php $__currentLoopData = $info->artists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <td><?php echo e($artist->name); ?>,</td>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>

    </div>

</div>
</body>
</html>
<?php /**PATH C:\Users\shrnds\Desktop\SpotifySearch\codeB\resources\views/info_track.blade.php ENDPATH**/ ?>