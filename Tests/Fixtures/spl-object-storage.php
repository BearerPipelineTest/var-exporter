<?php

return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
    $o = [
        clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)[\SplObjectStorage::class] ?? \Symfony\Component\VarExporter\Internal\Registry::p(\SplObjectStorage::class)),
        clone ($p[\stdClass::class] ?? \Symfony\Component\VarExporter\Internal\Registry::p(\stdClass::class)),
    ],
    null,
    [
        \SplObjectStorage::class => [
            "\0" => [
                [
                    $o[1],
                    345,
                ],
            ],
        ],
    ],
    $o[0],
    []
);
