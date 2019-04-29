<p>
    <?= sprintf(lang('igniter.reservation::default.text_greetings'),
        $reservation->first_name.' '.$reservation->last_name); ?>
</p>

<p>
    <?= (lang('igniter.reservation::default.text_success_message'));
//        dd($reservation::with('location')),
//        $reservation->location->location_name,

       // $reservation->reservation_datetime->format($bookingDateTimeFormat)); ?>
</p>

