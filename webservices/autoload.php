<?php


 function autoload_559fd1e80c4450a759bf7de42c482a3a($class)
{
    $classes = array(
        'RumpunJabatan' => __DIR__ .'/RumpunJabatan.php',
        'QueryRumpunResponse' => __DIR__ .'/QueryRumpunResponse.php',
        'Rumpun' => __DIR__ .'/Rumpun.php',
        'CreateRumpunResponse' => __DIR__ .'/CreateRumpunResponse.php',
        'ModifyRumpunResponse' => __DIR__ .'/ModifyRumpunResponse.php',
        'RemoveRumpunResponse' => __DIR__ .'/RemoveRumpunResponse.php',
        'QueryJabatanResponse' => __DIR__ .'/QueryJabatanResponse.php',
        'RemoveJabatanResponse' => __DIR__ .'/RemoveJabatanResponse.php',
        'ModifyJabatanResponse' => __DIR__ .'/ModifyJabatanResponse.php',
        'CreateJabatanResponse' => __DIR__ .'/CreateJabatanResponse.php',
        'Jabatan' => __DIR__ .'/Jabatan.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_559fd1e80c4450a759bf7de42c482a3a');

// Do nothing. The rest is just leftovers from the code generation.
{
}
