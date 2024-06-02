<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Pembayaran;

class kirimEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $pembayaran;

    /**
     * Create a new message instance.
     */
    public function __construct(Pembayaran $pembayaran)
    {
        $this->pembayaran = $pembayaran;
    }

    /**
     * Get the message content definition.
     */
    public function build()
    {
       return $this->subject('Asrama USK - Pengajuan Kamar Disetujui')
       ->view('kirimEmail', [
        'name'=>$this->pembayaran->user->name,
        'nim'=>$this->pembayaran->user->nim,
        'kamar'=>$this->pembayaran->kamar->nama,
        'gedung'=>$this->pembayaran->kamar->gedung->nama,
        'mulai'=>$this->pembayaran->tanggal_masuk,
        'akhir'=>$this->pembayaran->tanggal_keluar,
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
