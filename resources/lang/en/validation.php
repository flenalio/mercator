<?php
return [
    'accepted' => 'You must accept: attribute.',
    'active_url' => ': attribute is not a valid URL.',
    'after' => ': attribute must be a date later than: date.',
    'after_or_equal' => ': attribute must be a later date or equal to: date.',
    'alpha' => ': attribute can only contain letters.',
    'alpha_dash' => ': attribute can only contain letters, numbers and dashes.',
    'alpha_num' => ': attribute can only contain letters and numbers.',
    'array' => ': attribute must be an array.',
    'before' => ': attribute must be a date before: date.',
    'before_or_equal' => ': attribute must be a date later than or equal to: date.',
    'between' => [
        'array' => ': attribute must be understood in: min and: max items.',
        'file' => ': attribute must be between: min and: max kilobytes.',
        'numeric' => ': attribute must be between: min and: max.',
        'string' => ': attribute must be understood in: min and: max characters.',
    ],
    'boolean' => ': attribute must be "True" or "False".',
    'confirmed' => 'The confirmation: attribute does not match.',
    'custom' => ['attribute-name' => ['rule-name' => 'custom-message']],
    'date' => ': attribute is not a valid date.',
    'date_equals' => '',
    'date_format' => ': attribute does not match the format: format.',
    'db_column' => ': attribute must only contain letters of the Latin ISO basic alphabet, numbers, hyphen and cannot start with a number.',
    'different' => ': attribute and: other must be different.',
    'digits' => ': attribute must have a number of type: digit.',
    'digits_between' => 'The value of number: attribute must be between: min and: max.',
    'dimensions' => 'The dimensions of the image: attribute are not valid.',
    'distinct' => 'The field: attribute has a duplicate value',
    'dont_allow_first_letter_number' => 'The ": input" field cannot start with a number',
    'email' => ': attribute must be a valid email address',
    'ends_with' => '',
    'exceeds_maximum_number' => 'The selected attribute is not valid.',
    'exists' => ': attribute is not valid',
    'file' => ': attribute must be a file',
    'filled' => 'The field: attribute is required',
    'gt' => [
        'array' => ': attribute must have more than: value items.',
        'file' => ': attribute must be greater than: value kilobytes.',
        'numeric' => ': attribute must be greater than: value.',
        'string' => ': attribute must be greater than: value characters.',
    ],
    'gte' => [
        'array' => ': attribute must have: value items or more',
        'file' => ': attribute must be greater than or equal to: value kilobytes.',
        'numeric' => ': attribute must be greater than or equal to: value.',
        'string' => ': attribute must be greater than or equal: value characters.',
    ],
    'image' => ': attribute must be an image',
    'in' => 'The selection: attribute is invalid',
    'in_array' => ': attribute field does not exist in: other',
    'integer' => ': attribute must be an integer.',
    'ip' => ': attribute must be a valid ip',
    'ipv4' => ': attribute must be a valid ip V4',
    'ipv6' => ': attribute must be a valid V6 ip',
    'json' => ': attribute must be a valid JSON string',
    'latin' => ': attribute must only contain letters of the Latin ISO basic alphabet.',
    'latin_dash_space' => ': attribute must only contain letters of the Latin ISO basic alphabet, numbers, hyphen, hyphen and spaces.',
    'lt' => [
        'array' => ': attribute must have less than: value items.',
        'file' => ': attribute must be less than: value kilobytes.',
        'numeric' => ': attribute must be less than: value.',
        'string' => ': attribute must be less than: value characters.',
    ],
    'lte' => [
        'array' => ': attribute must not have more than: value items.',
        'file' => ': attribute must be less than or equal: value kilobytes.',
        'numeric' => ': attribute must be less than or equal: value.',
        'string' => ': attribute must be less than or equal: value characters.',
    ],
    'max' => [
        'array' => ': attribute must not have more than: max items.',
        'file' => ': attribute must not be greater than: max kilobytes.',
        'numeric' => ': attribute cannot be greater than: max.',
        'string' => ': attribute cannot be greater than: max characters.',
    ],
    'mimes' => ': attribute must be a file of type:: values.',
    'mimetypes' => ': attribute must be a file of type:: values.',
    'min' => [
        'array' => ': attribute must have at least: min items.',
        'file' => ': attribute must be at least: min kilobytes.',
        'numeric' => ': attribute must be at least: min.',
        'string' => ': attribute must be at least: min characters.',
    ],
    'not_in' => 'The selection: attribute is invalid.',
    'not_regex' => 'The format: attribute is invalid.',
    'numeric' => ': attribute must be a number',
    'password' => 'The password is incorrect',
    'present' => ': attribute field must be present.',
    'regex' => ': attribute is not in the correct format',
    'required' => ': attribute field is required.',
    'required_if' => ': attribute field is required when: other is: value.',
    'required_unless' => ': attribute field is required unless: other is in: values.',
    'required_with' => ': attribute field is required when: values is present.',
    'required_with_all' => ': attribute field is required when: values is present.',
    'required_without' => ': attribute field is required when: values is not present.',
    'required_without_all' => ': attribute field is required when none of: values are present',
    'reserved_word' => ': attribute contains a reserved word.',
    'same' => ': attribute and: other must match.',
    'size' => [
        'array' => ': attribute must contain: size items.',
        'file' => ': attribute must be: size kilobytes.',
        'numeric' => ': attribute must be: size.',
        'string' => ': attribute must be: size characters.',
    ],
    'starts_with' => '',
    'string' => ': attribute must be a string',
    'timezone' => ': attribute must be a valid field.',
    'unique' => ': attribute has already been taken.',
    'uploaded' => ': attribute upload failed',
    'url' => ': attribute in invalid format',
    'uuid' => '',
];
