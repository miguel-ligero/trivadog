<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCbkscwv\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCbkscwv/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCbkscwv.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCbkscwv\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCbkscwv\App_KernelDevDebugContainer([
    'container.build_hash' => 'Cbkscwv',
    'container.build_id' => '839ead1b',
    'container.build_time' => 1605546069,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCbkscwv');