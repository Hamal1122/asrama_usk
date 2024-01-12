<?php

namespace App\Console\Commands;

use App\Models\Pembayaran;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\Command;

class CleanUpOldData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cleanup:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'cleanup data that expired for a year';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        DB::beginTransaction();
        
        try{
            $dateTreshold = Carbon::now()->subYear();

            Pembayaran::where('tanggal_keluar', '<', $dateTreshold)->delete();

            DB::table('berkas')
            ->whereIn('id', function($query) use ($dateTreshold){
                $query->select('berkas_id')
                ->from('pembayaran')
                ->where('tanggal_keluar', '<', $dateTreshold);
            })
            ->delete();

            DB::commit();
            $this->info('Data lama berhasil dihapus');
        } catch (\Exception $e) {
            DB::rollback();
            $this->error('error: ' . $e->getMessage());
        }
    }
}
