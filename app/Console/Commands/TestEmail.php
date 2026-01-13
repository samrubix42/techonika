<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class TestEmail extends Command
{
    protected $signature = 'test:email';
    protected $description = 'Test email configuration';

    public function handle()
    {
        try {
            Mail::raw('This is a test email from Techonika to verify email configuration is working.', function ($message) {
                $message->to('techonika.com@gmail.com')
                        ->subject('Test Email - Techonika');
            });

            $this->info('✅ Test email sent successfully to techonika.com@gmail.com');
            $this->info('Check your inbox (and spam folder)');
        } catch (\Exception $e) {
            $this->error('❌ Failed to send email');
            $this->error('Error: ' . $e->getMessage());
            $this->newLine();
            $this->warn('Common issues:');
            $this->line('1. Check your .env file has correct MAIL_* settings');
            $this->line('2. Gmail requires App Password (not regular password)');
            $this->line('3. Check if 2FA is enabled on Gmail');
            $this->line('4. Verify MAIL_PASSWORD in .env');
        }

        return 0;
    }
}
