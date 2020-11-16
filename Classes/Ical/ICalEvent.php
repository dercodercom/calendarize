<?php

declare(strict_types=1);

namespace HDNET\Calendarize\Ical;

interface ICalEvent
{
    /**
     * Value for starTime if the event is allDay.
     */
    const ALLDAY_START_TIME = 0;
    /**
     * Value for endTime if the event is allDay.
     */
    const ALLDAY_END_TIME = 0;

    /**
     * Returns event data as key value array.
     *
     * @return array
     */
    public function getRawData(): array;

    /**
     * Get UID.
     *
     * @return string
     */
    public function getUid(): string;

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle(): ?string;

    /**
     * Get description.
     *
     * @return string|null
     */
    public function getDescription(): ?string;

    /**
     * Get location.
     *
     * @return string|null
     */
    public function getLocation(): ?string;

    /**
     * Get organinzer.
     *
     * @return string|null
     */
    public function getOrganizer(): ?string;

    /**
     * Get the start date.
     * The date is converted to the local timezone and set to the beginning of the day.
     *
     * @return \DateTime|null
     */
    public function getStartDate(): ?\DateTime;

    /**
     * Get the inclusive end date.
     * The date is converted to the local timezone and set to the beginning of the day.
     *
     * @return \DateTime|null
     */
    public function getEndDate(): ?\DateTime;

    /**
     * Get start time.
     * The time is calculated in the local timezone.
     *
     * @return int
     */
    public function getStartTime(): int;

    /**
     * Get end time.
     * The time is calculated in the local timezone.
     *
     * @return int
     */
    public function getEndTime(): int;

    /**
     * Get allDay.
     *
     * The "VEVENT" is also the calendar component used to specify an
     * anniversary or daily reminder within a calendar. These events
     * have a DATE value type for the "DTSTART" property instead of the
     * default value type of DATE-TIME. If such a "VEVENT" has a "DTEND"
     * property, it MUST be specified as a DATE value also.
     *
     * @return bool
     */
    public function isAllDay(): bool;

    /**
     * Get openEndTime.
     *
     * @return bool
     */
    public function isOpenEndTime(): bool;

    /**
     * Get state.
     *
     * @return string
     */
    public function getState(): string;
}
