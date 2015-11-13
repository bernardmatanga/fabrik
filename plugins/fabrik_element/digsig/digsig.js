/**
 * Slider Element
 *
 * @copyright: Copyright (C) 2005-2015, fabrikar.com - All rights reserved.
 * @license:   GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */

var FbDigsig = my.Class(FbElement, {
    constructor: function (element, options) {
        FbDigsig.Super.call(this, element, options);
        this.plugin = 'digsig';

        if (this.options.editable === true) {
            if (this.element.length === 0) {
                fconsole('no element found for digsig');
                return;
            }
            var oc_options = {
                defaultAction: 'drawIt',
                lineTop      : '100',
                output       : '#' + this.options.sig_id,
                canvas       : '#' + this.element.prop('id') + '_oc_pad',
                drawOnly     : true
            };
            this.element.signaturePad(oc_options).regenerate(this.options.value);
        }
        else {
            $('#' + this.options.sig_id).signaturePad({displayOnly: true}).regenerate(this.options.value);
        }
    },

    getValue: function () {
        return this.options.value;
    },


    addNewEvent: function (action, js) {
        if (action === 'load') {
            this.loadEvents.push(js);
            this.runLoadEvent(js);
            return;
        }
        if (action === 'change') {
            this.changejs = js;
        }
    }
});