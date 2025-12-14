<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_send_email_verification_notification_sends_notification(): void
    {
        Notification::fake();

        $user = User::factory()->create([
            'email' => 'test@example.com',
            'email_verified_at' => null,
        ]);

        $user->sendEmailVerificationNotification();

        Notification::assertSentTo(
            [$user],
            VerifyEmail::class
        );
    }

    public function test_send_email_verification_notification_contains_correct_email(): void
    {
        Notification::fake();

        $user = User::factory()->create([
            'email' => 'specific@example.com',
            'email_verified_at' => null,
        ]);

        $user->sendEmailVerificationNotification();

        Notification::assertSentTo(
            [$user],
            VerifyEmail::class,
            function ($notification, $channels) use ($user) {
                $mailData = $notification->toMail($user);
                return $mailData->subject === 'Verify Email Address';
            }
        );
    }
}
