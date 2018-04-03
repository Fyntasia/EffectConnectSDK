<?php
    // 1. Require the SDK base file.
    require_once(realpath(__DIR__.'/..').'/base.php');

    /**
     * @var \EffectConnectSDK\Core $effectConnectSDK
     * @var \EffectConnectSDK\Core\CallType\OrderCall $orderCallType
     *
     * 2. Get the Order call type.
     */
    try
    {
        $orderCallType = $effectConnectSDK->OrderCall();
    } catch (Exception $exception)
    {
        echo sprintf('Could not create call type. `%s`', $exception->getMessage());
        die();
    }
    /**
     * 3. Create an EffectConnectSDK\Core\Model\Order object and populate it with the order number
     */
    $order       = (new \EffectConnectSDK\Core\Model\OrderReadRequest())
        ->setIdentifierType(\EffectConnectSDK\Core\Model\OrderReadRequest::TYPE_EFFECTCONNECT_NUMBER)
        ->setIdentifier('1189-2018-2')
    ;
    /**
     * 4. Make the call
     */
    $apiCall     = $orderCallType->read($order);
    $apiCall->call();

    echo $apiCall->getCurlResponse();