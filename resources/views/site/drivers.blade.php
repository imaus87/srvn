<div>
    Rijders
    <ul>
      @foreach ($drivers as $driver)
        <li>
          {{ $driver->full_name }}
        </li>
      @endforeach
    </ul>
</div>
