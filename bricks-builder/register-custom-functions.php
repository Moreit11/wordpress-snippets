<?php
// register your functions to enable them in bricks builder https://academy.bricksbuilder.io/article/filter-bricks-code-echo_function_names/
add_filter( 'bricks/code/echo_function_names', function() {
  return [
    'custom_function_name_1',
    'custom_function_name_2'

  ];
} );

?>
