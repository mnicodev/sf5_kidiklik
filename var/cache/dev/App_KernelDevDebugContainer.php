<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJmv8VNi\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJmv8VNi/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJmv8VNi.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJmv8VNi\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJmv8VNi\App_KernelDevDebugContainer([
    'container.build_hash' => 'Jmv8VNi',
    'container.build_id' => '0487a229',
    'container.build_time' => 1575904706,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJmv8VNi');
