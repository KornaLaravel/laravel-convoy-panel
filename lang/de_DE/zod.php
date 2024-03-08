<?php

return [
    'errors' => [
        'invalid_type' => '{{expected}} erwartet, {{received}} erhalten',
        'invalid_type_received_undefined' => 'Erforderlich',
        'invalid_literal' => 'Ungültiges Wort, {{expected}} erwartet',
        'unrecognized_keys' => 'Nicht erkannte(r) Schlüssel im Objekt: {{- keys}}',
        'invalid_union' => 'Ungültige Eingabe',
        'invalid_union_discriminator' => 'Ungültiges Trennzeichen. {{- options}} erwartet',
        'invalid_enum_value' => 'Ungültiger enum-Wert. {{- options}} erwartet, {{received}} erwartet',
        'invalid_arguments' => 'Ungültige Funktionsargumente',
        'invalid_return_type' => 'Ungültiger Funktionsrückgabetyp',
        'invalid_date' => 'Ungültiges Datum',
        'custom' => 'Ungültige Eingabe',
        'invalid_intersection_types' => 'Schnittmengenergebnisse konnten nicht zusammengeführt werden',
        'not_multiple_of' => 'Zahl muss ein Vielfaches von {{multipleOf}} sein',
        'not_finite' => 'Nummer muss endlich sein',
        'invalid_string' => [
            'email' => '{{validation}} ungültig',
            'url' => '{{validation}} ungültig',
            'uuid' => '{{validation}} ungültig',
            'cuid' => '{{validation}} ungültig',
            'regex' => 'Ungültig',
            'datetime' => '{{validation}} ungültig',
            'startsWith' => 'Ungültige Eingabe: Muss beginnen mit: "{{startsWith}}"',
            'endsWith' => 'Ungültige Eingabe: Muss enden mit: "{{endsWith}}"',
            'hostname' => 'Invalid hostname',
            'us_keyboard_characters' => 'Invalid US keyboard characters',
            'password' => 'Muss 8 Zeichen erhalten. Ein Groß-, ein Kleinbuchstaben, eine Nummer und ein Sonderzeichen',
            'ip_address' => 'Invalid IP address',
            'mac_address' => 'Invalid MAC address',
        ],
        'too_small' => [
            'array' => [
                'exact' => 'Array muss genau {{minimum}} Element(e) enthalten',
                'inclusive' => 'Array muss mindestens {{minimum}} Element(e) enthalten',
                'not_inclusive' => 'Array muss mehr als {{minimum}} Element(e) enthalten',
            ],
            'string' => [
                'exact' => 'String muss genau {{minimum}} Zeichen enthalten',
                'inclusive' => 'String muss mindestens {{minimum}} Zeichen enthalten',
                'not_inclusive' => 'String muss mehr als {{minimum}} Zeichen enthalten',
            ],
            'number' => [
                'exact' => 'Nummer muss genau {{minimum}} sein',
                'inclusive' => 'Nummer muss größer oder gleich {{minimum}} sein',
                'not_inclusive' => 'Nummer muss größer als {{minimum}} sein',
            ],
            'set' => [
                'exact' => 'Ungültige Eingabe',
                'inclusive' => 'Ungültige Eingabe',
                'not_inclusive' => 'Ungültige Eingabe',
            ],
            'date' => [
                'exact' => 'Datum muss genau {{- minimum, datetime}} sein',
                'inclusive' => 'Datum muss größer oder gleich {{- minimum, datetime}} sein',
                'not_inclusive' => 'Datum muss größer als {{- minimum, datetime}} sein',
            ],
        ],
        'too_big' => [
            'array' => [
                'exact' => 'Array muss genau {{maximum}} Element(e) enthalten',
                'inclusive' => 'Array darf höchstens {{maximum}} Element(e) enthalten',
                'not_inclusive' => 'Array muss weniger als {{maximum}} Element(e) enthalten',
            ],
            'string' => [
                'exact' => 'String muss genau {{maximum}} Zeichen enthalten',
                'inclusive' => 'String darf maximal {{maximum}} Zeichen enthalten',
                'not_inclusive' => 'String muss weniger als {{maximum}} Zeichen enthalten',
            ],
            'number' => [
                'exact' => 'Nummer muss genau {{maximum}} sein',
                'inclusive' => 'Nummer muss kleiner oder gleich {{maximum}} sein',
                'not_inclusive' => 'Zahl muss kleiner als {{maximum}} sein',
            ],
            'set' => [
                'exact' => 'Ungültige Eingabe',
                'inclusive' => 'Ungültige Eingabe',
                'not_inclusive' => 'Ungültige Eingabe',
            ],
            'date' => [
                'exact' => 'Datum muss genau {{- maximum, datetime}} sein',
                'inclusive' => 'Datum muss kleiner oder gleich {{- maximum, datetime}} sein',
                'not_inclusive' => 'Datum muss kleiner als {{- maximum, datetime}} sein',
            ],
        ],
    ],
    'validations' => [
        'email' => 'Email',
        'url' => 'URL',
        'uuid' => 'UUID',
        'cuid' => 'CUID',
        'regex' => 'regex',
        'datetime' => 'datetime',
    ],
    'types' => [
        'function' => 'function',
        'number' => 'number',
        'string' => 'string',
        'nan' => 'nan',
        'integer' => 'integer',
        'float' => 'float',
        'boolean' => 'boolean',
        'date' => 'date',
        'bigint' => 'bigint',
        'undefined' => 'undefined',
        'symbol' => 'symbol',
        'null' => 'null',
        'array' => 'array',
        'object' => 'object',
        'unknown' => 'unknown',
        'promise' => 'promise',
        'void' => 'void',
        'never' => 'never',
        'map' => 'map',
        'set' => 'set',
    ],
];
