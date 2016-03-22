<?php


 function autoload_2fdfb5e7c0de3093ebe1f773ef463b26($class)
{
    $classes = array(
        // http://dev.divusi.com/services/RumpunJabatan?wsdl
        'WebServices\RumpunJabatanService' => __DIR__ .'/RumpunJabatanService.php',
        'WebServices\QueryRumpunResponse' => __DIR__ .'/QueryRumpunResponse.php',
        'WebServices\Rumpun' => __DIR__ .'/Rumpun.php',
        'WebServices\CreateRumpunResponse' => __DIR__ .'/CreateRumpunResponse.php',
        'WebServices\ModifyRumpunResponse' => __DIR__ .'/ModifyRumpunResponse.php',
        'WebServices\RemoveRumpunResponse' => __DIR__ .'/RemoveRumpunResponse.php',
        'WebServices\QueryJabatanResponse' => __DIR__ .'/QueryJabatanResponse.php',
        'WebServices\RemoveJabatanResponse' => __DIR__ .'/RemoveJabatanResponse.php',
        'WebServices\ModifyJabatanResponse' => __DIR__ .'/ModifyJabatanResponse.php',
        'WebServices\CreateJabatanResponse' => __DIR__ .'/CreateJabatanResponse.php',
        'WebServices\Jabatan' => __DIR__ .'/Jabatan.php',
        
        // http://dev.divusi.com/services/Pegawai?wsdl
        'WebServices\PegawaiService' => __DIR__ .'/PegawaiService.php',
        'WebServices\QueryPegawaiResponse' => __DIR__ .'/QueryPegawaiResponse.php',
        'WebServices\Pegawai' => __DIR__ .'/Pegawai.php',
        'WebServices\QueryAtasanResponse' => __DIR__ .'/QueryAtasanResponse.php',
        'WebServices\QuerySKPDResponse' => __DIR__ .'/QuerySKPDResponse.php',
        'WebServices\SKPD' => __DIR__ .'/SKPD.php',
        'WebServices\QueryPegawaiBySKPDResponse' => __DIR__ .'/QueryPegawaiBySKPDResponse.php',
        'WebServices\QueryPejabatBySKPDResponse' => __DIR__ .'/QueryPejabatBySKPDResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_2fdfb5e7c0de3093ebe1f773ef463b26');

// Do nothing. The rest is just leftovers from the code generation.
{
}
