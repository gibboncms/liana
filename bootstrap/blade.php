<?php

$blade = $app['view']->getEngineResolver()->resolve('blade')->getCompiler();

$blade->directive('setting', function ($key) {
    $key = trim($key, '()');
   return "<?php echo liana('settings')->get({$key}); ?>";
});

$blade->directive('block', function ($id) {
    $id = trim($id, '()');
   return "<?php echo markdown(liana('blocks')->contents({$id})); ?>";
});
