<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Pembayaran;
use App\Models\Berkas;

class tolakBerkasEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $berkas;

    /**
     * Create a new message instance.
     */
    public function __construct(Berkas $berkas)
    {
        $this->berkas = $berkas;
    }

    /**
     * Get the message content definition.
     */
    public function build()
    {
       return $this->subject('Asrama USK - Pengajuan Berkas Ditolak')
       ->view('tolakBerkasEmail', [
        'name'=>$this->berkas->user->name,
        'nim'=>$this->berkas->user->nim,
       ]);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
