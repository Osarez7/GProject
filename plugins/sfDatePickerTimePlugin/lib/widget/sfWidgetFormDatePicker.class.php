<?php

/*
 * (c) Hubert Perron <hubert.perron@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * sfWidgetFormDatePicker represents an JQueryUI datepicker.
 */

class sfWidgetFormDatePicker extends sfWidgetFormInputText
{
  /**
   * Constructor.
   *
   * Available options:
   *
   *  * jq_picker_options: An array of key-values used as options by the JQueryUI datepicker
   *
   * @param array $options     An array of options
   * @param array $attributes  An array of default HTML attributes
   *
   * @see sfWidget
   */
  public function __construct($options = array(), $attributes = array())
  {
    $this->addOption('jq_picker_options', array());

    parent::__construct($options, $attributes);

    $default_picker_options = array(
      'dateFormat' => 'yy-mm-dd',
      // Add other datepicker default options here
      // http://jqueryui.com/demos/datepicker/#options
    );

    $this->setOption('jq_picker_options', array_merge($default_picker_options, $this->getOption('jq_picker_options')));
  }

  /**
   * Renders the widget.
   *
   * @param  string $name    The element name
   * @param  string $value     The value displayed in this widget
   * @param  array  $attributes  An array of HTML attributes to be merged with the default HTML attributes
   * @param  array  $errors    An array of errors for the field
   *
   * @return string An HTML tag string
   *
   * @see sfWidgetForm
   */
  public function render($name, $value = null, $attributes = array(), $errors = array())
  {
    // If present, strip out the time part
    if (!is_array($value)) {
      $parts = explode(' ', $value);
      $value = count($parts) ? $parts[0] : $value;
    } else {
      $value = $value['date'];
    }
    $epoch_date = strtotime($value);
    
    // Render the sfWidgetFormInputText
    $html = parent::render($name . '[date]', $value, $attributes, $errors);

    // Render separate hidden field for the month, the day and the year
    // Theses fields are used by the sfValidatorDateTime
    $widget_month = new sfWidgetFormInputHidden();
    $widget_day = new sfWidgetFormInputHidden();
    $widget_year = new sfWidgetFormInputHidden();

    $widget_date_selector = $this->widgetNameToJQuerySelector($name . '[date]');
    $widget_month_selector = $this->widgetNameToJQuerySelector($name . '[month]');
    $widget_day_selector = $this->widgetNameToJQuerySelector($name . '[day]');
    $widget_year_selector = $this->widgetNameToJQuerySelector($name . '[year]');
    
    if (!empty($epoch_date)) {
      $html .= $widget_month->render($name . '[month]', date('n', $epoch_date));
      $html .= $widget_day->render($name . '[day]', date('j', $epoch_date));
      $html .= $widget_year->render($name . '[year]', date('Y', $epoch_date));
    } else {
      $html .= $widget_month->render($name . '[month]', '');
      $html .= $widget_day->render($name . '[day]', '');
      $html .= $widget_year->render($name . '[year]', '');
    }

    // Generate the datePicker javascript code
    if (version_compare(PHP_VERSION, '5.3.0') >= 0) {
      $jq_picker_options = json_encode($this->getOption('jq_picker_options'), JSON_FORCE_OBJECT);
    } else {
      $jq_picker_options = json_encode($this->getOption('jq_picker_options'));
    }
    $jq_picker_options = str_replace('\\/', '/', $jq_picker_options); // Fix for: http://bugs.php.net/bug.php?id=49366

    $html .= <<<EOHTML
	<script type="text/javascript">
		$(function(){

			var fillHiddenFields = function(){
				var date = $("$widget_date_selector").datepicker("getDate");
				$("$widget_month_selector").val(date.getMonth() + 1);
				$("$widget_day_selector").val(date.getDate());
				$("$widget_year_selector").val(date.getFullYear());
			}

			$("$widget_date_selector").datepicker(
				$jq_picker_options
			);

			$("$widget_date_selector").change(fillHiddenFields);
			$("$widget_date_selector").datepicker("option", "onSelect", fillHiddenFields);

		});
	</script>
EOHTML;

    return $html;
  }

  /**
   * Convert a widget name to a JQuery selector
   *
   * @param  string $name    The element name
   *
   * @return string An HTML tag string
   *
   */
  private function widgetNameToJQuerySelector($name)
  {
    return 'input[name=\'' . strtr($name, array('[' => '\\\[', ']' => '\\\]')) . '\']';
  }

}


