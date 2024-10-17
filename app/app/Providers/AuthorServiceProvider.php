<?php

namespace App\Providers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AuthorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */

    public function boot(): void
    {
        Gate::define('change_comment', function (User $user, Comment $comment) {
            return $user->id === $comment->user_id;
        });
    }
}
