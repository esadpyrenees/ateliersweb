/*!
 * Vanilla JS Lettering.js
 * A vanilla JS fork of http://letteringjs.com/ by Dave Rupert
 * (c) 2019 Chris Ferdinandi, MIT License, https://gomakethings.com
 */
var Lettering = (function () {

	'use strict';


	/**
	 * Create the Constructor object
	 */
	var Constructor = function (selector) {

		//
		// Error Checks
		//

		// Make sure a selector is provided
		if (!selector) {
			throw new Error('Please provide a valid selector');
		}


		//
		// Variables
		//

		// Get all of the elements for this instantiation
		var elems = Array.prototype.slice.call(document.querySelectorAll(selector));

		// Hashed string to replace line breaks with
		var str = 'eefec303079ad17405c889e092e105b0';

		// Public APIs object
		var publicAPIs = {};


		//
		// Methods
		//

		/**
		 * Replace line breaks in a string
		 * @param  {Node} elem The element to replace line breaks on
		 */
		var replaceBreaks = function (elem) {
			var r = document.createTextNode(str);
			Array.prototype.slice.call(elem.querySelectorAll('br')).forEach(function (br) {
				elem.replaceChild(r.cloneNode(), br);
			});
		};

		/**

		 * @return {[type]} [description]
		 */

		/**
		 * Wrap each letter, word, or line in a span and add attributes
		 * @param  {Array} elems       The elements to wrap content in
		 * @param  {String}  splitStr  The string to use as the delimiter
		 * @param  {String}  className The class prefix to use for wrapped content
		 * @param  {String}  after     String to add after each item
		 * @param  {Boolean} breaks    If true, replace line breaks
		 * @return {Array}             The elements that were wrapped
		 */
		var wrap = function (elems, splitStr, className, after, breaks) {
			elems.forEach(function (elem) {
				var original = elem.textContent;
				if (breaks) {
					replaceBreaks(elem);
				}
				var text = elem.textContent.split(splitStr).map(function (item, index) {
					return '<span class="' + className + (index + 1) + '" aria-hidden="true">' + item + '</span>' + after;
				}).join('');
				elem.setAttribute('aria-label', original);
				elem.innerHTML = text;
			});
			return elems;
		};

		/**
		 * Wrap each letter in a span and class
		 * @return {Array} The elements that were wrapped
		 */
		publicAPIs.letters = function () {
			return wrap(elems, '', 'char', '');
		};

		/**
		 * Wrap each word in a span and class
		 * @return {Array} The elements that were wrapped
		 */
         publicAPIs.words = function () {
			return wrap(elems, ' ', 'word', ' ');
		};


        /**
		 * Wrap each word in a span and class
		 * @return {Array} The elements that were wrapped
		 */
		publicAPIs.wordsandletters = function () {
            
			let els = new Lettering(elems).letters(); //publicAPIs.letters(elems, 'char');
			return wrap(els, ' ', 'word', ' ');
		};


		/**
		 * Wrap each line in a span and class
		 * @return {Array} The elements that were wrapped
		 */
		publicAPIs.lines = function () {
			return wrap(elems, str, 'line', '', true);
		};


		//
		// Return the Public APIs
		//

		return publicAPIs;

	};


	//
	// Return the Constructor
	//

	return Constructor;

})();