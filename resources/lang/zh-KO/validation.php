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
    'unique' => ':attribute 이 이미 존재합니다',
    'accepted' => ':attribute 이 허용되어야합니다.',
    'active_url' => ':attribute 이 유효한 URL이 아닙니다.',
    'after' => ':attribute 은 :date 이후의 날자이여야 합니다',
    'alpha' => ':attribute 은 모든 알파벳 문자로 구성되어야합니다.',
    'alpha_dash' => ':attribute 은 모든 문자, 숫자, 밑줄 또는 밑줄 문자로 구성되어야합니다.',
    'alpha_num' => ':attribute 은 문자와 숫자로만 구성되어야합니다.',
    'array' => ':attribute 은 배열이어야합니다.',
    'before' => ':attribute 은  :date 이전 날자이여야 합니다',
    'between' => [
        'numeric' => ':attribute 은 :min 부터 :max 사이이여야 합니다',
        'file' => ':attribute 은 :min 부터 :max KB사이이여야 합니다',
        'string' => ':attribute 은 :min 부터 :max 문자사이이여야 합니다',
        'array' => ':attribute 은 :min 부터 :max 항목사이이여야 합니다',
    ],
    'boolean' => ':attribute 은 true 或 false 이여야 합니다',
    'confirmed' => ':attribute 2개의 확인이 일치하지 않습니다',
    'date' => ':attribute 必须是一个合法的日期',
    'date_format' => ':attribute 및 주어진 형식이 :format 일치하지 않습니다',
    'different' => ':attribute 은 :other 와 달라야 합니다',
    'digits' => ':attribute 은 :digits 이여야 합니다',
    'digits_between' => ':attribute 必须在 :min and :max 位之间',
    'email' => ':attribute 必须是一个合法的电子邮件地址。',
    'filled' => ':attribute 的字段是必填的',
    'exists' => '选定的 :attribute 是无效的',
    'image' => ':attribute 必须是一个图片 (jpeg, png, bmp 或者 gif)',
    'in' => '选定的 :attribute 是无效的',
    'integer' => ':attribute 必须是个整数',
    'ip' => ':attribute 必须是一个合法的 IP 地址。',
    'max' => [
        'numeric' => ':attribute 的最大长度为 :max 位',
        'file' => ':attribute 的最大为 :max',
        'string' => ':attribute 的最大长度为 :max 字符',
        'array' => ':attribute 的最大个数为 :max 个',
    ],
    'mimes' => ':attribute 的文件类型必须是:values',
    'mimetypes'            => ':attribute 的文件类型必须是: :values.',
    'min' => [
        'numeric' => ':attribute 的最小长度为 :min 位',
        'string' => ':attribute 的最小长度为 :min 字符',
        'file' => ':attribute 大小至少为:min KB',
        'array' => ':attribute 至少有 :min 项',
    ],
    'not_in' => '选定的 :attribute 是无效的',
    'numeric' => ':attribute 必须是数字',
    'regex' => ':attribute 格式是无效的',
    'required' => ':attribute 字段必须填写',
    'required_if' => ':attribute 字段是必须的当 :other 是 :value',
    'required_with' => ':attribute 字段是必须的当 :values 是存在的',
    'required_with_all' => ':attribute 字段是必须的当 :values 是存在的',
    'required_without' => ':attribute 字段是必须的当 :values 是不存在的',
    'required_without_all' => ':attribute 字段是必须的当 没有一个 :values 是存在的',
    'same' => ':attribute 和 :other 必须匹配',
    'size' => [
        'numeric' => ':attribute 必须是 :size 位',
        'file' => ':attribute 必须是 :size KB',
        'string' => ':attribute 必须是 :size 个字符',
        'array' => ':attribute 必须包括 :size 项',
    ],
    'url' => ':attribute 无效的格式',
    'timezone' => ':attribute 必须个有效的时区',
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
    'custom' => [],
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */
    'attributes' => [],
];
