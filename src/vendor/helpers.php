<?php

use Hopex\VkSdk\Facades\Schema;
use Illuminate\Support\Str;

if (!function_exists('method_token_types')) {
    /**
     * Gets an array of allowed access token types for the specified API method. The types of token or access key that
     * can be used for a particular method are described at the top of the documentation page for this method.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param string $scopeWithMethod Accepts `scope` with `method` connected by a dot, for example, `account.getInfo`,
     *                                `users.get` or `execute`.
     *
     * @return array
     */
    function method_token_types(string $scopeWithMethod): array
    {
        $pair = explode('.', $scopeWithMethod);

        return data_get(
            target: json_decode(Schema::get('methods'), true),
            key: count($pair) == 2 ? implode('.', $pair) : $pair[0],
            default: []
        );
    }
}

if (!function_exists('compare')) {
    /**
     * Compares two or more objects of any type. If one object is passed, it will always be `true`.
     *
     * @version SDK: 3
     *
     * @param mixed ...$values Any objects.
     *
     * @return bool
     */
    function compare(...$values): bool
    {
        $isEqually = true;
        $valuesCount = count($values);

        if ($valuesCount < 2) {
            return true;
        } elseif ($valuesCount == 2) {
            return $values[0] == $values[1];
        } else {
            for ($i = 0; $i < $valuesCount && $isEqually; $i++) {
                for ($j = $i; $j < $valuesCount && $isEqually; $j++) {
                    $isEqually = $values[$i] == $values[$j];
                }
            }

            return $isEqually;
        }
    }
}

if (!function_exists('snake')) {
    /**
     * Convert a string to snake case.
     *
     * @version SDK: 3
     *
     * @param string $text Text by any case (camelCase, Pascal, etc.).
     *
     * @return string
     */
    function snake(string $text): string
    {
        return preg_replace('~(\D)(\d)~', '$1_$2', Str::snake($text));
    }
}

if (!function_exists('camel')) {
    /**
     * Convert a string to camel case.
     *
     * @version SDK: 3
     *
     * @param string $text Text by any case (snake_case, Pascal, etc.).
     *
     * @return string
     */
    function camel(string $text): string
    {
        return Str::camel($text);
    }
}
