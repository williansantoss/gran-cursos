<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXBxh51H\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXBxh51H/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXBxh51H.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXBxh51H\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerXBxh51H\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'XBxh51H',
    'container.build_id' => '6187fa17',
    'container.build_time' => 1549309625,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXBxh51H');
