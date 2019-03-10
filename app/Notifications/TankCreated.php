<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Tank;

class TankCreated extends Notification
{
    use Queueable;

    public $tank;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Tank $tank)
    {
        $this->tank = $tank;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Notification: New Tank Created - ' . $this->tank->name)
            ->greeting('Great News!')
            ->line('A new tank has been created.')
            ->action('Tank Info', url('/tanks/' . $this->tank->slug))
            ->line('Thank you for using our application!')
            ->salutation('Powered by Laravel');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'tank' => $this->tank
        ];
    }
}
