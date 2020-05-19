<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ' :attribute muss akzrptiert werden.',
    'active_url' => ' :attribute entspricht keiner gültigen URL.',
    'after' => ' :attribute muss ein Datum nach dem :date. sein',
    'after_or_equal' => ' :attribute muss ein Datum nach dem :date. sein, oder das gleiche',
    'alpha' => ' :attribute darf nur Buchstaben enthalten.',
    'alpha_dash' => ' :attribute darf nur Buchstaben, Zahlen, Schrägstriche und Unterstriche enthalten.',
    'alpha_num' => ' :attribute darf nur aus Buchstaben und Zahlen bestehen.',
    'array' => ' :attribute muss ein Array sein.',
    'before' => ' :attribute muss ein Datum vor dem :date. sein',
    'before_or_equal' => ' :attribute muss ein Datum vor dem :date. oder gleich sein',
    'between' => [
        'numeric' => ' :attribute muss zwischen :min und :max. sein',
        'file' => ' :attribute muss zwischen :min und :max kilobytes sein',
        'string' => ' :attribute muss zwischen :min und :max Zeichen lang sein',
        'array' => ' :attribute muss zwischen :min und :max Einträgen liegen',
    ],
    'boolean' => ':attribute Feld muss true oder false sein',
    'confirmed' => ' :attribute Bestätigung stimmt nicht überein',
    'date' => ' :attribute entspricht keinem gültigen Datum',
    'date_equals' => ' :attribute muss dem Datum :date entsprechen',
    'date_format' => ' :attribute muss dem Format :format entsprechen',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => ' :attribute muss mindestens :min. Zeichen enthalten',
        'file' => ' :attribute  muss mindestens :min kilobytes groß sein',
        'string' => 'Feld :attribute  muss mindestens :min Zeichen enthalten',
        'array' => ' :attribute  muss mindestens :min Einträge haben',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'Das :attribute Feld wird benötigt',
    'required_if' => 'Das :attribute Feld wird benötigt wenn :other ist :value',
    'required_unless' => 'Das :attribute wird benötigt ausser :other ist in :values enthalten',
    'required_with' => 'Das :attribute Feld wird benötigt wenn :values vorhanden ist',
    'required_with_all' => 'Das :attribute Feld wird benötigt wenn :values vorhanden ist/sind.',
    'required_without' => 'Das :attribute Feld wird benötigt wenn :values nicht vorhanden ist/sind',
    'required_without_all' => 'Das :attribute Feld wird benötigt wenn :values vorhanden ist/sind',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
