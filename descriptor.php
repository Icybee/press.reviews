<?php

namespace Icybee\Modules\Press\Reviews;

use ICanBoogie\Module\Descriptor;

return [

	Descriptor::TITLE => 'Press veviews',
	Descriptor::DESCRIPTION => "Introduces the <q>Press Reviews</q> content type.",
	Descriptor::CATEGORY => 'contents',
	Descriptor::INHERITS => 'contents',
	Descriptor::MODELS => [

		'primary' => 'inherit'

	],

	Descriptor::NS => __NAMESPACE__
];
