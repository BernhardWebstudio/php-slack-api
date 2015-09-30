<?php

/*
 * This file is part of the Slack API library.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CL\Slack\Tests\Payload;

use CL\Slack\Payload\GroupsUnarchivePayloadResponse;
use CL\Slack\Payload\PayloadResponseInterface;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 */
class GroupsUnarchivePayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * @inheritdoc
     */
    public function createResponseData()
    {
        return [];
    }

    /**
     * @inheritdoc
     *
     * @param array                          $responseData
     * @param GroupsUnarchivePayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
    }
}
