wp.blocks.registerBlockStyle( 'core/paragraph', {
    name: 'fancy-parahraph',
    label: 'Fancy Parahraph',
} );

wp.domReady( function () {
    wp.blocks.unregisterBlockStyle( 'core/social-links', 'pill-shape' );
} );