@php
    use App\Models\Broker;
    use Illuminate\Support\Collection;
    /** @var Collection|Broker[] $brokers */
@endphp

<div class="broker-list">
    <h2>{{ $title }}</h2>
    @foreach($brokers as $broker)
        <x-broker :broker="$broker" />
    @endforeach
</div>
