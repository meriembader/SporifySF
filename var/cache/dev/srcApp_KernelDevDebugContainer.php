<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIfUWlPJ\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIfUWlPJ/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIfUWlPJ.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIfUWlPJ\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerIfUWlPJ\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'IfUWlPJ',
    'container.build_id' => '375dc841',
    'container.build_time' => 1620992925,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIfUWlPJ');
