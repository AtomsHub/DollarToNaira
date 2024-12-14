<table id="rate" class="table table-striped">
    <thead>
        <tr >
           
            <th >Currency</th>
            <th>Rate</th>
            <th class="d-none d-md-block">Last Update</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($currencies as $key => $currency)
        <tr>
            <td>
                <div class="d-flex align-items-center">
                    <img src="{{ $currency->currency->image_url  }}" 
                         alt="{{ $currency->currency->name }}" 
                         style="width: 30px; height: 30px; margin-right: 10px; border-radius: 50%;">
                    <div>
                        <strong>{{ $currency->currency->symbol }} {{ $currency->currency->code }}</strong><br>
                        <span>{{ $currency->currency->name }}</span>
                    </div>
                </div>
            </td>
            <td >
                    <div class="d-flex align-items-center justify-content-center flex-nowrap">
                        <div class="">BUY</div>
                        <div class=""><span class="overlay-text">{{ $currency->sign }}{{ number_format($currency->buy) }}</span></div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center flex-nowrap">
                        <div class="">SELL</div>
                        <div class=""><span class="overlay-text">{{ $currency->sign }}{{ number_format($currency->sell) }}</span></div>
                    </div>
                    {{-- <div style="margin-bottom: 5px;">
                        <span style="font-weight: bold; color: black;"> {{ $currency->updated_at->diffForHumans() }}</span>
                       
                    </div> --}}
                </div>
                
            </td>
            <td class="d-none d-md-block">
                <span style="font-size: 14px; color: gray;">
                    {{ $currency->updated_at->diffForHumans() }}
                </span>
            </td>
        </tr>
        
        @empty
            <tr>
                <td colspan="4" class="text-center">No currencies available</td>
            </tr>
        @endforelse
    </tbody>
</table>