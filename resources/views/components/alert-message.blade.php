@if($message = session('_message'))
    <transition name="fade">
        <div class="alert-message -{{ $message->type }}" v-if="alert.open">
            <div class="content">
                @if($message->title)
                    <strong class="title">{{ $message->title }}</strong>
                @endif

                <div class="body">
                    {!! $message->content !!}
                </div>
            </div>

            <button type="button" class="close" @click.prevent="closeAlertMessage">
                <i class="icon icon-x"></i>
            </button>
        </div>
    </transition>
@endif
