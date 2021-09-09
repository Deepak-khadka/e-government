<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Neputer\Entities\Review;

class CommentForm extends Component
{
    public $newReview;
    public $reviews;

    /**
     * @throws ValidationException
     */
    public function updated($field)
    {
        $this->validateOnly($field, ['newReview' => 'required|max:255']);
    }

    public function addReview()
    {
        $this->validate(['newReview' => 'required|max:255']);

       Review::create([
            'message' => $this->newReview,
            'user_id' => Auth::user()->id ?? 1,
        ]);

       $this->newReview = '';
        session()->flash('message', 'Review Added Successfully');
    }

    public function removeReview($reviewId)
    {
       $review = Review::find($reviewId);
       $review->delete();
       session()->flash('message', 'Review Deleted Successfully');

    }

    public function render()
    {
        $this->reviews = Review::from('review')
            ->select('review.id', 'users.name as name', 'review.message', 'review.created_at')
            ->where('review.status', 1)
            ->join('users', 'users.id', '=', 'review.user_id')
            ->latest()
            ->get();

        return view('livewire.comment-form');
    }
}
