<?php

namespace App\Logging;

use Illuminate\Support\Facades\DB;
use App\Traits\JsonLogTrait;

class JLog
{
    use JsonLogTrait;
    /**
     * Logs a migration happened  in the SQLite database.
     *
     * @param string $message The log message.
     * @param array $context Additional context of the migration (migration_file, environment, user (opt), ip (opt))
     * @param string $level The log level (e.g., 'INFO', 'ERROR', etc.).
     * @return void
      *  TODO:  to log to database with created_at timestamp
     */
    public static function logMigration($context, $level='INFO', $message = 'Migration run', array $context = []): void
    {
   // context must have the migration file, and which environment, and which user/developer who ran it (as optional)
        extract($context);
        if(!exists($migration_file) || !exists($environment)) {
            \Log::info('Migration log failed: migration_file and environment must be provided');
            return;
        }
    }
}
