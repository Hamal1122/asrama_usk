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

class tolakPembayaranEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $pembayaran;

    /**
     * Create a new message instance.
     */
    public function __construct(pembayaran $pembayaran)
    {
        $this->pembayaran = $pembayaran;
    }

    /**
     * Get the message content definition.
     */
    public function build()
    {
       return $this->subject('Asrama USK - Pengajuan Berkas Ditolak')
       ->view('tolakPembayaranEmail', [
        'name'=>$this->pembayaran->user->name,
        'nim'=>$this->pembayaran->user->nim,
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
