<?php

/*
 * (c) Hubert Perron <hubert.perron@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * sfWidgetFormDatePickerTime represents an JQueryUI Datepicker and a drop down time select.
 */

class sfWidgetFormDatePickerTime extends sfWidgetFormDateTime {

	/**
	 * Returns the date widget.
	 *
	 * @param  array $attributes  An array of attributes
	 *
	 * @return sfWidgetForm A Widget representing the date
	 */
	protected function getDateWidget($attributes = array()) {
		return new sfWidgetFormDatePicker($this->getOptionsFor('date'), $this->getAttributesFor('date', $attributes));
	}

}


