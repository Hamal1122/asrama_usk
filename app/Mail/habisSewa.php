<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Pembayaran;
use App\Models\Riwayat;

class habisSewa extends Mailable
{
    use Queueable, SerializesModels;

    protected $riwayat;

    /**
     * Create a new message instance.
     */
    public function __construct(Riwayat $riwayat)
    {
        $this->riwayat = $riwayat;
    }

    /**
     * Get the message content definition.
     */
    public function build()
    {
       return $this->subject('Asrama USK - Pengajuan Kamar Disetujui')
       ->view('emailHabisSewa', [
        'name'=>$this->riwayat->user->name,
        'nim'=>$this->riwayat->user->nim,
        'kamar'=>$this->riwayat->kamar->nama,
        'gedung'=>$this->riwayat->kamar->gedung->nama,
        'mulai'=>$this->riwayat->tanggal_masuk,
        'akhir'=>$this->riwayat->tanggal_keluar,
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
