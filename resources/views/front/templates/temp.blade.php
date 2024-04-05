            @foreach($why_choose_items as $item)
            <div class="col-md-6">
                <div class="inner">
                    <div class="icon">
                        <i class="{{ $item->icon }}"></i>
                    </div>
                    <div class="text">
                        <h2>{{ $item->heading }}</h2>
                        <p>{{ nl2br($item->text) }}</p>
                    </div>
                </div>
            </div>
            @endforeach