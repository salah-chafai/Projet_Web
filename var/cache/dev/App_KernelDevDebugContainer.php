<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLhO2tQx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLhO2tQx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLhO2tQx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLhO2tQx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLhO2tQx\App_KernelDevDebugContainer([
    'container.build_hash' => 'LhO2tQx',
    'container.build_id' => 'e6895f02',
    'container.build_time' => 1748776206,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLhO2tQx');
