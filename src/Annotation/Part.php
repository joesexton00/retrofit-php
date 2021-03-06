<?php
/*
 * Copyright (c) Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Retrofit\Annotation;

use Tebru\Dynamo\Annotation\DynamoAnnotation;

/**
 * Denotes a single part of a multi-part request.
 * 
 * This annotation defines a method parameter that will be added as a part of 
 * the request. If the variable name differs from the desired part name, you 
 * may specify a different variable name using the `var=` parameter on this
 * annotation. 
 * You can define multiple of these annotations for multiple variable parts.
 *
 *     @Part("part1")
 *     @Part("part2", var="foo")
 *
 * @author Nate Brunette <n@tebru.net>
 *
 * @Annotation
 * @Target({"CLASS", "METHOD"})
 */
class Part extends VariableMapper implements DynamoAnnotation
{
    const NAME = 'part';

    /**
     * The name of the annotation or class of annotations
     *
     * @return string
     */
    public function getName()
    {
        return self::NAME;
    }

    /**
     * Whether or not multiple annotations of this type can
     * be added to a method
     *
     * @return bool
     */
    public function allowMultiple()
    {
        return true;
    }
}
