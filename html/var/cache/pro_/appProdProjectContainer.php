<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPrmrvbx\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPrmrvbx/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerPrmrvbx.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerPrmrvbx\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerPrmrvbx\appProdProjectContainer([
    'container.build_hash' => 'Prmrvbx',
    'container.build_id' => 'a0574226',
    'container.build_time' => 1636989951,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPrmrvbx');