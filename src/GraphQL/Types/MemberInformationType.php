<?php
/**
 * This file is part of Notadd.
 *
 * @author        TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime      2017-11-08 15:16
 */
namespace Notadd\Member\GraphQL\Types;

use Notadd\Foundation\GraphQL\Abstracts\Type as AbstractType;

/**
 * Class MemberInformationType.
 */
class MemberInformationType extends AbstractType
{
    /**
     * @return array
     */
    public function fields()
    {
        return [];
    }

    /**
     * @return string
     */
    public function name()
    {
        return 'memberInformation';
    }
}
