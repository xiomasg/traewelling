<?php

namespace App\Virtual\RequestBodies;

/**
 * @OA\Schema(
 *     title="StatusUpdateBody",
 *     description="Status Update Body",
 *     @OA\Xml(
 *         name="StatusUpdateBody"
 *     )
 * )
 */
class StatusUpdateBody
{
    /**
     * @OA\Property (
     *     title="body",
     *     maxLength=280,
     *     description="Status-Text to be displayed alongside the checkin",
     *     example="Wow. This train is extremely crowded!",
     *     nullable=true
     * )
     * @var string;
     */
    public $body;

    /**
     * @OA\Property (
     *     ref="#/components/schemas/BusinessEnum"
     * )
     * @var integer
     */
    public $business;

    /**
     * @OA\Property (
     *     ref="#/components/schemas/VisibilityEnum",
     * )
     * @var integer
     */
    public $visibility;

    /**
     * @OA\Property (
     *      title="realDeparture",
     *      description="Real departure time",
     *      format="date",
     *      example="2020-01-01 12:00:00",
     *      nullable=true
     * )
     */
    public $realDeparture;

    /**
     * @OA\Property (
     *      title="realArrival",
     *      description="Real arrival time",
     *      format="date",
     *      example="2020-01-01 13:00:00",
     *      nullable=true
     * )
     */
    public $realArrival;

    /**
     * @OA\Property (
     *     title="destinationId",
     *     description="Destination station id",
     *     example="1",
     *     nullable=true
     * )
     */
    public $destinationId;

    /**
     * @OA\Property (
     *     title="destinationArrivalPlanned",
     *     description="Destination arrival time",
     *     format="date",
     *     example="2020-01-01 13:00:00",
     *     nullable=true
     * )
     */
    public $destinationArrivalPlanned;

}
