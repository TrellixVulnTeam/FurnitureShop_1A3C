Preview: resin-zone.com

Project status: Finished

It's necessery to add wp-content/mu-plugins/resin-post.types.php :

```
<?php
    function resin_post_types(){

        register_post_type('produkt', array(

            'public' => true,

            'labels' => array(

                'name' => 'Produkty'

            ),

        ));

    }

    add_action('init', 'resin_post_types');

?>
```
