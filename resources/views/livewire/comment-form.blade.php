<div class="container">
    <br>
    @error('newReview')
    <div class="alert alert-danger col-sm-10">{{ $message }}</div>
    @enderror

    @if(session()->has('message'))
        <div class="alert alert-success col-sm-10">{{ session('message') }}</div>
    @endif
    <form action="" wire:submit.prevent="addReview">
        <div class="row">
            <div class="row col-sm-10">
                <input wire:model.debounce.500ms="newReview" type="text" class="form-control" placeholder="Enter Review For E-Government">
            </div>
            <div class="col-sm-2">
                <button type="submit" class="btn-xs btn btn-primary">Add</button>
            </div>
        </div>
    </form>
    <div class="col-10">
        <div class="ibox">
            @foreach($reviews as $review)
                <div class="ibox-content no-padding mt-2">
                    <div class="social-feed-box">
                        <div class="float-right">
                            <button wire:click="removeReview({{$review->id}})" class="btn-xs btn-danger dim"
                                    type="button">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                        <div class="social-avatar">
                            <div class="media-body">
                                <h5 href="#">
                                    {{ $review->name }}
                                </h5>
                                <code class="text-muted">{{ $review->created_at->diffForHumans() }}</code>
                            </div>
                        </div>
                        <div class="social-body">
                            <p>
                                {{ $review->message }}
                            </p>
                            <div class="btn-group">
                                <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i></button>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</div>

