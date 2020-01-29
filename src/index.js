( function( wp ) {
    var registerPlugin = wp.plugins.registerPlugin;
    var PluginSidebar = wp.editPost.PluginSidebar;
    var el = wp.element.createElement;
 
    registerPlugin( 'react-admin-example', {
        render: function() {
            return el( PluginSidebar,
                {
                    name: 'react-admin-example',
                    icon: 'admin-post',
                    title: 'My plugin sidebar',
                },
                'Meta field'
            );
        },
    } );
} )( window.wp );