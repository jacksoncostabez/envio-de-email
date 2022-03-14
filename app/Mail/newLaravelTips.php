<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class newLaravelTips extends Mailable
{
    use Queueable, SerializesModels;
    private $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(\stdClass $user)
    {
        $this->user = $user;
    }

    /**
     * Responsável por setar os parâmetros
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Novo conteúdo...');
        $this->to($this->user->email, $this->user->name);

        return $this->markdown('mail.newLaravelTips', [
            'user' => $this->user
        ]);
    }
}
