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
            margin: 50px;
        }
        .content {
            position:absolute;
            height:90%; /* = 100% - 2*10% padding */
            width:90%; /* = 100% - 2*5% padding */
            padding: 1% 1%;
        }
        .square {
            float:left;
            position: relative;
            width: relative;
        	border: 1px solid black;
            padding: 1%; /* = width for a 1:1 aspect ratio */
            margin:1%;
            overflow:hidden;
        }
        .full-height {
            height: 100vh;
        }

        .result {
        }

    </style>
</head>
<body>

<div class="content">
    <div>
        Your Search Term Was: <b><?php echo e($searchTerm); ?></b>
    </div>
    <br>
    <div class="square">
      <strong>Artist</strong>
      <table>
      <?php  $i=0 ?>
      <?php $__currentLoopData = $artist_results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><a href="<?php echo e(route('info_artist', ['id'=>$result->id ])); ?>"><img src='<?php echo e($artist_pics[$i]->url); ?>'><br> <?php echo e($result->name); ?></a></td>
      </tr>
      <?php $i++ ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    </div>
    <div class="square">
      <strong>Album</strong>
      <table>
        <?php  $i=0 ?>
      <?php $__currentLoopData = $album_results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><a href="<?php echo e(route('info_album', ['id'=>$result->id ])); ?>"><img src='<?php echo e($album_pics[$i]->url); ?>'><br><?php echo e($result->name); ?></a></td>
      </tr>
      <?php $i++ ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    </div>
    <div class="square">
      <strong>Tracks</strong>
      <table>
      <?php $__currentLoopData = $track_results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><a href="<?php echo e(route('info_track', ['id'=>$result->id ])); ?>"><img src='<?php echo e($result->album->images[2]->url); ?>'><br><?php echo e($result->name); ?></a></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    </div>
</div>
</body>
</html>
<?php /**PATH C:\Users\shrnds\Desktop\SpotifySearch\codeB\resources\views/search.blade.php ENDPATH**/ ?>