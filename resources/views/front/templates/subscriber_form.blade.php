<div class="subscriber accordion" id="accordion">
    <div class="accordion-item shadow "> 
        <h2 class="accordion-header">
        <button class="accordion-button bg-danger text-white" type="button" data-bs-toggle="collapse" data-bs-target="#Subscriber" aria-expanded="true" aria-controls="Subscriber">
            <i class="fa-solid fa-envelope pe-2"></i>{{ __('Email Me New Jobs') }}
        </button>
        </h2>
        <div id="Subscriber" class="accordion-collapse collapse show">
            <div class="accordion-body">
                <div class="job-filter fs-7">
                    <div class="widget">
                        <div class="item">
                            <p>
                                {{ __('To get the latest news from our website, please subscribe us') }}
                            </p>
                            <form action="{{ route('subscriber_send_email') }}" method="post" class="form_subscribe_ajax">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="email" placeholder="example@email.com" class="form-control">
                                    <span class="text-danger error-text email_error"></span>
                                </div>
                                <div class="form-group">
                                    <div class="filter-button mt-3">
                                        <button type="submit" class="btn btn-danger w-100 rounded-0 py-2">
                                            {{ __('Subscribe Now') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>