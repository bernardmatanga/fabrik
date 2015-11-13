/**
 * Birthday Element
 *
 * @copyright: Copyright (C) 2005-2015, fabrikar.com - All rights reserved.
 * @license:   GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */

var FbBirthday = my.Class(FbElement, {

	constructor: function (element, options) {
		this.plugin = 'birthday';
		this.default_sepchar = '-';
		FbBirthday.Super.call(this, element, options);
	},

	getValue: function () {
		var v = [];
		if (!this.options.editable) {
			return this.options.value;
		}
		this.getElement();

		this._getSubElements().each(function () {
			v.push($(this).val());
		});
		return v;
	},

	update: function (val) {
		if (typeof(val) === 'string') {
			var sepchar = this.options.separator;
			if (val.indexOf(sepchar) === -1) {
				sepchar = this.default_sepchar;
			}
			val = val.split(sepchar);
		}
		this._getSubElements().each(function (f, x) {
			f.value = val[x];
		});
	}
});
