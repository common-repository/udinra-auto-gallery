(function () {
    'use strict';

    tinymce.PluginManager.add('udinra_autogal_subscribe', function (editor, url) {
        editor.addButton('udinra_autogal_subscribe', {
            title: 'Udinra Auto Gallery Button',
            image: url + '/../image/autogal.png',

            onclick: function () {
                editor.windowManager.open({
                    title: 'Udinra Auto Gallery',
                    body: [
						{
                            type: 'listbox',
                            name: 'type',
                            label: 'Gallery Type',
                            values: [
                                {text: 'Film Strip', value: 'filmstrip'},
								{text: 'SlideShow', value: 'slideshow'}
                            ]
                        },	
						{
                            type: 'textbox',
							size: 40,
                            name: 'source',
                            label: 'Enter Gallery Source'
                        },								
                        {
                            type: 'listbox',
                            name: 'captiontext',
                            label: 'Caption Text',
                            values: [
                                {text: 'Disable', value: 'false'},
                                {text: 'Folder Name', value: 'foldername'},
								{text: 'File Name', value: 'filename'}
                            ]
                        },					
                    ],
                    onsubmit: function (e) {
                        editor.insertContent('[udinra_autogal type="' + e.data.type
												+ '" source="' + e.data.source 
												+ '" captiontext="' + e.data.captiontext + '" ]' );
                    }
                });
            }
        });
    });
})();


