@component('mail::message')
# Thanks, {{$data['name']}}

We Recieve Your Booking.

@component('mail::table')
| Data                  | Value                    |
| --------------------- |:------------------------:| 
| Your Trip             | {{$data['trip']}}        |      
| Trip Date             | {{$data['date']}}        |      
| # Adults              | {{$data['adults']}}      |      
| # Children            | {{$data['children']}}    |      
| Total Price           | {{$data['total_price']}} |      
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
