<?php
namespace App\Logging;

class JsonLog
{
    // Path to the log file
    protected $logFilePath = 'path/to/logfile.json';

    /**
     * Logs a message in JSON format.
     *
     * @param string $level The log level (e.g., 'INFO', 'ERROR', etc.).
     * @param string $message The log message.
     * @param array $context Additional context for the log entry.
     */
    public function log($level, $message, array $context = [])
    {
        // Create the log entry
        $logEntry = [
            'timestamp' => date('Y-m-d H:i:s'),
            'level'     => $level,
            'message'   => $message,
            'context'   => $context,
        ];

        // Convert the log entry to JSON
        $jsonLogEntry = json_encode($logEntry, JSON_PRETTY_PRINT);

        // Write the JSON log entry to the log file
        file_put_contents($this->logFilePath, $jsonLogEntry . PHP_EOL, FILE_APPEND);
    }

    /**
     * Sets the path to the log file.
     *
     * @param string $logFilePath The path to the log file.
     */
    public function setLogFilePath($logFilePath)
    {
        $this->logFilePath = $logFilePath;
    }
}
