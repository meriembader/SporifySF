<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVjKVLIN\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVjKVLIN/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVjKVLIN.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVjKVLIN\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerVjKVLIN\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'VjKVLIN',
    'container.build_id' => '10b67b31',
    'container.build_time' => 1621117457,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVjKVLIN');
