<?php
class sfWidgetFormTextDateInputJQueryDatePicker extends sfWidgetForm {
	protected function configure($options = array(), $attributes = array()) {
		$this->addOption('image', false);
		$this->addOption('include_time', false);
		$this->addOption('date_widget', new sfWidgetFormInput());

		parent::configure($options, $attributes);
	}

	public function render($name, $value = null, $attributes = array(), $errors = array()) {
		$includeTime = $this->getOption('include_time');
		$dateWidget = $this->getOption('date_widget');
		if ($dateWidget instanceof sfWidgetFormInput) {
			if ($includeTime) {
				if (!isset($attributes['size'])) $attributes['size'] = 20;
				if (!isset($attributes['maxlength'])) $attributes['maxlength'] = 20;
			} else {
			if (!isset($attributes['size'])) $attributes['size'] = 10;
			if (!isset($attributes['maxlength'])) $attributes['maxlength'] = 10;
			}
		}

		$id = $this->generateId($name);

		$buttonImageCode = '';
		if ($this->getOption('image') !== false) {
			$buttonImageCode = sprintf(', buttonImage: "%s", buttonImageOnly: true', $this->getOption('image'));
		}

		$code = $dateWidget->render($name, $value, $attributes, $errors);
		if ((!isset($attributes['readonly'])) && (!isset($attributes['disabled']))) {
			$code .= sprintf(<<<EOF
<script type="text/javascript">
$('#%s').datepicker({ dateFormat:'yy-mm-dd%s', showOn:'button', constrainInput:false%s });
$('#%s').change(function() {
	var dt = Date.parse($(this).val());
	$(this).val((dt != null) ? dt.toString('yyyy-MM-dd%s') : '');
});
</script>
EOF
				,
				$id,
				$includeTime ? ' 00:00:00' : '',
				$buttonImageCode,
				$id,
				$includeTime ? ' HH:mm:ss' : ''
			);
		}
		return $code;
	}
}
